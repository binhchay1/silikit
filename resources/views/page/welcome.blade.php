@extends('layouts.app')

@section('title', 'Silikit')

@section('content')
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-dark-grayscale">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 0.49803921568627"></feFuncR>
                <feFuncG type="table" tableValues="0 0.49803921568627"></feFuncG>
                <feFuncB type="table" tableValues="0 0.49803921568627"></feFuncB>
                <feFuncA type="table" tableValues="1 1"></feFuncA>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"></feComposite>
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-grayscale">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 1"></feFuncR>
                <feFuncG type="table" tableValues="0 1"></feFuncG>
                <feFuncB type="table" tableValues="0 1"></feFuncB>
                <feFuncA type="table" tableValues="1 1"></feFuncA>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"></feComposite>
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-yellow">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765"></feFuncR>
                <feFuncG type="table" tableValues="0 1"></feFuncG>
                <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431"></feFuncB>
                <feFuncA type="table" tableValues="1 1"></feFuncA>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"></feComposite>
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-red">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 1"></feFuncR>
                <feFuncG type="table" tableValues="0 0.27843137254902"></feFuncG>
                <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902"></feFuncB>
                <feFuncA type="table" tableValues="1 1"></feFuncA>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"></feComposite>
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-midnight">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 0"></feFuncR>
                <feFuncG type="table" tableValues="0 0.64705882352941"></feFuncG>
                <feFuncB type="table" tableValues="0 1"></feFuncB>
                <feFuncA type="table" tableValues="1 1"></feFuncA>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"></feComposite>
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-magenta-yellow">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.78039215686275 1"></feFuncR>
                <feFuncG type="table" tableValues="0 0.94901960784314"></feFuncG>
                <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412"></feFuncB>
                <feFuncA type="table" tableValues="1 1"></feFuncA>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"></feComposite>
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-green">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745"></feFuncR>
                <feFuncG type="table" tableValues="0 1"></feFuncG>
                <feFuncB type="table" tableValues="0.44705882352941 0.4"></feFuncB>
                <feFuncA type="table" tableValues="1 1"></feFuncA>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"></feComposite>
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-orange">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></feColorMatrix>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.098039215686275 1"></feFuncR>
                <feFuncG type="table" tableValues="0 0.66274509803922"></feFuncG>
                <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"></feFuncB>
                <feFuncA type="table" tableValues="1 1"></feFuncA>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"></feComposite>
        </filter>
    </defs>
