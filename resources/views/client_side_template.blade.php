<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Barbra's Kitchen - Delicious & Fresh Home Cooked Meals</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="navbar-fixed container-fluid">
<nav class="white" role="navigation">
    <div class="nav-wrapper ">
        <a id="logo-container" href="{{url('/')}}" class="brand-logo"><img src="/img/logo.png"> </a>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="{{url('login')}}">Login</a></li>
            <li><a href="{{url('register')}}">Register</a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="{{url('login')}}">Login</a></li>
            <li><a href="{{url('register')}}">Register</a></li>

        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="#about_us">About Us</a></li>
            <li><a href="#contact_us">Contact Us</a></li>
            <li><a class="dropdown-trigger_cus" data-target="dropdown2">Account<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>

        <ul id="nav-mobile-cus" class="sidenav">
            <li><a class="sidenav-close" href="{{url('/')}}">Home</a></li>
            <li><a class="sidenav-close" href="#about_us">About Us</a></li>
            <li><a class="sidenav-close" href="#contact_us">Contact Us</a></li>
            <li><a  class="dropdown-trigger_cus" href="#!" data-target="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <a href="#" data-target="nav-mobile-cus" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>

</nav>
</div>
<div class="row">
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
<style>

    .sidenav-overlay {
        z-index: 996;
    }
</style>
<!--  Scripts-->
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="js/materialize.js"></script>

<script>
    $(document).ready(function(){
        console.log("initializing");
        $('input.autocomplete').autocomplete({
            data: {
                "Apple": null,
                "Microsoft": null,
                "Google": 'https://placehold.it/250x250'
            },
        });
        $('.slider').slider();
        $('.sidenav').sidenav();
        $('.dropdown-trigger_cus').dropdown();
        $('.dropdown-trigger_cus_2').dropdown();

    });

</script>
<script src="js/init.js"></script>
</body>
</html>
