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
                        <li class="active"><a href="#">SHOP single page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.page title-->
        <div class="single-produce-page no-sidebar">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single-product-details clearfix">
                        <div class="col-md-5">
                            <div class="single-slider-item">
                                <ul class="owl-slider owl-carousel owl-theme owl-loaded">
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2440px, 0px, 0px); transition: all 0.25s ease 0s; width: 3904px;"><div class="owl-item cloned" style="width: 488px; margin-right: 0px;"><li class="item">
                                        <img src="{{$product->image}}" alt="" class="img-responsive">
                                    </li></div><div class="owl-item cloned" style="width: 488px; margin-right: 0px;"><li class="item">
                                        <img src="{{$product->image}}" alt="" class="img-responsive">
                                    </li></div><div class="owl-item" style="width: 488px; margin-right: 0px;"><li class="item">
                                        <img src="{{$product->image}}" alt="" class="img-responsive">
                                    </li></div><div class="owl-item" style="width: 488px; margin-right: 0px;"><li class="item">
                                        <img src="{{$product->image}}" alt="" class="img-responsive">
                                    </li></div><div class="owl-item" style="width: 488px; margin-right: 0px;"><li class="item">
                                        <img src="{{$product->image}}" alt="" class="img-responsive">
                                    </li></div><div class="owl-item active" style="width: 488px; margin-right: 0px;"><li class="item">
                                        <img src="{{$product->image}}" alt="" class="img-responsive">
                                    </li></div><div class="owl-item cloned" style="width: 488px; margin-right: 0px;"><li class="item">
                                        <img src="{{$product->image}}" alt="" class="img-responsive">
                                    </li></div><div class="owl-item cloned" style="width: 488px; margin-right: 0px;"><li class="item">
                                        <img src="{{$product->image}}" alt="" class="img-responsive">
                                    </li></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-caret-left"></i></div><div class="owl-next" style=""><i class="fa fa-caret-right"></i></div></div><div class="owl-dots" style="display: none;"></div></div></ul>
                                <ul class="thumbnails-wrapper" id="thumbnails-wrapper">
                                    <li class="thumbnails">
                                        <a href="#"><img src="{{$product->image}}" alt="" class="img-responsive">
                                        </a>
                                    </li>
                                    <li class="thumbnails">
                                        <a href="#"><img src="assets/images/gallery_men/single-shop-details/small/shop-1-2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </li>
                                    <li class="thumbnails">
                                        <a href="#"><img src="assets/images/gallery_men/single-shop-details/small/shop-1-3.jpg" alt="" class="img-responsive">
                                        </a>
                                    </li>
                                    <li class="thumbnails active">
                                        <a href="#"><img src="assets/images/gallery_men/single-shop-details/small/shop-1-4.jpg" alt="" class="img-responsive">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="right-content">
                                <div class="product-info">
                                    <h2>{{$product->name}}</h2>
                                    <h4 class="product-name">T-Shirt</h4>
                                    <div class="price">
                                        ${{$product->price}} <del> ${{$product->price}} </del>
                                    </div>
                                    <div class="product-description">
                                        <h5 class="small-title">MÔ TẢ</h5>
                                        <p>{{$product->description}}</p>
                                    </div>
                                    {{-- <div class="item-color">
                                        <h5 class="small-title">select a colour</h5>
                                        <div class="colors-content">
                                            <input type="checkbox" name="color" id="olive1">
                                            <label for="olive1" class="olive"></label>
                                            <input type="checkbox" name="color" id="chocolate1">
                                            <label for="chocolate1" class="chocolate"></label>
                                            <input type="checkbox" name="color" id="deeppink1">
                                            <label for="deeppink1" class="deeppink"></label>
                                            <input type="checkbox" checked="" name="color" id="blue1">
                                            <label for="blue1" class="blue"></label>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="item-size">
                                        <h5 class="small-title">choose a size</h5>
                                        <div class="size-content">
                                            <input type="radio" name="size" id="xs1" value="xs">
                                            <label for="xs1"><span>XS</span>
                                            </label>
                                            <input type="radio" name="size" id="s1" value="s">
                                            <label for="s1"><span>s</span>
                                            </label>
                                            <input type="radio" checked="checked" name="size" id="m1" value="m">
                                            <label for="m1"><span>m</span>
                                            </label>
                                            <input type="radio" name="size" id="l1" value="l">
                                            <label for="l1"><span>l</span>
                                            </label>
                                            <input type="radio" name="size" id="xl1" value="xl">
                                            <label for="xl1"><span>xl</span>
                                            </label>
                                        </div>
                                    </div> --}}
                                    <div class="product-desc">
                                        <span class="item-number"><b>Mã sản phẩm: {{$product->id}}</b></span>
                                        <br>
                                        <span class="item-cat"><b>Loại sản phẩm:</b>  {{$product->id_category}}</span>
                                        <br>
                                        <span class="item-tag"><b>Tags:</b>  null</span>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li><a class="add-cart" href="single-product.html"><span><span class="icon_plus"></span></span> add to cart</a>
                                            </li>
                                            <li><a href="#"><span class="icon_heart_alt"></span></a>
                                            </li>
                                            <li><a class="zoom" href="assets/images/gallery_men/single-shop-details/big/image1xxl.jpg"><span class="arrow_expand"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="product-tab">
                            <ul class="nav nav-tabs">
                                <li class="nav active"><a data-toggle="tab" href="#tab1">MÔ TẢ</a>
                                </li>
                                <li><a data-toggle="tab" href="#tab2">CUSTOMER REVIEWS</a>
                                </li>
                                <li><a data-toggle="tab" href="#tab3">SHIPPING INFORMATION</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab1" class="tab-pane active">
                                    {{$product->description}}
                                </div>
                                <div id="tab2" class="tab-pane">

                                    <div class="single-post-page">
                                        <div class="row">



                                            <!-- Comment-Area -->
                                            <div id="comments" class="comments-area">
                                                <div class="comment-section">

                                                    <ol class="comment-list">
                                                        <li class="comment">
                                                            <div class="comment-body">
                                                                <div class="comment-author vcard">
                                                                    <div class="author-img">
                                                                        <img alt="" src="assets/images/author/02.jpg">
                                                                    </div>
                                                                </div>
                                                                <!--/.comment-author-->
                                                                <div class="comment-details">
                                                                    <div class="comment-metadata">
                                                                        <b class="author-name">Martin Jackson</b>
                                                                        <span class="date">April 14,2015 at 11:04</span>
                                                                    </div>
                                                                    <!--/.comment-metadata -->

                                                                    <div class="comment-content">
                                                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                                                    </div>
                                                                    <!--/.comment-content -->
                                                                    <div class="reply">
                                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                                    </div>
                                                                    <!--/.reply -->
                                                                </div>
                                                                <!-- /.comment-details -->
                                                            </div>
                                                            <!-- .comment-body -->
                                                            <ol class="children">
                                                                <li class="comment">
                                                                    <div class="comment-body">
                                                                        <div class="comment-author vcard">
                                                                            <div class="author-img">
                                                                                <img alt="author" src="assets/images/author/01.jpg">
                                                                            </div>
                                                                        </div>
                                                                        <!--/.comment-author -->
                                                                        <div class="comment-details">
                                                                            <div class="comment-metadata">
                                                                                <b class="author-name">Jonathan Doe</b>
                                                                                <span class="date">April 14,2015  at 11:04</span>
                                                                                <a href="#" class="user-name">author</a>
                                                                            </div>
                                                                            <!--/.comment-metadata -->
                                                                            <div class="comment-content">
                                                                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                                                                                </p>
                                                                            </div>
                                                                            <!--/.comment-content -->
                                                                            <div class="reply">
                                                                                <a class="comment-reply-link" href="#">Reply</a>
                                                                            </div>
                                                                            <!--/.reply -->
                                                                        </div>
                                                                        <!--/.comment-details -->

                                                                    </div>
                                                                    <!--/.comment-body -->
                                                                </li>
                                                            </ol>
                                                        </li>

                                                        <li class="comment">
                                                            <div class="comment-body">
                                                                <div class="comment-author vcard">
                                                                    <div class="author-img">
                                                                        <img alt="" src="assets/images/author/03.png">
                                                                    </div>
                                                                </div>
                                                                <!--/.comment-author -->
                                                                <div class="comment-details">
                                                                    <div class="comment-metadata">
                                                                        <b class="author-name">Kevin Harting</b>
                                                                        <span class="date">April 14,2015 at 11:04</span>
                                                                    </div>
                                                                    <!--/.comment-metadata -->

                                                                    <div class="comment-content">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras et ma uriseg haset lorem ultricies ferm entum ras vitae nibh nisl. Forem ipsum dolor sit amet. </p>
                                                                    </div>
                                                                    <!--/.comment-content -->
                                                                    <div class="reply">
                                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                                    </div>
                                                                    <!--/.reply -->
                                                                </div>
                                                                <!-- /.comment-details -->
                                                            </div>
                                                            <!--/.comment-body -->
                                                            <ol class="children">
                                                                <li class="comment">
                                                                    <div class="comment-body">
                                                                        <div class="comment-author vcard">
                                                                            <div class="author-img">
                                                                                <img alt="author" src="assets/images/author/04.jpg">
                                                                            </div>
                                                                        </div>
                                                                        <!--/.comment-author -->
                                                                        <div class="comment-details">
                                                                            <div class="comment-metadata">
                                                                                <b class="author-name">Nicole Sperus</b>
                                                                                <span class="date">April 14,2015 at 11:04</span>
                                                                            </div>
                                                                            <!--/.comment-metadata -->

                                                                            <div class="comment-content">
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras et ma uriseg haset lorem ultricies ferm entum ras vitae nibh nisl. Forem ipsum dolor sit amet.</p>
                                                                            </div>
                                                                            <!--/.comment-content -->
                                                                            <div class="reply">
                                                                                <a class="comment-reply-link" href="#">Reply</a>
                                                                            </div>
                                                                            <!--/.reply -->
                                                                        </div>
                                                                        <!-- /.comment-details -->
                                                                    </div>
                                                                    <!--/.comment-body -->
                                                                </li>
                                                            </ol>
                                                        </li>
                                                    </ol>
                                                    <!--/.comment-list -->
                                                </div>
                                                <!--/.comment section-->


                                            </div>
                                            <!--/.comment's area-->



                                        </div>
                                        <!--/.comment's area-->
                                    </div>
                                </div>
                                <div id="tab3" class="tab-pane">
                                    <h3>Tab 3</h3>
                                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur.</p>
                                </div>
                            </div>
                        </div>

                        <div class="related-products">
                            <div class="heading-title">
                                <h3 class="title-text">Sản phẩm liên quan</h3>
                            </div>
                            <div class="related-product-content">
                                @foreach ($related_product as $item)
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="product-single">
                                        <div class="product-thumb">
                                            <img class="img-responsive" alt="Single product" src="{{$item->image}}">
                                            <div class="actions">
                                                <ul>
                                                    <li><a class="add-cart" href="single-product.html"><span><span class="icon_plus"></span></span> add to cart</a>
                                                    </li>
                                                    <li><a href="#"><span class="icon_heart_alt"></span></a>
                                                    </li>
                                                    <li><a class="zoom" href="assets/images/gallery_men/01.jpg"><span class="arrow_expand"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/.product-thumb-->
                                        <div class="product-info">
                                            <h2>{{$item->name}}</h2>
                                            <h4 class="product-name">T-Shirt</h4>
                                            <div class="price">
                                                ${{$item->price}} <del> ${{$item->price}} </del>
                                            </div>
                                        </div>
                                        <!--/.product-info-->
                                    </div>
                                    <!--/.product-single-->
                                </div>
                                @endforeach
                                <!--/.col-md-4-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.container-->
</div>

@endsection
