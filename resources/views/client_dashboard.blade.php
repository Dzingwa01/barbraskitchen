@extends('client_home')
@section('content')
    <?php
    $menus = \App\Menu::where('active', 'active')->get();
    ?>
    <div class="row" style="margin-top:1em!important;">
        @if (session('status'))
            <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span id="status"> {{ session('status') }}</span>
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span id="error"> {{ session('error') }}</span>
            </div>
        @endif

        <center><h4>Our Menu</h4></center>
        @foreach($menus as $menu)
            <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                    <div class="card-image">
                        <img src="{{URL::asset($menu->picture_url)}}" height="300px">
                    </div>
                    <div class="card-content white-text">
                        <span class="card-title">{{$menu->name . ' - '.$menu->prize}}</span>

                        <p>{{$menu->description}}</p>
                    </div>
                    <div class="card-action">
                        <a id="{{$menu->id}}" onclick="order_now(this)" class="menu_item" href="#">Order Now</a>
                        {{--<a href="#">This is a link</a>--}}
                    </div>
                </div>
            </div>
            <div id="order_popup" class="modal" role="dialog">
                <div class="modal-header">
                    <button type="button" class="close">&times;</button>
                    <h4 class="modal-title center">Item Order</h4>
                </div>
                <div class="modal-body">
                    <form id='add_menu_item' class="col s12" role="form"  enctype="multipart/form-data">
                        <meta name="_token" content="{{ csrf_token() }}">
                        <div class="row">
                            <input placeholder="Customer Id" id="user_id" name="name" type="text" class="validate"
                                   hidden value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                            <input placeholder="Item Name" id="item_id" name="name" type="text" class="validate"
                                   hidden>
                            <div class="input-field col s6">
                                <input placeholder="Item Name" id="item_name" name="name" type="text" class="validate"
                                       required>
                                <label for="item_name">Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="item_prize" name="prize" placeholder="Item Prize" type="number" step="0.01"
                                       disabled="true"
                                       class="validate">
                                <label for="prize">Item Prize</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input id="quantity" name="quantity" placeholder="Item Quantity" type="number"
                                       class="validate" required>
                                <label for="quantity">Order Quantity</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="pickup_time" name="pickup_time" placeholder="Pick up time" type="text"
                                       class="validate" required>
                                <label for="pickup_time">Pickup Time</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                        <textarea id="special_instructions" name="special_instructions"
                                  placeholder="Any special instructions"
                                  class="materialize-textarea"></textarea>
                                <label for="special_instructions">Special Instructions</label>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col s4  offset-s1">
                                <button id="add_more" class="btn"><i class="material-icons left">add</i>
                                    Add More
                                </button>
                            </div>
                            <div class="col s4">
                                <button id="place_order" type="" class="btn"><i
                                            class="material-icons left">save</i>
                                    Place Order
                                </button>
                            </div>
                            <div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        @endforeach
    </div>
    <style>
        /*.card .card-content{*/
        /*height: 100px!important;*/
        /*}*/
    </style>

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="/js/materialize.js"></script>
    <script>
        $(document).ready(function () {
            // $("#menu_popup_dialog").modal();
            $(".alert").fadeTo(6000, 3300).slideUp(3300, function () {
                $(".alert").slideUp(3300);
            });

            $(".menu_item").on('click', function () {

//                alert(this);
            });
            $(".close").on('click', function () {
                console.log("cjeckkc");
                $("#order_popup").hide();
            });
            var year = new Date().getFullYear();
            $('#footer_p').append(year);
            $(".dropdown-trigger_cus").dropdown();
            $('.sidenav').sidenav();
        });

        function order_now(obj) {
            console.log("clicked");
            $.get('get_item/' + obj.id, function (data) {
                console.log("clicked", data);
                $("#item_name").val(data.menu_item.name);
                $("#item_prize").val(data.menu_item.prize);
                $("#item_id").val(data.menu_item.id);
                $("#order_popup").show();
            });

        }

        $("#place_order").on('click', function () {

            let formData = new FormData();
            formData.append("item_id",$("#item_id").val());
            formData.append("user_id",$("#user_id").val());
            formData.append("quantity",$("#quantity").val());
            formData.append("pickup_time",$("#pickup_time").val());
            formData.append("special_instructions",$("#special_instructions").val());
            console.log("form data",formData);

            $.ajax({
                url: "{{ route('place_order_client') }}",
                processData: false,
                contentType: false,
                data: formData,
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function (response, a, b) {
                    console.log("success", response);
                    $("#order_popup").hide();
                    window.location.href = "/home_client";
                },
                error: function (response) {
                    console.log("error", response);
                    window.location.href = '/home_client';

                }
            });
        });
    </script>
    <script src="/js/init.js"></script>
@endsection