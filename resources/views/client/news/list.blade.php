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
                        <li class="active"><a href="#">blog archive sidebar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.page title-->

        <!-- content -->
        <div class="content blog-archive-page">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="blog_content clearfix">
                        @foreach ($blog as $item)
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <article class="post">
                                <div class="post-thumb-content">
                                    <figure class="post-thumb">
                                        <a href="{{ url('/blog/'.$item->slug) }}">
                                            <img class="img-responsive" alt="thumb" src="{{$item->image}}">
                                        </a>
                                    </figure>
                                    <!--/.post thumb-->
                                    <span class="entry-date">{{$item->created_at}}</span>
                                </div>
                                <!--/.post-thumb-content-->
                                <div class="post-details">
                                    <h3 class="entry-title">
                                        <a href="{{url('news/details')}}">{{$item->title}}</a>
                                    </h3>
                                    <!--/.entry title-->
                                    <div class="entry-meta">
                                        <span>
                                            <img alt="icon" src="assets/images/cat-icon.png">
                                            in
                                           clothes,
                                            fashion,
                                            men
                                        </span>
                                        <span>
                                            <img alt="icon" src="assets/images/comment-icon.png">
                                            <a href="#">19 comments</a>
                                        </span>
                                    </div>
                                    <!--/.meta-->
                                    <div class="entry-content">
                                        <p>
                                            {{$item->content}}
                                        </p>
                                    </div>
                                    <!--/.entry content-->
                                </div>
                                <!--/.post details-->
                            </article>
                            <!--/.post-->
                        </div>
                        @endforeach

                        <!--/.col-md-6-->
                    </div>
                    <!-- end of blog_content -->

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
                </div>
                <!-- end of col-md-9 -->

                <!-- sidebar -->
                <div class="col-md-3 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget widget-search">
                            <div class="search default">
                                <form class="searchform" action="#" method="get">
                                    <div class="input-group">
                                        <input type="search" name="s" class="form-control" placeholder="Search for something...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><span class="arrow_right"></span>
                                        </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <!--/.search-->
                        </div>
                        <div class="widget-categorie-blog widget">
                            <h3 class="widget-title">categories</h3>
                            <div class="category_post">
                                <ul>
                                    <li><a href="shop-grid.html">Fashion<span>(8)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html">Clothes<span>(10)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html">Hipster<span>(30)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html">Men's Wear<span>(40)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html">Men's Wear<span>(40)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html">Creative<span>(31)</span></a>
                                    </li>
                                    <li><a href="shop-grid.html">Model's Wear<span>(16)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end of sidebar_widget -->
                        <div class="widget widget-recent-post">
                            <h3 class="widget-title">RECENT POSTS</h3>
                            <div class="recent_post">
                                <div class="media single_recent_post clearfix">
                                    <a class="pull-left" href="#"><img class="media-object img-responsive" src="assets/images/blog/recent/01.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href="blog-single.html"><h3 class="media-heading">Designer outfits for women</h3></a>
                                        <p>Tempor invidunt ut labore et dolore magna aliqu erat... </p>
                                    </div>
                                </div>

                                <div class="media single_recent_post clearfix">
                                    <a class="pull-left" href="#"><img class="media-object img-responsive" src="assets/images/blog/recent/02.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href="blog-single.html"><h3 class="media-heading">Designer outfits for women</h3></a>
                                        <p>Tempor invidunt ut labore et dolore magna aliqu erat... </p>
                                    </div>
                                </div>

                                <div class="media single_recent_post clearfix">
                                    <a class="pull-left" href="#"><img class="media-object img-responsive" src="assets/images/blog/recent/03.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <a href="blog-single.html"><h3 class="media-heading">Designer outfits for women</h3></a>
                                        <p>Tempor invidunt ut labore et dolore magna aliqu erat... </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of sidebar_widget -->
                        <div class="widget widget-tag-cloud">
                            <h3 class="widget-title">POPULAR TAGS</h3>
                            <ul class="popular_tags">
                                <li><a href="shop-grid.html">FASHION</a>
                                </li>
                                <li><a href="shop-grid.html">TRENDS</a>
                                </li>
                                <li><a href="shop-grid.html">CLOTHES</a>
                                </li>
                                <li><a href="shop-grid.html">store</a>
                                </li>
                                <li><a href="shop-grid.html">Kids</a>
                                </li>
                                <li><a href="shop-grid.html">TOP</a>
                                </li>
                                <li><a href="shop-grid.html">SHIRT</a>
                                </li>
                                <li><a href="shop-grid.html">DRESSES</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end of sidebar_widget -->
                    </div>
                    <!-- end of sidebar -->
                </div>
                <!-- end of col-md-3 -->
            </div>
            <!-- end of row-->
        </div>
        <!--/ content -->

    </div>
    <!--/.container-->
</div>
@endsection
