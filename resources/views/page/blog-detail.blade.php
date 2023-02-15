@extends('layouts.user')

@section('title', 'SILI - KIT')

@section('style')
<link rel="stylesheet" id="photoswipe-default-skin-css" href="{{ asset('css/page/style.css') }}" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-layout-css" href="{{ asset('css/lib/woocommerce-layout.css') }}" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-general-css" href="{{ asset('css/lib/woocommerce.css') }}" type="text/css" media="all">
@stop

@section('content')

<body class="post-template-default single single-post postid-47 single-format-standard wp-custom-logo theme-organic-farm-pro woocommerce-js has-mtsnb" style="padding-top: 41px;">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="content_page col-lg-8 col-md-7">
                <div class="content_boxes">
                    <div class="feature-box">
                        <img src="{{ URL::to($blog->image) }}">
                    </div>
                    <div class="metabox">
                        <span class="entry-date">
                            <i class="far fa-calendar-alt"></i>
                            {{ date('M j Y', strtotime($blog->created_at)) }} </span>

                        <span class="entry-author">
                            <i class="fas fa-user"></i>
                            {{ $blog->author }}</span>
                    </div>
                    <div class="single-post-content">
                        <p>{!! $blog->description !!}</p>
                    </div>
                    <div class="share_icon row p-0 m-0">
                        <p class="socila_share col-md-12 p-0">
                            <b>Share: </b>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.ovationthemes.com/demos/organic-farm/2021/01/27/qui-blanditiis-praesentaiusm-voluptatum-deleniti-atque-4/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.ovationthemes.com/demos/organic-farm/2021/01/27/qui-blanditiis-praesentaiusm-voluptatum-deleniti-atque-4/&amp;title=qui blanditiis praesentaiusm voluptatum deleniti atque&amp;source=qui blanditiis praesentaiusm voluptatum deleniti atque" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                            <a href="https://plus.google.com/share?url=https://www.ovationthemes.com/demos/organic-farm/2021/01/27/qui-blanditiis-praesentaiusm-voluptatum-deleniti-atque-4/" target="_blank"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/share?url=https://www.ovationthemes.com/demos/organic-farm/2021/01/27/qui-blanditiis-praesentaiusm-voluptatum-deleniti-atque-4/&amp;text=qui blanditiis praesentaiusm voluptatum deleniti atque" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        </p>
                        <p class="col-md-6 post_tag">
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5" id="sidebar">
                <aside id="recent-posts-2" class="widget widget_recent_entries">
                    <h3 class="widget-title">Recent Posts</h3>
                    <ul class="list-group">
                        @foreach($recentBlog as $recentB)
                        <li>
                            <div class="row ml-1">
                                <div class="post-thumb col-md-3 col-sm-4 col-12 p-0 ">
                                    <img width="230" height="263" src="{{ URL::to($recentB->image) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy">
                                </div>
                                <div class="post-content col-md-9 col-sm-8 col-12">
                                    <a href="{{ URL::to('/blog-detail/' . $recentB->title) }}">{{ $recentB->title }}</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="clearfix"></div>
</body>
@stop