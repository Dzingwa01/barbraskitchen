@extends('client_side_template')

@section('content')
    <?php
    $menus = \App\Menu::where('active','active')->get();
    ?>
    <div class="slider">
        <div class="slider">
            <ul class="slides">
                @foreach($menus as $menu)
                    <li >
                        <img src="{{URL::asset($menu->picture_url)}}"> <!-- random image -->
                        <div class="caption center-align" >
                            <h3 ><span style="background-color: grey;opacity: 0.7;">{{$menu->name . ' - R' .$menu->prize}}</span></h3>
                            <div class="row center">
                                <a href="/login" class="order-btn btn-large waves-effect waves-light teal lighten-1">Order Now</a>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
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
    <div class="container">
        <center><h5>Where to find us</h5></center>
        <div class="row">
           <p class="center">63 Campell Street, Richmond Hill, Port Elizabeth</p>
    </div>

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 center" id="contact_us">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h5>Contact Us</h5>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col m6 col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input placeholder="First Name" id="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                </div>
                                <div class="input-field col m6 col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col m6 col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field col m6 col s12">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="contact_number" type="tel" class="validate">
                                    <label for="contact_number">Contact Number</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="message" class="materialize-textarea"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
<style>
    .card{
        height:350px;
    }
    .card-content{
        height: 300px;
    }
</style>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="/js/materialize.js"></script>

<script>
    $(document).ready(function(){

    });

</script>
@endsection