</svg>
<header id="masthead" class="site-header">
    <div id="header">
        <div class="container">
            <div class="header-wrap">
                <div id="topbar">
                    <div class="topbar_section">
                        <div class="container">
                            <div class="row my-3">
                                <div class="col-lg-4 col-md-3 col-sm-5 col-12">
                                    <div class="logo">
                                        <a href="https://www.ovationthemes.com/demos/organic-farm/" class="custom-logo-link" rel="home" aria-current="page"><img width="240" height="60" src="https://www.ovationthemes.com/demos/organic-farm/wp-content/uploads/sites/9/2021/07/cropped-Organic.png" class="custom-logo" alt="Organic Farm"></a>
                                        <div class="logo-text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-12">
                                    <div class="topbar-content">
                                        <div class="row">
                                            <div class="col-md-0 col-0">
                                            </div>
                                            <div class="col-md-6 p-0">
                                                <ul class="right-side-content">
                                                    <li class="icon">
                                                        <div class="hi_normal"><i class="fas fa-envelope"></i></div>
                                                    </li>
                                                    <li class="title">Email Address</li>
                                                    <li class="content">organic@gmail.com</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 p-0">
                                                <ul class="right-side-content">
                                                    <li class="icon">
                                                        <div class="hi_normal"><i class="fas fa-phone-volume"></i> </div>
                                                    </li>
                                                    <li class="title">
                                                        24/7 In Touch </li>
                                                    <li class="content">
                                                        000012321545648 </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 col-12 social">
                                    <div class="socialbox">
                                        <a class="twitter" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter align-middle" aria-hidden="true"></i></a>
                                        <a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f align-middle " aria-hidden="true"></i></a>
                                        <a class="youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube align-middle" aria-hidden="true"></i></a>
                                        <a class="pintrest" href="https://in.pinterest.com/" target="_blank"><i class="fab fa-pinterest-p align-middle " aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="container nav_wrap">
                    <div class="main-header-box">
                        <div class="row bg-media">
                            <div class="col-lg-9 offset-lg-1 col-md-9 col-sm-8 col-4 header-nav">
                                <div class="menubar m-0 mt-md-0">
                                    <div class="container right_menu">
                                        <div class="innermenubox ">
                                            <div class="toggle-nav mobile-menu">
                                                <span onclick="openNav()"><i class="fas fa-bars"></i></span>
                                            </div>
                                            <div id="mySidenav" class="nav sidenav">
                                                <nav id="site-navigation" class="main-navigation">
                                                    <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="closeNav()"><i class="fas fa-times"></i></a>
                                                    <div class="menu clearfix">
                                                        <ul id="menu-primary-menu" class="clearfix mobile_nav sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                                                            <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-63"><a href="https://www.ovationthemes.com/demos/organic-farm/" aria-current="page">Home</a></li>
                                                            <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a href="https://www.ovationthemes.com/demos/organic-farm/blog/">Blog</a></li>
                                                            <li id="menu-item-65" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a href="https://www.ovationthemes.com/demos/organic-farm/contact/">Contact</a></li>
                                                            <li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a href="https://www.ovationthemes.com/demos/organic-farm/page/">Page</a></li>
                                                            <li id="menu-item-75" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75"><a href="https://www.ovationthemes.com/demos/organic-farm/my-account/">My account</a></li>
                                                            <li id="menu-item-77" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77"><a href="https://www.ovationthemes.com/demos/organic-farm/cart/">Cart</a></li>
                                                            <li id="menu-item-76" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-76"><a href="https://www.ovationthemes.com/demos/organic-farm/checkout/">Checkout</a></li>
                                                        </ul>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 header_btn">
                                <div class="">
                                    <a target="_blank" href="https://www.ovationthemes.com/wordpress/organic-farm-wordpress-theme/?add-to-cart=5994" class="">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide  carousel-fade " data-ride="carousel" data-interval="10000">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item">
                <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/slides/slide.jpg" alt="1" title="#slidecaption1">
                <div class="carousel-caption d-md-block mt-5">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="inner_carousel">
                                <div class="slider-box">
                                    <div class="prop_desc">
                                        <p>Its All Organic &amp; Natural Here</p>
                                    </div>
                                    <h1 class="font-weight-bold">Organic Products <span>for a better world</span>
                                    </h1>
                                    <div class="slide_btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/slides/slide.jpg" alt="1" title="#slidecaption2">
                <div class="carousel-caption d-md-block mt-5">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="inner_carousel">
                                <div class="slider-box">
                                    <div class="prop_desc">
                                        <p>Its All Organic &amp; Natural Here</p>
                                    </div>
                                    <h1 class="font-weight-bold">Organic Products <span>for a better world</span>
                                    </h1>
                                    <div class="slide_btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/slides/slide.jpg" alt="1" title="#slidecaption3">
                <div class="carousel-caption d-md-block mt-5">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="inner_carousel">
                                <div class="slider-box">
                                    <div class="prop_desc">
                                        <p>Its All Organic &amp; Natural Here</p>
                                    </div>
                                    <h1 class="font-weight-bold">Organic Products <span>for a better world</span>
                                    </h1>
                                    <div class="slide_btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>

