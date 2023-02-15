@extends('layouts.user')

@section('title', 'SILI - KIT')

@section('style')
<link rel="stylesheet" id="photoswipe-default-skin-css" href="{{ asset('css/page/style.css') }}" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-layout-css" href="{{ asset('css/lib/woocommerce-layout.css') }}" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-general-css" href="{{ asset('css/lib/woocommerce.css') }}" type="text/css" media="all">
@stop

@section('content')

<body class="product-template-default single single-product postid-17 wp-custom-logo theme-organic-farm-pro woocommerce woocommerce-page woocommerce-js has-mtsnb" style="padding-top: 41px;">
    <div class="shop">
        <div id="container">
            <div id="contentwoocom" class="container mt-5" role="main">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div id="product-17" class="product type-product post-17 status-publish first instock product_cat-featured has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;"><a href="#" class="woocommerce-product-gallery__trigger"><img draggable="false" role="img" class="emoji" alt="🔍" src="https://s.w.org/images/core/emoji/13.1.0/svg/1f50d.svg"></a>
                                <figure class="woocommerce-product-gallery__wrapper">
                                    <div data-thumb="{{ URL::to($product->image) }}" class="woocommerce-product-gallery__image"><a href="{{ URL::to($product->image) }}"><img width="318" height="213" src="{{ URL::to($product->image) }}" class="wp-post-image" alt="" loading="lazy" title="{{ $product->name }}" sizes="(max-width: 318px) 100vw, 318px"></a></div>
                                </figure>
                            </div>
                            <div class="summary entry-summary">
                                <h1 class="product_title entry-title">{{ $product->name }}</h1>
                                <p class="price"><ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ number_format($product->price, 0, '', ','); }}</bdi>VNĐ</span></ins></p>
                                <div class="product_meta">
                                    <span class="posted_in">Category: <a href="{{ URL::to($product->image) }}" rel="tag">{{ $product->type }}</a></span>
                                </div>
                            </div>
                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                <ul class="tabs wc-tabs" role="tablist">
                                    <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                                        <a href="#tab-description">
                                            Description </a>
                                    </li>
                                </ul>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>
                            <section class="related products">
                                <h2>Related products</h2>
                                <ul class="products columns-4">
                                    @foreach($recentProduct as $recentP)
                                    <li class="product type-product post-92 status-publish first instock product_cat-featured has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                        <a href="{{ URL::to($recentP->image) }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <img width="300" height="213" src="{{ URL::to($recentP->image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy">
                                            <h2 class="woocommerce-loop-product__title">{{ $recentP->name }}</h2>
                                            <span class="price"><ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ $recentP->price }}</bdi></span>VNĐ</ins></span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </section>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div id="sidebar">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</body>
@stop