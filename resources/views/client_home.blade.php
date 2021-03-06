<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Barbra's Kicthen</title>
    <meta name="description" content="The Sandwich Shop">
    <meta name="keywords" content="Sandwiches PE, Salads, Food Trays, Port Elizabeth, Breakfast, Lunch">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <style>
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-sm {
            margin-bottom: 30px;
        }
        .caption{
            left:40%!important;
        }
        .btn{
            margin-left:4em!important;
        }
        .slide_p{
            color:white!important;
            width:300px;
            text-align:center;
        }
        ul{
            list-style:none!important;
        }
        p{
            color:#fff;
        }

        .tile
        {
            background-image:url('/background_theme.jpg');
            color:#ffffff;
            margin:1em;
            text-align:center;
            vertical-align: center;
            height: 150px;
            width: 350px;
        }
        .tile:hover{
            box-shadow: 5px 5px 5px #888888;
            cursor: pointer;
            /*background-color: #90EE90;*/

        }
        .accordion:after {
            content: '\02795'; /* Unicode character for "plus" sign (+) */
            font-size: 13px;
            /*background-color: white!important;*/
            float: right;
            margin-left: 5px;
        }

        .active:after {
            content: "\2796"; /* Unicode character for "minus" sign (-) */
        }
        .accordion {
            background-color: #26a69a;
            color: white;
            cursor: pointer;
            font-weight: bold;
            padding: 18px;
            width: 70%;
            margin-left: 1em;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
        }

        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        /*.active, .accordion:hover {*/
        /*background-color: #ccc;*/
        /*}*/

        /* Style the accordion panel. Note: hidden by default */
        .panel {
            /*padding: 0 18px;*/
            /*background-color: white;*/
            margin-left: 1em;
            display: none;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
        .glass_unselected{
            /* background styles */
            position: relative;
            display: inline-block;

            background-color: grey; /*for compatibility with older browsers*/
            background-image: linear-gradient(grey,lightgrey);
            /*width:160px;*/
            border-radius: 25px;
            box-shadow: 0px 1px 4px -2px #333;


            /* text styles */

            color: #fff;
            font-size: 18px;
            font-family: sans-serif;
            font-weight: 100;
        }
        .drink_glass{
            /* background styles */
            position: relative;
            display: inline-block;

            background-color: #039be5; /*for compatibility with older browsers*/
            background-image: linear-gradient( #039be5,lightskyblue);
            /*width:160px;*/
            border-radius: 25px;
            box-shadow: 0px 1px 4px -2px #333;
            /* text styles */
            color: #fff;
            font-size: 18px;
            font-family: sans-serif;
            font-weight: 100;
        }
        .glass{
            /* background styles */
            position: relative;
            display: inline-block;

            background-color: green; /*for compatibility with older browsers*/
            background-image: linear-gradient(green,lightgreen);
            /*width:160px;*/
            border-radius: 25px;
            box-shadow: 0px 1px 4px -2px #333;
            /* text styles */
            color: #fff;
            font-size: 18px;
            font-family: sans-serif;
            font-weight: 100;
        }
        .glass:after{
            background: linear-gradient(rgba(255,255,255,0.8), rgba(255,255,255,0.2));
        }

        .glass:hover{
            background: linear-gradient(#073,#0fa);
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="/css/jquery-step-maker.css">--}}
    {{--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">--}}

    <style>
        .drop-down{
            margin-left: 1em!important;
        }
        .card .card-image img {
            display: block;
            border-radius: 2px 2px 0 0;
        }

        div > h6 {
            font-size: 1rem;
        }
        .card{
            z-index: 5!important;

        }
        .card .card-image .card-title {
            color: #fff;
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 20px;
        }
        .drink_button {
            display: block;
            width: 115px;
            height: 25px;
            background: #4E9CAF;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }
        input[type="checkbox"]{
            position:relative;
            left:1em;
            opacity: 1!important;
        }
        .card .card-content {
            padding: 10px;
            border-radius: 0 0 2px 2px;
            height: 200px !important;
            overflow:visible!important;
        }
        .card .card-content p {
            margin: 0;
            color: inherit;

        }
        .card .card-content .card-title {
            line-height: 38px;
        }
        .card-action {
            position: relative;
            background-color: inherit;
            border-top: 1px solid rgba(160, 160, 160, 0.2);
            z-index: 2;
            height:65px!important;
        }
        select{
            z-index: 20!important;
        }
        a{
            text-decoration: none;
        }
        a.active{
            background-color: teal!important;
            color:white!important;
        }
        .tabs .indicator{
            background-color: teal!important;
        }
        .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
            background-color: #26a69a!important;;
        }
        .sidenav-overlay{z-index:99;}
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div class="navbar-fixed">
    <nav class="white" role="navigation" style="height: 5em;">
        <a href="#" data-target="slide-out" class="sidenav-trigger" style="color:teal"><i class="material-icons">menu</i></a>
        <div class="nav-wrapper ">
            <a id="logo-container" href="{{url('/home_client')}}" class="brand-logo"><img  class="img-rounded" src={{URL::asset('img/logo.png')}} />  </a>
            <ul id="dropdown1" class="dropdown-content">
                <a href="{{ url('/logout') }}" class=""
                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    Sign Out
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input type="submit" value="logout" style="display: none;">
                </form>
                <li><a href="{{url('register')}}">Profile</a></li>

            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="{{url('register')}}">Profile</a></li>
                <a href="{{ url('/logout') }}" class=""
                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    Sign Out
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input type="submit" value="logout" style="display: none;">
                </form>


            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="/home_client"  style="color:black;font-weight: bolder"><i class="material-icons left">home</i> Home</a></li>
                {{--<li><a class="" style="color:black;font-weight:bolder;" href="/client_order_display"><i class="material-icons left">add_shopping_cart</i> Order Now</a></li>--}}
                <li><a href="/previous_orders" class="" style="color:black;font-weight: bolder"> <i class="tiny material-icons left">shopping_cart</i>Previous Orders</a></li>
                {{--<li><a class="" href="/client_menu_display" style="color:black;font-weight: bolder"><i class="tiny material-icons left">reorder</i> Menu</a></li>--}}
                <li><a class="dropdown-trigger_cus" style="color:black;font-weight: bolder"  data-target="dropdown2">{{Auth::user()->name . ' '. Auth::user()->surname}}<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>

            <ul id="slide-out" class="sidenav">
                <li><div class="user-view">
                        <a href="#user"> <img src="{{ Gravatar::get(Auth::user()->email) }}" class="img-circle" alt="User Image" /></a>
                        <p style="color:black;font-weight: bolder">{{Auth::user()->name . ' '. Auth::user()->surname}}</p>
                        <p style="color:black;font-weight: bolder">{{Auth::user()->email}}</p>
                    </div></li>
                <hr>
                <li><a href="/home" class="sidenav-close" style="color:black;font-weight: bolder"><i class="tiny material-icons">home</i> Home</a></li>
                {{--<li><a class="" style="color:black;font-weight:bolder;" href="/client_order_display"><i class="tiny material-icons left">add_shopping_cart</i> Order Now</a></li>--}}
                <li><a href="/previous_orders" class="" style="color:black;font-weight: bolder"> <i class="tiny material-icons">shopping_cart</i>Previous Orders</a></li>
                {{--<li><a class="" href="/client_menu_display" style="color:black;font-weight: bolder"><i class="tiny material-icons left">reorder</i> Menu</a></li> <hr>--}}
                <li><a style="color:black;font-weight: bolder" class="sidenav-close" href="#!"><i class="tiny material-icons">account_circle</i>Manage Profile</a></li>
                <li><a style="color:black;font-weight: bolder" href="{{ url('/logout') }}" class="sidenav-close"
                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt"></i>
                        Sign Out
                    </a></li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input type="submit" value="logout" style="display: none;">
                </form>
            </ul>

        </div>
    </nav>
</div>

<div class="container-fluid">
    @yield('content')
</div>

<footer class="page-footer teal container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">About Us</h5>
                <p class="grey-text text-lighten-4">We are a catering company focusing primarily on serving "Zimbabwean" home cooked meals for individuals, families and events. We also hire out our
                    facility for events such as parties and we can provide catering for the event at affordable rates.
                    We have more than 10 years experience in preparing and serving delicious and fresh home cooked meal. Customer satisfaction is our main priority. Our prices
                    are the most affordable in town with satisfaction guaranteed.  </p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Services</h5>
                <ul>
                    <li><a class="white-text" href="#!">Home Cooked Meals</a></li>
                    <li><a class="white-text" href="#!">Event Catering</a></li>
                    <li><a class="white-text" href="#!">Venue Hiring</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#contact_us"><i class="material-icons">email</i> liyambobarbra@gmail.com</a></li>
                    <li><a class="white-text" href="#!"><i class="material-icons">local_phone</i>073 244 5264</a></li>
                    <li><a class="white-text" href="#!">Facebook</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="about_us" class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="#">Uncal</a>
        </div>
    </div>
</footer>
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
        $('.slider').slider();
        $(".dropdown-trigger_cus").dropdown();
        $('.sidenav').sidenav();
    });
</script>
<script src="/js/init.js"></script>
{{--<script src="/js/jquery-step-maker.js"></script>--}}
</body>
</html>
