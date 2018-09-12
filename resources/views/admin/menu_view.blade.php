@extends('adminlte::page')

@section('title', 'Barbras Kitchen')

@section('content_header')
    <h1>Menu Details</h1>
@stop
<?php $users = App\User::all();?>
@section('content')
    <div class="container-fluid box box-success">
        <div class="row">
            <div class="col m3 pull-right">
                <a id="back" style="margin-top: 1em;" class="btn">Back</a><br/>
            </div>
            <br>
        </div>
        <form id='add_menu_item' class="col s12" role="form" method="POST" action="{{url('/menus/update/'.$menu->id)}}" enctype="multipart/form-data">
            <meta name="_token" content="{{ csrf_token() }}">
            @csrf
            <div class="row">

                <div class="input-field col s6 offset-m2">
                    <input  id="item_name" name="name" type="text"  value="{{$menu->name}}"
                            required>
                    <label for="item_name">Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 offset-m2">
                        <textarea id="item_description" name="description" placeholder="Enter item description"
                                  class="materialize-textarea" required>{{$menu->description}}</textarea>
                    <label for="item_description">Description</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 offset-m2">
                    <input id="item_prize" name="prize" placeholder="Item Prize" type="number" step="0.01" value="{{$menu->prize}}"
                           class="validate" required>
                    <label for="prize">Item Prize</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 offset-m2">
                    <p>
                        <label for="active">
                            <input name="active" class="bread" value="active" type="radio" {{$menu->active=='active'?'checked':''}}
                            id="active"/>
                            <span>Active</span> </label>
                    </p>
                    <p>
                        <label for="inactive">
                            <input name="active" class="bread" type="radio" id="inactive" {{$menu->active=='inactive'?'checked':''}}
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
                    <img id="item_image" src="{{$menu->picture_url!=null?'/'.$menu->picture_url:""}}" class="img-responsive"/>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6 offset-m2">
                    <input id="picture" name="picture" type="file" class="validate" onchange="preview_file()" accept="image/*">
                    <!-- <label for="category_image">Image</label> -->
                </div>
            </div>

        </form>
    </div>
    {{--@push('custom-scripts')--}}
    <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    {{--<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>--}}
    {{--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">--}}
    <script type="text/javascript" charset="utf8"
            src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.js"></script>
    <script src="/js/init.js"></script>

    <script>
        $(document).ready(function () {
//            $('select').formSelect();
            var status ="active";
            $("#add_category").on('click', function () {

                $("#add_category_popup").modal('show');
            });
            $('#back').on('click',function(){
               window.history.back();
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
@endsection
