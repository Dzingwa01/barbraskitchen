@extends('client_side_template')

@section('content')

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                {{--<h1 class="header center teal-text text-lighten-2">GET IT DONE</h1>--}}
                <div class="row center">
                    <h5 class="header col s12" style="color:white;font-weight: bolder;background-color: grey;opacity: 0.7">Let Us Assist you with your home improvements and/or alterations</h5>
                </div>
                <div class="row center">
                    <a href="{{url('register')}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Sign Up</a>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
    </div>


    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">Home Repairs</h5>

                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">Realtime Contact with Suppliers</h5>

                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                        <h5 class="center">Property Development</h5>

                        <p class="light" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. posuere eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 center" id="contact_us">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Contact Us</h4>
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


@endsection