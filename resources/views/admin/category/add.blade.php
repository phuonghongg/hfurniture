@extends('admin/dashboard')

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
                        <li class="active"><a href="#">THÊM LOẠI SẢN PHẨM</a>
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
                        <h3 class="small-title">thêm loại sản phẩm</h3>
                        <form action="#" class="register-form">
                            <div class="col-md-6 col-sm-6 no-padding-left">
                                <div class="first-name">
                                    <label for="your-first-name">Tên loại<span class="required">*</span>
                                    </label>
                                    <br>
                                    <input type="text" name="your-first-name" value="" class="input-field" id="your-first-name">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 no-padding-right">
                                <div class="last-name">
                                    <label for="your-last-name">Slug<span class="required">*</span>
                                    </label>
                                    <br>
                                    <input type="text" name="your-last-name" value="" class="input-field" id="your-last-name">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 no-padding-left">
                                <div class="email">
                                    <label for="your-email1">Email address <span class="required">*</span>
                                    </label>
                                    <br>
                                    <input type="email" name="your-email" value="" class="input-field" id="your-email1">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 no-padding-right">
                                <div class="recapture-text">
                                    <label for="confirm-email">Confirm email address <span class="required">*</span>
                                    </label>
                                    <br>
                                    <input type="email" name="your-email" value="" class="input-field" id="confirm-email">
                                </div>
                            </div>

                            <div class="col-md-6  col-sm-6 col-xs-12 no-padding-left">
                                <div class="recapture-text">
                                    <label for="recapture">enter the capture <span class="required">*</span>
                                    </label>
                                    <br>
                                    <div class="col-md-8 col-sm-8 col-xs-6 no-padding-right no-padding-left">
                                        <input type="text" name="recapture" value="" class="recapture input-field" id="recapture">
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="recapture-code">d0fnU</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 no-padding-left">
                                <div class="submit">
                                    <button type="submit" class="btn-hover btn-submit">Thêm</button>
                                </div>
                            </div>
                        </form>
                        <!--register-form-->
                    </div>
                    <!--login-->
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
