@extends('adminlte::page')

@section('title', 'Barbras Kitchen')

@section('content_header')
    <h1>Menus</h1>
@stop
<?php $users = App\User::all();?>
@section('content')
    <div class="container-fluid box box-success">
        @if (session('status'))
            <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('status') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('error') }}
            </div>
        @endif
        {{--<div class="row">--}}
            {{--<div class="col m3">--}}
                {{--<a id="add_menu" style="margin-top: 1em;" class="btn"><i--}}
                            {{--class="fa fa-plus"></i>Add Menu Item</a><br/>--}}
            {{--</div>--}}
            {{--<br>--}}
        {{--</div>--}}
        <div class="row">
            <div class="col m12">
                <table class="table table-bordered" id="menu-table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Facebook Id</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div id="add_category_popup" class="modal" role="dialog">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title center">Add Menu Category</h4>
        </div>
        <div class="modal-body">
            <form class="col s12" method='post' enctype="multipart/form-data" action='/save_category'>
                <input type="hidden" name="_token" value={{csrf_token()}} >
                <div class="row">
                    <div class="input-field col s6 offset-m2">
                        <input placeholder="Category Name" id="category_name" name="category_name" type="text"
                               class="validate" required>
                        <label for="first_name">Category</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 offset-m2">
                        <input id="category_description" name="category_description" placeholder="Category Description"
                               type="text" class="validate" required>
                        <label for="category_description">Description</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 offset-m2">
                        <label>Category Image</label>
                        <input id="category_image" name="category_image" type="file" class="validate" required>
                        <!-- <label for="category_image">Image</label> -->
                    </div>
                </div>
                <div>
                    <input class="btn" type='submit' style="margin-left:12em!important;" value='Save'>
                </div>
            </form>
        </div>

    </div>
    <div id="add_menu_popup" class="modal" role="dialog">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title center">Add Menu Item</h4>
        </div>
        <div class="modal-body">
            <form id='add_menu_item' class="col s12" role="form" method="POST" enctype="multipart/form-data">
                <meta name="_token" content="{{ csrf_token() }}">
                <div class="row">

                    <div class="input-field col s6 offset-m2">
                        <input placeholder="Item Name" id="item_name" name="name" type="text" class="validate"
                               required>
                        <label for="item_name">Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 offset-m2">
                        <textarea id="item_description" name="description" placeholder="Enter item description"
                                  class="materialize-textarea" required></textarea>
                        <label for="item_description">Description</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 offset-m2">
                        <input id="item_prize" name="prize" placeholder="Item Prize" type="number" step="0.01"
                               class="validate" required>
                        <label for="prize">Item Prize</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 offset-m2">
                        <p>
                            <label for="active">
                                <input name="active" class="bread" value="active" type="radio" checked
                                       id="active"/>
                                <span>Active</span> </label>
                        </p>
                        <p>
                            <label for="inactive">
                                <input name="active" class="bread" type="radio" id="inactive"
                                       value="inactive"/>
                                <span>  InActive</span></label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6 offset-m2">
                        <label  for="item_image">Item Image</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6 offset-m2">
                        <img id="item_image" src="" class="img-responsive"/>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s6 offset-m2">
                        <input id="picture" name="picture" type="file" class="validate" onchange="preview_file()" accept="image/*">
                        <!-- <label for="category_image">Image</label> -->
                    </div>
                </div>


                <hr/>
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary"><i class="material-icons left">add</i>
                            Save
                        </button>
                    </div>
                    <div>

                    </div>
                </div>
            </form>
        </div>

    </div>
    {{--@push('custom-scripts')--}}
    <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    {{--<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>--}}
    {{--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">--}}
    <script type="text/javascript" charset="utf8"
            src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
    <script src="js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.js"></script>
    <script src="js/init.js"></script>
    <script>
        $(document).ready(function () {
//            $('select').formSelect();
            var status ="active";
            $("#add_category").on('click', function () {

                $("#add_category_popup").modal('show');
            });
            $("#add_menu").on('click', function () {
                $("#add_menu_popup").modal('show');
            });
            $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                $(".alert").slideUp(500);
            });

            $('input:radio').click(function () {
                status = $(this).val();

            });

            $('#add_menu_item').submit(function (e) {
                e.preventDefault();
                var ingredient_ids = '';
                var formData = new FormData();

                formData.append('name', $('#item_name').val());
                formData.append('em', $('#item_description').val());
                formData.append('_token', $('input[name="_token"]').val());
                formData.append('prize',$('#item_prize').val());
                formData.append('active',status);

                jQuery.each(jQuery('#picture')[0].files, function (i, file) {
                    formData.append('picture', file);
                });
                console.log("formdata",formData);
                var count = 0;

                $.ajax({
                    url: "{{ route('add_menu_item') }}",
                    processData: false,
                    contentType: false,
                    data: formData,
                    type: 'post',

                    success: function (response, a, b) {
//                        console.log("success",response);
//                        $("#add_menu_popup").modal('hide');
                        window.location.reload();
                    },
                    error: function (response) {
                        console.log("error",response);
                        window.location.reload();
//                        $("#add_menu_popup").modal('hide');
                    }
                });
            });
        });

        function preview_file(){

            var preview = document.getElementById("item_image"); //selects the query named img

            var file    = document.getElementById("picture").files[0]; //sames as here
            console.log('Entered here',file);
            var reader  = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;

            }

            if (file) {
                reader.readAsDataURL(file); //reads the data as a URL
            } else {
                preview.src = "";
            }
        }

    </script>
    <script>

        $(function () {
            $('#menu-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('get_users')}}',
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'description'},
                    {data: 'contact_number', name: 'contact_number'},
                    {data: 'facebook_id', name: 'facebook_id'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
//                $('select[name="menu-table_length"]').css("display","inline");
        });
    </script>
    {{--@endpush--}}
@endsection