<section id="category" style="background-image:url('https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/category/category_bg.jpg')">
    <div class="container">
        <div class="category-head">
            <h3 class="p-0">
                Categories </h3>
            <img src="{{ asset('img/title_line.png') }}">
        </div>
        <div class="row mt-2">
            <div class="col-lg-4 col-sm-6">
                <div class="our-category mt-4">
                    <div class="pic">
                        <a href=""><img src="{{ asset('img/category1.png') }}"></a>
                    </div>
                    <div class="content">
                        <h5 class="m-0">Fruits</h5>
                        <p class="mb-0">similique sunt in culpa qui officia deserunt est</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="our-category mt-4">
                    <div class="pic">
                        <a href=""><img src="{{ asset('img/category2.png') }}"></a>
                    </div>
                    <div class="content">
                        <h5 class="m-0">Vegetables</h5>
                        <p class="mb-0">similique sunt in culpa qui officia deserunt est</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="our-category mt-4">
                    <div class="pic">
                        <a href=""><img src="{{ asset('img/category3.png') }}"></a>
                    </div>
                    <div class="content">
                        <h5 class="m-0">Beverages</h5>
                        <p class="mb-0">similique sunt in culpa qui officia deserunt est</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="our-category mt-4">
                    <div class="pic">
                        <a href=""><img src="{{ asset('img/category4.png') }}"></a>
                    </div>
                    <div class="content">
                        <h5 class="m-0">Dairy</h5>
                        <p class="mb-0">similique sunt in culpa qui officia deserunt est</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="our-category mt-4">
                    <div class="pic">
                        <a href=""><img src="{{ asset('img/category5.png') }}"></a>
                    </div>
                    <div class="content">
                        <h5 class="m-0">Packed Food</h5>
                        <p class="mb-0">similique sunt in culpa qui officia deserunt est</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="our-category mt-4">
                    <div class="pic">
                        <a href=""><img src="{{ asset('img/category6.png') }}"></a>
                    </div>
                    <div class="content">
                        <h5 class="m-0">Heath &amp; Fitness</h5>
                        <p class="mb-0">similique sunt in culpa qui officia deserunt est</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="latest_news" style="background-color:#f3f7fb;">
    <div class="container">
        <div class="latest-news-head">
            <h3 class="pb-0 m-0">
                Recent Blogs </h3>
            <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/title_line.png">
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 col-md-6 mt-4">
                <div class="post-slide">
                    <div class="post-img">
                        <img width="230" height="263" src="https://www.ovationthemes.com/demos/organic-farm/wp-content/uploads/sites/9/2021/01/latest-news4.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"> <span class="date">Jan 27 2021</span>
                    </div>
                    <div class="post-review">
                        <h5 class="post-title m-0 p-0"><a href="https://www.ovationthemes.com/demos/organic-farm/2021/01/27/qui-blanditiis-praesentaiusm-voluptatum-deleniti-atque-4/">qui blanditiis praesentaiusm voluptatum deleniti atque</a> </h5>
                        <ul>
                            <li><span class="entry-author mr-2"><i class="far fa-user"></i><a href="https://www.ovationthemes.com/demos/organic-farm/author/admin/">admin</a></span></li>

                            <li><span class="entry-comments"><i class=""></i> 0 Comments</span></li>

                        </ul>
                        <p class="post-description">
                            Et harum quidem rerum facilis est expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi </p>
                        <div class="latest_btn">
                            <a href="https://www.ovationthemes.com/demos/organic-farm/2021/01/27/qui-blanditiis-praesentaiusm-voluptatum-deleniti-atque-4/">
                                Read More<i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-4">
                <div class="post-slide">
                    <div class="post-img">
                        <img width="227" height="261" src="https://www.ovationthemes.com/demos/organic-farm/wp-content/uploads/sites/9/2021/01/latest-news3.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"> <span class="date">Jan 27 2021</span>
                    </div>
                    <div class="post-review">
                        <h5 class="post-title m-0 p-0"><a href="https://www.ovationthemes.com/demos/organic-farm/2021/01/27/qui-blanditiis-praesentaiusm-voluptatum-deleniti-atque-3/">qui blanditiis praesentaiusm voluptatum deleniti atque</a> </h5>
                        <ul>
                            <li><span class="entry-author mr-2"><i class="far fa-user"></i><a href="https://www.ovationthemes.com/demos/organic-farm/author/admin/">admin</a></span></li>

                            <li><span class="entry-comments"><i class=""></i> 0 Comments</span></li>

                        </ul>
                        <p class="post-description">
                            Et harum quidem rerum facilis est expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi </p>
                        <div class="latest_btn">
                            <a href="https://www.ovationthemes.com/demos/organic-farm/2021/01/27/qui-blanditiis-praesentaiusm-voluptatum-deleniti-atque-3/">
                                Read More<i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-4">
                <div class="post-slide">
                    <div class="post-img">
                        <img width="230" height="258" src="https://www.ovationthemes.com/demos/organic-farm/wp-content/uploads/sites/9/2021/01/latest-news2.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"> <span class="date">Jan 27 2021</span>
                    </div>
                    <div class="post-review">
                        <h5 class="post-title m-0 p-0"><a href="https://www.ovationthemes.com/demos/organic-farm/2021/01/27/qui-blanditiis-praesentaiusm-voluptatum-deleniti-atque-2/">qui blanditiis praesentaiusm voluptatum deleniti atque</a> </h5>
                        <ul>
                            <li><span class="entry-author mr-2"><i class="far fa-user"></i><a href="https://www.ovationthemes.com/demos/organic-farm/author/admin/">admin</a></span></li>

                            <li><span class="entry-comments"><i class=""></i> 0 Comments</span></li>

                        </ul>
                        <p class="post-description">
                            Et harum quidem rerum facilis est expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi </p>
                        <div class="latest_btn">
                            <a href="https://www.ovationthemes.com/demos/organic-farm/2021/01/27/qui-blanditiis-praesentaiusm-voluptatum-deleniti-atque-2/">
                                Read More<i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-4">
                <div class="post-slide">
                    <div class="post-img">
                        <img width="228" height="261" src="https://www.ovationthemes.com/demos/organic-farm/wp-content/uploads/sites/9/2021/01/latest-news1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"> <span class="date">Jan 27 2021</span>
                    </div>
                    <div class="post-review">
                        <h5 class="post-title m-0 p-0"><a href="https://www.ovationthemes.com/demos/organic-farm/2021/01/27/qui-blanditiis-praesentaiusm-voluptatum-deleniti-atque/">qui blanditiis praesentaiusm voluptatum deleniti atque</a> </h5>
                        <ul>
                            <li><span class="entry-author mr-2"><i class="far fa-user"></i><a href="https://www.ovationthemes.com/demos/organic-farm/author/admin/">admin</a></span></li>

                            <li><span class="entry-comments"><i class=""></i> 0 Comments</span></li>

                        </ul>
                        <p class="post-description">
                            Et harum quidem rerum facilis est expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi </p>
                        <div class="latest_btn">
                            <a href="https://www.ovationthemes.com/demos/organic-farm/2021/01/27/qui-blanditiis-praesentaiusm-voluptatum-deleniti-atque/">
                                Read More<i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonial">
    <div class="container">
        <div class="testimonial_head">
            <h3 class="pb-0 m-0">
                Testimonial </h3>
            <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/title_line.png">
        </div>
        <div class="owl-carousel mt-4 owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-2240px, 0px, 0px); transition: all 0s ease 0s; width: 7840px;">
                    <div class="owl-item cloned" style="width: 1110px; margin-right: 10px;">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/testimonial.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                <h5 class="testimonial-title">Kavin Peterson</h5>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1110px; margin-right: 10px;">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/testimonial.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                <h5 class="testimonial-title">Kavin Peterson</h5>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 1110px; margin-right: 10px;">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/testimonial.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                <h5 class="testimonial-title">Kavin Peterson</h5>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1110px; margin-right: 10px;">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/testimonial.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                <h5 class="testimonial-title">Kavin Peterson</h5>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1110px; margin-right: 10px;">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/testimonial.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                <h5 class="testimonial-title">Kavin Peterson</h5>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1110px; margin-right: 10px;">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/testimonial.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                <h5 class="testimonial-title">Kavin Peterson</h5>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1110px; margin-right: 10px;">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/testimonial.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                <h5 class="testimonial-title">Kavin Peterson</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav"><button role="presentation" class="owl-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button><button role="presentation" class="owl-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button></div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>
