@extends('client_home')
@section('content')
    <?php
            $menus = \App\Menu::where('active','active')->get();
            ?>
    <div class="slider">
        <ul class="slides">
            @foreach($menus as $menu)
                <li >
                    <img src="{{URL::asset($menu->picture_url)}}"> <!-- random image -->
                    <div class="caption center-align" >
                        <h3 ><span style="background-color: grey;opacity: 0.7;">{{$menu->name}}</span></h3>
                        <div class="row center">
                            <a href="" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Order Now</a>
                        </div>
                    </div>
                </li>
            @endforeach
            {{--<li>--}}
                {{--<img src="/img/sadza_veggie.jpg"> <!-- random image -->--}}
                {{--<div class="caption center-align">--}}
                    {{--<h3>Sadza, Beef Stew & Veggie</h3>--}}
                    {{--<div class="row center">--}}
                        {{--<a href="" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Order Now</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<img src="/img/sadza_salad.jpg"> <!-- random image -->--}}
                {{--<div class="caption center-align">--}}
                    {{--<h3>Sadza, Braai Meat & Salad</h3>--}}
                    {{--<a href="" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Order Now</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<img src="/img/sadza_zondo.jpg"> <!-- random image -->--}}
                {{--<div class="caption center-align">--}}
                    {{--<h3>Sadza, Zondo & Veggie</h3>--}}
                    {{--<a href="" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Order Now</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<img src="/img/matemba.jpg"> <!-- random image -->--}}
                {{--<div class="caption center-align">--}}
                    {{--<h3>Sadza & Matemba</h3>--}}
                    {{--<a href="" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Order Now</a>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Home Cooked Meals</span>
                        <p>We offer a variety of delicious Zimbabwean home cooked meals. Our meals are served while hot and are always prepared using fresh
                            ingredients. We can cater for individual needs and for many people.Our online ordering process makes it easy for you
                            to order meals and they are delivered to your doorstep.
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="#">Menu</a>
                        <a href="#">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Venue Hire for Parties</span>
                        <p>Our facility can be used for events such as kid parties with catering provided by our expert cooks.
                            Contact us via email or telephonically and we will gladly attend to your hiring requirements. <a href="#contact_us" class="btn">Contact Us</a>
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="#">More Info</a>
                        <a href="#">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="/js/materialize.js"></script>
    <script>
        $(document).ready(function() {
            // $("#menu_popup_dialog").modal();
            $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                $(".alert").slideUp(500);
            });
            var year = new Date().getFullYear();
            $('#footer_p').append(year);
            $(".dropdown-trigger_cus").dropdown();
            $('.sidenav').sidenav();
        });
    </script>
    <script src="/js/init.js"></script>
@endsection