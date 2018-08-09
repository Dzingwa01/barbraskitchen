<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Get It Done - We do it for you</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="navbar-fixed">
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="{{url('/')}}" class="brand-logo">Get It Done</a>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="{{url('login')}}">Login</a></li>
            <li><a href="{{url('register')}}">Register</a></li>

        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="#about_us">About Us</a></li>
            <li><a href="#contact_us">Contact Us</a></li>
            <li><a class="dropdown-trigger" href="#dropdown1" data-target="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="#about_us">About Us</a></li>
            <li><a href="#contact_us">Contact Us</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>

</nav>
</div>

@yield('content')

<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Services</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="about_us" class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="#">MarshTEQ</a>
        </div>
    </div>
</footer>

<!--  Scripts-->
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
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
        $(".dropdown-trigger").dropdown();
    });

</script>
</body>
</html>
