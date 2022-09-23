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
                        <li class="active"><a href="#">LOẠI SẢN PHẨM</a>
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
                    <div class="cart-total">
                        <h3 class="">LOẠI SẢN PHẨM</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th>
                                    Tên loại sản phẩm
                                </th>
                                <th>
                                    Ngày thêm
                                </th>
                                <th>
                                    Ngày cập nhật
                                </th>
                                <th>
                                </th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td>
                                        j
                                    </td>
                                    <td>
                                       a
                                    </td>
                                    <td>
                                        d
                                    </td>
                                    <td>
                                    <button type="button" class="btn btn-dark btn-icon-text"><a href="">Sửa</a></button>
                                    <button type="button" class="btn btn-warning btn-icon-text"><a href="">Xóa</a></button>
                                    </td>
                                </tr>

                            </tbody>
                            </table>
                        <button type="submit" class="details-btn btn">THÊM</button>
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
