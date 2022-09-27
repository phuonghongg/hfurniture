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
                            @foreach ($list as $item)
                            <tbody>
                                <tr>
                                    <td>
                                        {{$item->name}}
                                    </td>
                                    <td>
                                       {{$item->created_at->format('d/m/Y')}}
                                    </td>
                                    <td>
                                        @if (isset($item->updated_at))
                                            {{$item->updated_at->format('d/m/Y')}}
                                        @else
                                            Chưa chỉnh sửa lần nào
                                        @endif
                                    </td>
                                    <td>
                                    <button type="button" class="btn btn-dark btn-icon-text"><a href="{{ url('admin/loai/sua/'.$item->id) }}">Sửa</a></button>
                                    <button type="button" class="btn btn-warning btn-icon-text" onclick="fun()">
                                        <a href="{{ url('admin/loai/xoa/'.$item->id) }}">Xóa</a>
                                    </button>

                                    </td>
                                </tr>

                            </tbody>
                            @endforeach

                            </table>
                            @if (Session::has('error'))
                                <div class="alert alert-danger text-center">
                                    {{Session::get('error')}}
                                </div>
                            @endif
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            <div style="text-align-last: center;">{!! $list->links() !!}</div>
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
<script>
    function fun(){
        confirm('Bạn có muốn xóa?');
    }
</script>


@endsection