</section>

<section id="contribute" style="background-color:#f3f7fb;">
    <div class="container">
        <div class="contribute-head">
            <h3 class="pb-0 m-0">
                Contribute to Farm </h3>
            <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/title_line.png">
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <div class="box">
                    <h5 class="title p-0">Contribute to Farm for Help Us to Provide More Products</h5>
                    <p class="post">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    <p class="post">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
                    <div class="con_media">
                        <div class="btn-content">
                            <div class="contribute_btn">
                                <span class="btn_span">Click on the Button to</span>
                                <a href="#" class="">Contribute to Farm </a>
                            </div>
                            <span class="btn_icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="left_side">
                    <img src="https://www.ovationthemes.com/demos/organic-farm/wp-content/themes/organic-farm-pro/assets/images/contribute_right.png">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="newsletter">
    <div class="container">
        <div class="newsletter_content">
            <div class="">
                <p class="p-0">
                    Subscribe us Get Updates. </p>
                <h3>
                    Get Daily Updates Direct on Your Email </h3>
            </div>
            <div class="newsletter_form pt-3">
                <div role="form" class="wpcf7" id="wpcf7-f50-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <form action="/demos/organic-farm/#wpcf7-f50-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="50">
                            <input type="hidden" name="_wpcf7_version" value="5.6.4">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f50-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                        </div>
                        <p><span class="wpcf7-form-control-wrap" data-name="your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Enter your email here to get updates"></span><input type="submit" value="Subscribe Now" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span></p>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>

