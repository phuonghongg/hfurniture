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
                        <li class="active"><a href="#">blog sidebar single</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.page title-->


        <div class="single-post-page">
            <div class="row">
                <div class="col-md-9">
                    <article class="post">
                        <div class="post-thumb-content">
                            <figure class="post-thumb">
                                <a href="#">
                                    <img class="img-responsive" alt="thumb" src="{{$blog->image}}">
                                </a>
                            </figure>
                            <!--/.post thumb-->
                            <span class="entry-date">{{$blog->created_at}}</span>
                        </div>
                        <!--/.post-thumb-content-->
                        <div class="post-details">
                            <h3 class="entry-title">
                                {{$blog->title}}
                            </h3>
                            <!--/.entry title-->
                            <div class="entry-meta">
                                <span>
                                    <img alt="icon" src="{{asset('assets/images/cat-icon.png')}}">
                                    in
                                   clothes,
                                   fashion,
                                    men
                                </span>
                                <span>
                                    <img alt="icon" src="{{asset('assets/images/comment-icon.png')}}">
                                    <a href="#">19 comments</a>
                                </span>
                            </div>
                            <!--/.meta-->
                            <div class="entry-content">
                                {{$blog->content}}
                            </div>
                            <!--/.entry content-->
                        </div>
                        <!--/.post details-->
                        <div class="share-post">
                            <span>Share</span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>


                        </div>
                        <!--/.author social-->
                    </article>
                    <!--/.post-->

                    <!--author-info-->
                    <div class="author-info clearfix">
                        <div id="author-img">
                            <figure class="at-img">
                                <img alt="author" src="{{asset('assets/images/author/01.jpg')}}">
                            </figure>
                        </div>
                        <!--/#author-img-->

                        <div id="author-details">
                            <div class="name-prof">
                                <b class="author-name">Jonathan Doe</b>
                                <span>CEO of Marketing Shop Agency</span>
                            </div>
                            <div class="authors-boi">
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                            </div>
                        </div>
                        <!--/#author-details-->
                    </div>
                    <!--/.author-info-->

                    <!-- Comment-Area -->
                    <div id="comments" class="comments-area">
                        <div class="comment-section">
                            <div class="heading-title">
                                <h3 class="comments-title">Comments</h3>
                            </div>
                            <ol class="comment-list">
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-author vcard">
                                            <div class="author-img">
                                                <img alt="" src="{{asset('assets/images/author/02.jpg')}}">
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
                                                        <img alt="author" src="{{asset('assets/images/author/01.jpg')}}">
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
                                                <img alt="" src="{{asset('assets/images/author/03.png')}}">
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
                                                        <img alt="author" src="{{asset('assets/images/author/04.jpg')}}">
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

                        <div id="respond" class="comment-respond">
                            <div class="heading-title">
                                <h3 class="comment-reply-title">
                                    <span>Leave a Reply</span>
                                </h3>
                            </div>
                            <!--/.heading-title-->
                            <form action="#" class="comment_form">
                                <div class="col-md-4">
                                    <label for="v_name">NAME<span class="required">*</span>
                                    </label>
                                    <input class="input-field" type="text" id="v_name" name="v_name">
                                </div>
                                <!-- end of v_name -->
                                <div class="col-md-4">
                                    <label for="v_email">email<span class="required">*</span>
                                    </label>
                                    <input class="input-field" type="text" id="v_email" name="v_email">
                                </div>
                                <!-- end of v_email -->
                                <div class="col-md-4">
                                    <label for="v_website">Website</label>
                                    <input class="input-field" type="text" id="v_website" name="v_website">
                                </div>
                                <!-- end of v_website -->

                                <div class="text_area_form col-md-12">
                                    <label for="v_comment">Your Comment</label>
                                    <textarea id="v_comment" rows="8"></textarea>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button class="btn-submit btn-hover" type="submit">submit</button>
                                </div>
                            </form>
                        </div>
                        <!--#respond-->
                    </div>
                    <!--/.comment's area-->
                </div>
                <!--/.col-md-10-->
                <!-- sidebar -->
                <div class="col-md-3 col-sm-12 col-xs-12">
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
            <!--/.row-->
        </div>
        <!--/.site-content-->
    </div>
    <!--/.container-->
</div>
@endsection
