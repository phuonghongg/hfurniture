@extends('layout')

@section('content')
<div id="#content" class="site-content">
    <div class="container">
        <!--page title-->
        <div class="page_title_area row">
            <div class="col-md-12">
                <div class="bredcrumb">
                    <ul>
                        <li><a href="#">Home</a>
                        </li>
                        <li class="active"><a href="#">LOGIN OR REGISTER</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.page title-->

        <!--Login-Page-->
        <div class="login-page">
            <div class="row">
                <div class="col">
                    <div class="login">
                        <h3 class="small-title">sign in to your account</h3>
                        <form action="#" class="login-form">
                            <div class="col-md-6 col-sm-6 no-padding-left">
                                <div class="email">
                                    <label for="your-email">Email address <span class="required">*</span>
                                    </label>
                                    <br>
                                    <input type="email" name="your-email" value="" class="input-field" id="your-email">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 no-padding-right">
                                <div class="password">
                                    <label for="password">password <span class="required">*</span>
                                    </label>
                                    <br>
                                    <input type="password" name="password" value="" class="input-field" id="password">
                                    <br>
                                </div>
                            </div>

                            <div class="col-md-6 no-padding-left">
                                <label for="remember" class="label-remember">
                                    <input type="checkbox" name="remember-pass" value="" class="input-field" id="remember"><span>Remember me!</span>
                                </label>
                                <a href="#" class="forgot-pass">Forgot password?</a>
                            </div>
                        </form>
                        <!--login-form-->
                        <div class="login-method col-md-12 no-padding-left no-padding-right">
                            <button type="submit" class="btn-hover btn-submit">Sign Up</button>
                            <a class="method-facebook" href="#"><i class="fa fa-facebook"></i>Sign In with facebook</a>
                            <a class="method-twitter" href="#"><i class="fa fa-twitter"></i>Sign In with twitter</a>
                        </div>
                        <!--login-method-->
                    </div>
                    <!--losin-->
                </div>
                <!--col-md-6-->

                
            </div>
            <!--row-->
        </div>
        <!--/.login-page-->

    </div>
    <!--/.container-->
</div>
@endsection