<div class="outer-footer">
    <div id="footer">
        <div id="footer_box" class="darkbox">
            <div class="container footer-cols">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 footer1">
                        <aside id="media_image-2" class="widget widget_media_image"><img width="222" height="67" src="https://www.ovationthemes.com/demos/organic-farm/wp-content/uploads/sites/9/2021/01/Organic.png" class="image wp-image-49  attachment-full size-full" alt="" loading="lazy" style="max-width: 100%; height: auto;"></aside>
                        <aside id="custom_html-2" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <p>
                                    culpa qui officia deserunt mollitia
                                    animi, id est laborum et dolorum fuga.
                                    Et harum quidem rerum facilis est et
                                    expedita distinctio.
                                </p>
                                <div class="socialbox">
                                    <a class="twitter" href="#" target="_blank" rel="noopener"><i class="fab fa-twitter align-middle"></i><span class="screen-reader-text">twitter</span></a>
                                    <a class="insta" href="#" target="_blank" rel="noopener"><i class="fab fa-instagram align-middle"></i><span class="screen-reader-text">Instagram</span></a>
                                    <a class="facebook" href="#" target="_blank" rel="noopener"><i class="fab fa-facebook-f align-middle "></i><span class="screen-reader-text">facebook</span></a>
                                    <a class="youtube" href="#" target="_blank" rel="noopener"><i class="fab fa-youtube align-middle"></i><span class="screen-reader-text">youtube</span></a>
                                    <a class="linkedin" href="#" target="_blank" rel="noopener"><i class="fab fa-linkedin-in align-middle"></i><span class="screen-reader-text">linkedin</span></a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer2">
                        <aside id="nav_menu-2" class="widget widget_nav_menu">
                            <h3 class="widget-title">Useful Links</h3>
                            <div class="menu-footer-menu-container">
                                <ul id="menu-footer-menu" class="menu">
                                    <li id="menu-item-59" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-59"><a target="_blank" rel="noopener" href="https://www.ovationthemes.com/wordpress/wordpress-bundle/">WordPress Bundle</a></li>
                                    <li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a href="https://www.ovationthemes.com/demos/organic-farm/blog/">Blog</a></li>
                                    <li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57"><a href="https://www.ovationthemes.com/demos/organic-farm/cart/">Cart</a></li>
                                    <li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58"><a href="https://www.ovationthemes.com/demos/organic-farm/shop/">Shop</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer3">
                        <aside id="custom_html-3" class="widget_text widget widget_custom_html">
                            <h3 class="widget-title">Categories</h3>
                            <div class="textwidget custom-html-widget">
                                <ul>
                                    <li><a href="">Fruit</a></li>
                                    <li><a href="">Vegetable</a>Vegetable</li>
                                    <li><a href="">Beverages</a></li>
                                    <li><a href="">Dairy</a></li>
                                    <li><a href="">Packed Food</a></li>
                                    <li><a href="">Heath &amp; Fitness</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <aside id="nav_menu-3" class="widget widget_nav_menu">
                            <h3 class="widget-title">Buy Now</h3>
                            <div class="menu-footer-container">
                                <ul id="menu-footer" class="menu">
                                    <li id="menu-item-94" class="custom_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-94"><a target="_blank" rel="noopener" href="https://www.ovationthemes.com/wordpress/organic-farm-wordpress-theme/?add-to-cart=5994">Buy Now</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row copy-text">
                        <div class="col-lg-12 col-md-12">
                            <p>Wordpress Theme 2020<span class="credit_link"> Design &amp; Developed by<a href="https://www.ovationthemes.com/" target="_blank"> Ovation Themes</a></span></p>
                        </div>
                        <a href="javascript:" id="return-to-top" style="display: none;"><i class="fas fa-angle-double-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mtsnb mtsnb-shown mtsnb-top mtsnb-absolute" id="mtsnb-71" data-mtsnb-id="71" style="background-color:#27bc34;color:#ffffff;">
    <div class="mtsnb-container-outer">
        <div class="mtsnb-container mtsnb-clearfix">
            <div class="mtsnb-custom-type mtsnb-content">
                <div class="mtsnb-custom-content">Get Organic WordPress Theme <a class="m-3 px-3 py-1 bg-white rounded second-btn" style="color:#27bc34;background:#fff" href="https://www.ovationthemes.com/wordpress/organic-farm-wordpress-theme/?add-to-cart=5994" rel="noopener" target="_blank">Buy Now</a> Or Try Our WordPress Bundle - For $89 <span class="d-block d-lg-inline-block mt-3 mt-lg-0"><a class="m-3 px-3 py-1 bg-white rounded" style="color:#27bc34;background:#fff" href="https://www.ovationthemes.com/wordpress/wordpress-bundle/" rel="noopener" target="_blank">Get It Now</a></span>
                    <span class="d-block d-lg-inline-block mt-3 mt-lg-0"></span>
                </div>
            </div>
        </div>
        <a href="#" class="mtsnb-hide" style="background-color:#27bc34;color:#ffffff;"><span>+</span></a>
    </div>
</div>

@stop