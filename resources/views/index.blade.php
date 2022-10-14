@extends('layouts.main')
 
@section('head')
@section('title', 'SOM POS JEWEAL ADMIN TEAM')
@endsection


@section('content')
    <div class="row">
        <div class="container">
            <div class="login_box_area">
                <form class="form-login" method="post" action="{{ route('login') }}">
                @csrf

                    <div class="header_logo_form">
                        <img src="images/logo_gradient.png">
                    </div>
                    <div class="form_content">


                    <h2>Admin Login</h2>    
    <div class="input_area">
    <div class="input-container">
                    <img src="/images/icons/email.png" class="input-icon email">
                    <input type="text" class="form-control" name="email" placeholder="Enter Your Email">


                    </div>
                    <div class="input-container">
                    <img src="/images/icons/noun_Lock_2619043.png" class="input-icon password">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">



                    </div>

    </div>

                
                    <div class="remember_area">
                    <input type="radio" name="remember" id="remember"/>
                    <label for="remember">Remember Me</label>
                    </div>
                    <div class="login_area">
                        <button type="submit" class="btn login_button">
                        Login
                        </button>
                    </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section("footer")
