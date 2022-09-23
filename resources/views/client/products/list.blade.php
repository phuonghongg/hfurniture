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
                        <li><a href="#">shop with sidebar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.page title-->

        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="side-bar">
                    <div class="sidebar-list widget widget-categories">
                        <h3 class="widget-title">Categories</h3>
                        <div id="accordion" class="ui-accordion ui-widget ui-helper-reset" role="tablist">
                            <h3 class="ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>man</h3>
                            <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" style="display: block; height: 359px;">
                                <ul>

                                    <li><a href="" class="triangle">Loungewear <span>(8)</span></a>
                                    </li>

                                    <li><a href="shop-grid.html" class="triangle">Oversized &amp; Longline <span>(10)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Polo Shirts <span>(30)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Shirts <span>(41)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Shorts <span>(31)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Suits &amp; Blazers <span>(16)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Sunglasses <span>(12)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Swimwear <span>(52)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Trousers &amp; Chinos <span>(31)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>woman</h3>
                            <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none; height: 359px;">
                                <ul>
                                    <li><a href="shop-grid.html" class="triangle">Loungewear <span>(8)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Oversized &amp; Longline <span>(10)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Polo Shirts <span>(30)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Shirts <span>(41)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Shorts <span>(31)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Suits &amp; Blazers <span>(16)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Sunglasses <span>(12)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Swimwear <span>(52)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Trousers &amp; Chinos <span>(31)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>kids</h3>
                            <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none; height: 359px;">
                                <ul>
                                    <li><a href="shop-grid.html" class="triangle">Loungewear <span>(8)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Oversized &amp; Longline <span>(10)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Polo Shirts <span>(30)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Shirts <span>(41)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Shorts <span>(31)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Suits &amp; Blazers <span>(16)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Sunglasses <span>(12)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Swimwear <span>(52)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Trousers &amp; Chinos <span>(31)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-7" aria-controls="ui-id-8" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>all products</h3>
                            <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-8" aria-labelledby="ui-id-7" role="tabpanel" aria-hidden="true" style="display: none; height: 359px;">
                                <ul>
                                    <li><a href="shop-grid.html" class="triangle">Loungewear <span>(8)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Oversized &amp; Longline <span>(10)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Polo Shirts <span>(30)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Shirts <span>(41)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Shorts <span>(31)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Suits &amp; Blazers <span>(16)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Sunglasses <span>(12)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Swimwear <span>(52)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html" class="triangle">Trousers &amp; Chinos <span>(31)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="checkboxes widget widget-brand">
                        <h3 class="widget-title">Select a brand</h3>
                        <ul>
                            <li>
                                <input type="checkbox" name="aberrombie" id="aberrombie" class="css-checkbox">
                                <label for="aberrombie" class="css-label">Aberrombie</label>
                            </li>
                            <li>
                                <input type="checkbox" name="adidas" id="adidas" class="css-checkbox">
                                <label for="adidas" class="css-label">Adidas</label>
                            </li>
                            <li>
                                <input type="checkbox" name="antony-morato" id="antony-morato" class="css-checkbox">
                                <label for="antony-morato" class="css-label">Antony Morato</label>
                            </li>
                            <li>
                                <input type="checkbox" name="armani-jeans" id="armani-jeans" class="css-checkbox">
                                <label for="armani-jeans" class="css-label">Armani Jeans</label>
                            </li>
                            <li>
                                <input type="checkbox" name="baldessarini" id="baldessarini" class="css-checkbox">
                                <label for="baldessarini" class="css-label">Baldessarini</label>
                            </li>
                            <li>
                                <input type="checkbox" name="bench" id="bench" class="css-checkbox">
                                <label for="bench" class="css-label">Bench</label>
                            </li>
                            <li>
                                <input type="checkbox" name="boxfresh" id="boxfresh" class="css-checkbox">
                                <label for="boxfresh" class="css-label">Boxfresh</label>
                            </li>
                            <li>
                                <input type="checkbox" name="bjorn-borg" id="bjorn-borg" class="css-checkbox">
                                <label for="bjorn-borg" class="css-label">Bjorn Borg</label>
                            </li>
                            <li>
                                <input type="checkbox" name="boom-bap" id="boom-bap" class="css-checkbox">
                                <label for="boom-bap" class="css-label">Boom Bap</label>
                            </li>
                            <li>
                                <input type="checkbox" name="boss" id="boss" class="css-checkbox">
                                <label for="boss" class="css-label">Boss</label>
                            </li>
                        </ul>
                    </div>

                    <div class="slider-range widget widget-price">
                        <h3 class="widget-title">Refine a price</h3>
                        <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 14.2857%; width: 23.6735%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 14.2857%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 37.9592%;"></span></div>
                        <div class="values">
                            <input type="text" class="minamount"> <span class="filter-gap"> - </span>
                            <input type="text" class="maxamount">
                            <input type="submit" class="btn btn-default" value="search" name="search">
                        </div>
                    </div>

                    <div class="size widget widget-choosesize">
                        <h3 class="widget-title">Choose a size </h3>
                        <div class="size-content">
                            <input type="radio" name="size" id="xs" value="xs">
                            <label for="xs"><span>XS</span>
                            </label>
                            <input type="radio" checked="checked" name="size" id="s" value="s">
                            <label for="s"><span>s</span>
                            </label>
                            <input type="radio" name="size" id="m" value="m">
                            <label for="m"><span>m</span>
                            </label>
                            <input type="radio" name="size" id="l" value="l">
                            <label for="l"><span>l</span>
                            </label>
                            <input type="radio" name="size" id="xl" value="xl">
                            <label for="xl"><span>xl</span>
                            </label>
                        </div>
                    </div>

                    <div class="item-color  widget widget-colors">
                        <h3 class="widget-title">sort by colour</h3>
                        <div class="colors-content">
                            <input type="checkbox" name="color" id="alice">
                            <label for="alice" class="alice"></label>
                            <input type="checkbox" name="color" id="gold">
                            <label for="gold" class="gold"></label>
                            <input type="checkbox" name="color" id="blue">
                            <label for="blue" class="blue"></label>
                            <input type="checkbox" name="color" id="purple">
                            <label for="purple" class="purple"></label>
                            <input type="checkbox" name="color" id="salmon">
                            <label for="salmon" class="salmon"></label>
                            <input type="checkbox" name="color" id="olive">
                            <label for="olive" class="olive"></label>
                            <input type="checkbox" name="color" id="orangered">
                            <label for="orangered" class="orangered"></label>
                            <input type="checkbox" name="color" id="deeppink">
                            <label for="deeppink" class="deeppink"></label>
                            <input type="checkbox" name="color" id="chartreuse">
                            <label for="chartreuse" class="chartreuse"></label>
                            <input type="checkbox" name="color" id="chocolate">
                            <label for="chocolate" class="chocolate"></label>
                            <input type="checkbox" name="color" id="black">
                            <label for="black" class="black"></label>
                            <input type="checkbox" checked="" name="color" id="dodgerblue">
                            <label for="dodgerblue" class="dodgerblue"></label>
                        </div>
                    </div>
                    <div class="widget-popular-products widget">
                        <h3 class="widget-title">Popular Products</h3>
                        <div class="item">
                            <div class="product-thumb">
                                <img alt="img" src="assets/images/small_gallery/03.jpg">
                            </div>
                            <div class="product-info">
                                <h2>Touch Screen Gloves</h2>
                                <div class="price">
                                    $21 <del> $50 </del>
                                </div>
                                <a href="#" class="cart-btn btn">add to cart</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <img alt="img" src="assets/images/small_gallery/04.jpg">
                            </div>
                            <div class="product-info">
                                <h2>Touch Screen Gloves</h2>
                                <div class="price">
                                    $40 <del> $50 </del>
                                </div>
                                <a href="#" class="cart-btn btn">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="shop-page-banner">
                    <img src="assets/images/banner-2.jpg" class="img-responsive" alt="image banner">
                    <div class="banner-text">
                        <div class="tb">
                            <div class="tb-cell">
                                <h2>Find your summer look</h2>
                                <h4></h4>
                                <a href="" class="details-btn btn">collection</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-listing-view">
                    <div class="view-navigation">
                        <div class="info-text">
                            <p>Showing 1-8 from 124 products</p>
                        </div>
                        <div class="right-content">
                            <div class="grid-list">
                                <ul>
                                    <li><a class="active" href="shop-list-sidebar.html"><i class="fa fa-align-justify"></i></a>
                                    </li>
                                    <li><a href="shop-grid-sidebar.html"><i class="fa fa-th"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="input-select">
                                <select name="sorted" id="sorted">
                                    <option value="-1">default sorting</option>
                                    <option>Price</option>
                                    <option>Useless</option>
                                    <option>Important</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="shop-product-list shop-list">
                            <div class="col-md-12">
                                @foreach ($products as $item)
                                <div class="product-single">
                                    <div class="col-md-4 col-sm-5 col-xs-5">
                                        <a href="{{ url('/san-pham/'.$item->slug) }}">
                                            <div class="product-thumb">
                                                <img class="img-responsive" alt="Single product" src="{{$item->image}}">
                                            </div>
                                        </a>
                                        <!--/.product-thumb-->
                                    </div>
                                    <div ></div>
                                    <div class="col-md-8 col-sm-7 col-xs-7">
                                        <div class="product-info">
                                            <h2><a href="">{{$item->name}}</a></h2>
                                            <h4 class="product-name">T-Shirt</h4>
                                            <div class="price">
                                                {{$item->price}}
                                            </div>
                                            <div class="entry-content">
                                                <p>{{$item->description}}</p>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li><a class="add-cart btn-black" href="single-product.html"><span><span class="icon_plus"></span></span> add to cart</a>
                                                    </li>
                                                    <li><a class="btn-black" href="#"><span class="icon_heart_alt"></span></a>
                                                    </li>
                                                    <li><a class="btn-black" href="single-product.html"><span class="arrow_expand"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/.product-info-->
                                    </div>
                                </div>
                                @endforeach

                                <!--/.product-single-->
                            </div>
                            <!--/.col-md-12-->
                        </div>
                    </div>
                </div>

                <!-- pagination -->
                <div class="paginations">
                    <ul class="pagination">
                        <li><a href="#"><span class="pagicon arrow_carrot-left"></span></a>
                        </li>
                        <li><a href="#"><span>1</span></a>
                        </li>
                        <li class="active"><a href="#"><span>2</span></a>
                        </li>
                        <li><a href="#"><span>3</span></a>
                        </li>
                        <li><a href="#"><span>4</span></a>
                        </li>
                        <li><a href="#"><span>5</span></a>
                        </li>
                        <li><a href="#"><span>6</span></a>
                        </li>
                        <li><a href="#"><span class="pagicon arrow_carrot-right"></span></a>
                        </li>
                    </ul>
                </div>
                <!--/.pagination-->

            </div>
        </div>
    </div>
    <!--/.container-->
</div>

@endsection
