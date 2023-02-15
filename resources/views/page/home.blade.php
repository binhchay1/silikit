@extends('layouts.user')

@section('title', 'SILI - KIT')

@section('content')

<body class="home page-template page-template-page-template page-template-home-page page-template-page-templatehome-page-php page page-id-9 wp-custom-logo theme-organic-farm-pro woocommerce-js has-mtsnb" style="padding-top: 41px;">
    <section id="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="10000">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('img/slider_1.png') }}" alt="1" title="#slide">
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    <section id="service">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item">
                                <div class="box">
                                    <div class="row">
                                        <div class="col-lg-3 col-4">
                                            <div class="service_icon">
                                                <img src="{{ asset('img/icon1.png') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-8">
                                            <h5 class="title pb-0">Orignal Products</h5>
                                            <p class="post">Dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="box">
                                    <div class="row">
                                        <div class="col-lg-3 col-4">
                                            <div class="service_icon">
                                                <img src="{{ asset('img/icon2.png') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-8">
                                            <h5 class="title pb-0">Secure Payment</h5>
                                            <p class="post">Dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="box">
                                    <div class="row">
                                        <div class="col-lg-3 col-4">
                                            <div class="service_icon">
                                                <img src="{{ asset('img/icon3.png') }}" width="auto">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-8">
                                            <h5 class="title pb-0">Orignal Products</h5>
                                            <p class="post">Dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button role="presentation" class="owl-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button><button role="presentation" class="owl-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="featured_product">
        <div class="container">
            <div class="featured_product_head text-center">
                <h3 class="pb-0 m-0 heading">
                    Featured Products </h3>
                <img src="{{ asset('img/title_line.png') }}">
            </div>
            <div class="owl-carousel mt-5 owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        @foreach ($products as $product)
                        <div class="owl-item" style="width: 445px; margin-right: 10px;">
                            <div class="featured_product_content">
                                <img width="300" height="213" src="{{ URL::to($product->image) }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" loading="lazy">
                                <div class="row content_pad">
                                    <div class="col-lg-8 col-8 pt-2">
                                        <h5 class="p-0"><a href="{{ URL::to('/product-detail/' . $product->name) }}">{{ $product->name }}</a></h5>
                                        <p class="mb-0">{{ $product->type }}
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-4 text-center pt-2 d-flex justify-content-center align-items-center">
                                        <span><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ number_format($product->price, 0, '', ','); }}</bdi>VNĐ</span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ number_format($product->price, 0, '', ','); }}</bdi>VNĐ</span></ins></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-nav"><button role="presentation" class="owl-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button><button role="presentation" class="owl-next disabled"><i class="fa fa-chevron-right" aria-hidden="true"></i></button></div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
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
                <img src="{{ asset('img/title_line.png') }}">
            </div>
            <div class="row mt-3">
                @foreach($blogs as $blog)
                <div class="col-lg-6 col-md-6 mt-4" style="max-width: 100%">
                    <div class="post-slide">
                        <div class="post-img">
                            <img width="230" height="263" src="{{ URL::to($blog->image) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"> <span class="date">{{ date('M j Y', strtotime($blog->created_at)) }}</span>
                        </div>
                        <div class="post-review">
                            <h5 class="post-title m-0 p-0"><a href="{{ URL::to('/blog-detail/' . $blog->title) }}">{{ $blog->title }}</a> </h5>
                            <ul>
                                <li><span class="entry-author mr-2"><i class="far fa-user"></i>{{ $blog->author }}</span></li>
                            </ul>
                            <p class="post-description">
                                {!! $blog->description !!} </p>
                            <div class="latest_btn">
                                <a href="{{ URL::to('/blog-detail/' . $blog->title) }}">
                                    Read More<i class="fas fa-angle-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="testimonial">
        <div class="container">
            <div class="testimonial_head">
                <h3 class="pb-0 m-0">
                    Testimonial </h3>
                <img src="{{ asset('img/title_line.png') }}">
            </div>
            <div class="owl-carousel mt-4 owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
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
</body>
@stop