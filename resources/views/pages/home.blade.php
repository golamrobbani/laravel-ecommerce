@extends("layout.app")

@section("contentheader_title", "Home")
@section("contentheader_description", "Home")

@section("main-content")

<div class="body-content outer-top-vs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">

                    <div id="hero">
                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                        @foreach ($sliders as $slider)

                            <div class="item" style="background-image: url({{URL::to('/')}}/storage/{{$slider->slider_image}});">
                                <div class="container-fluid">
                                    <div class="caption bg-color vertical-center text-left">
                                        <div class="slider-header fadeInDown-1">{{$slider->top_title}}</div>
                                        <div class="big-text fadeInDown-1"> {{$slider->mid_title}} </div>
                                        <div class="excerpt fadeInDown-2 hidden-xs"> <span>{{$slider->bottom_title}}</span> </div>
                                        <div class="button-holder fadeInDown-3"> <a href="{{$slider->button_link}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">{{$slider->button_title}}</a> </div>
                                    </div>
                                    <!-- /.caption -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->
                        @endforeach

                        </div>
                        <!-- /.owl-carousel -->
                    </div>
                </div>
                <!-- ============================================== SIDEBAR ============================================== -->

                <div class="col-xs-12 col-sm-12 col-md-3 sidebar outer-top-vs">



                    <!-- ============================================== HOT DEALS ============================================== -->
                    <div class="sidebar-widget hot-deals outer-bottom-xs">
                        <h3 class="section-title">Hot deals</h3>
                        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">

                        @foreach ($hot_deals as $deal)
                            <div class="item">
                                <div class="products">
                                    <div class="hot-deal-wrapper">
                                        <div class="image">
                                            <a href="{{URL::to('/')}}/product/{{$deal->slug}}">
                                            <?php  $images = json_decode($deal->images);?>
                                                <img src="{{URL::to('/')}}/storage/{{$images[0]}}" alt="{{$deal->name}}">
                                                <img src="{{URL::to('/')}}/storage/{{$images[0]}}" alt="{{$deal->name}}" class="hover-image">
                                            </a>
                                        </div>
                                        @if($deal->is_promotion == 'yes')
                                        <div class="sale-offer-tag">
										<span>{{$deal->discount_percentage}}%<br>off</span>
										</div>
                                        @endif

                                        <div class="timing-wrapper">
                                            <div class="box-wrapper">
                                                <div class="date box"> <span class="key">120</span> <span class="value">Days</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.hot-deal-wrapper -->

                                    <div class="product-info text-left m-t-20">
                                        <h3 class="name"><a href="{{URL::to('/')}}/product/{{$deal->slug}}">{{$deal->name}}</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price"> <span class="price"> @convert($deal->price) </span> <span class="price-before-discount">@convert($deal->discount)</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <div class="add-cart-button btn-group">
                                                <button  data-toggle="modal" data-target="#cartModal"  class="btn btn-primary icon" type="button"  ng-click="addToCart({{json_encode($deal)}}, 1)"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button  data-toggle="modal" data-target="#cartModal" class="btn btn-primary cart-btn" type="button" ng-click="addToCart({{json_encode($deal)}}, 1)">Add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                            </div>

                        @endforeach

                        </div>
                        <!-- /.sidebar-widget -->
                    </div>
                    <!-- ============================================== HOT DEALS: END ============================================== -->

                    <!-- ============================================== SPECIAL OFFER ============================================== -->

                    <div class="sidebar-widget outer-bottom-small">
                        <h3 class="section-title">Special Offer</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">

                                <div class="item">
                                    <div class="products special-product">

                                    @foreach ($special_offers as $offer)
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-5">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <?php  $images = json_decode($offer->images);?>
                                                                <a href="{{URL::to('/')}}/product/{{$offer->slug}}"> <img src="{{URL::to('/')}}/storage/{{$images[0]}}" alt="{{$offer->name}}"> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="{{URL::to('/')}}/product/{{$offer->slug}}">{{$offer->name}}</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
																<span class="price"> @convert($offer->price) </span>

															</div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->
                                        </div>

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== SPECIAL OFFER : END ============================================== -->
                    <!-- ============================================== PRODUCT TAGS ============================================== -->
                    <div class="sidebar-widget product-tag">
                        <h3 class="section-title">Product tags</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <div class="tag-list">
                                         @foreach ($categories as $category)
                                                <a class="item" title="Phone" href="{{URL::to('/')}}/category/{{$category->slug}}">{{$category->name}}</a>
                                         @endforeach

							</div>
                            <!-- /.tag-list -->
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                    <!-- ============================================== SPECIAL DEALS ============================================== -->

                    <div class="sidebar-widget outer-bottom-small">
                        <h3 class="section-title">Special Deals</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">

                                <div class="item">
                                    <div class="products special-product">

                                    @foreach ($special_deals as $offer)
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-5">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <?php  $images = json_decode($offer->images);?>
                                                                <a href="{{URL::to('/')}}/product/{{$offer->slug}}"> <img src="{{URL::to('/')}}/storage/{{$images[0]}}" alt="{{$offer->name}}"> </a>
                                                            </div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="{{URL::to('/')}}/product/{{$offer->slug}}">{{$offer->name}}</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
																<span class="price"> @convert($offer->price) </span>

															</div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->
                                        </div>

                                        @endforeach


                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== SPECIAL DEALS : END ============================================== -->
                    <!-- ============================================== NEWSLETTER ============================================== -->
                    <div class="sidebar-widget newsletter outer-bottom-small">
                        <h3 class="section-title">Newsletters</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <p>Sign Up for Our Newsletter!</p>
                            <form>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                    <input type="email" ng-model="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
                                </div>
                                <button class="btn btn-primary" ng-click="subscribe()">Subscribe</button>
                            </form>
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== NEWSLETTER: END ============================================== -->



                    <!-- ============================================== Testimonials: END ============================================== -->

                </div>
                <!-- /.sidemenu-holder -->
                <!-- ============================================== SIDEBAR : END ============================================== -->

                <!-- ============================================== CONTENT ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                    <!-- ========================================== SECTION – HERO ========================================= -->


                    <!-- ========================================= SECTION – HERO : END ========================================= -->

                    <!-- ============================================== SCROLL TABS ============================================== -->
                    <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
                        <div class="more-info-tab clearfix ">
                            <h3 class="new-product-title pull-left">New Products</h3>
                            <!-- <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                                <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
                                <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Household water purifier</a></li>
                                <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Commercial water purifier </a></li>
                                <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Plant</a></li>
                            </ul> -->
                            <!-- /.nav-tabs -->
                        </div>
                        <div class="tab-content outer-top-xs">
                            <div class="tab-pane in active" id="all">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">


                                    @foreach ($new_products as $new)
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                                <?php  $images = json_decode($new->images);?>
                                                                <a href="{{URL::to('/')}}/product/{{$new->slug}}"> <img src="{{URL::to('/')}}/storage/{{$images[0]}}" alt="{{$new->name}}"> </a>
                                                        </div>
                                                        <!-- /.image -->

                                                     @if($new->upper_text)   <div class="tag new"><span>{{$new->upper_text}}</span></div> @endif

                                                    </div>
                                                    <!-- /.product-image -->

                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="{{URL::to('/')}}/product/{{$new->slug}}">{{$new->name}}</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"> <span class="price"> @convert($new->price) </span> <span class="price-before-discount">@convert($new->discount)</span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                    <!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button   data-toggle="modal" data-target="#wishlistModal"   class="btn btn-primary icon" type="button" title="Wishlist"  ng-click="addToWishlist({{json_encode($new)}}, 1)"> <i class="fa fa-heart"></i> </button>
                                                                </li>

                                                                <li class="lnk">

                                                                    <a  data-toggle="modal" data-target="#cartModal"  class="add-to-cart" href="#" title="Add to cart"  ng-click="addToCart({{json_encode($new)}}, 1)"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.action -->
                                                    </div>
                                                    <!-- /.cart -->
                                                </div>
                                                <!-- /.product -->

                                            </div>
                                            <!-- /.products -->
                                        </div>
                                        <!-- /.item -->

                                    @endforeach

                                    </div>
                                    <!-- /.home-owl-carousel -->
                                </div>
                                <!-- /.product-slider -->
                            </div>
                            <!-- /.tab-pane -->


                    <!-- ============================================== SCROLL TABS : END ============================================== -->
                    <!-- ============================================== WIDE PRODUCTS ============================================== -->
                    <div class="wide-banners outer-bottom-xs">
                        <div class="row">

                            @foreach($home_top_banners as $top)
                            <div class="col-md-4 col-sm-4">
                                <div class="wide-banner cnt-strip">
                                    <div class="image_1"><a href="{{$top->link}}"><img class="img-responsive" src="{{URL::to('/')}}/storage/{{$top->image}}" alt=""> </a> </div>
                                </div>
                                <!-- /.wide-banner -->
                            </div>
                            @endforeach

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.wide-banners -->

                    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                    <section class="section featured-product">

                       @foreach($home_sticks as $stick)
                        <div class="row">
                            <div class="col-lg-3">
                                <h3 class="section-title">{{$stick->name}}</h3>
                                <ul class="sub-cat">

                                @foreach($stick['subcat'] as $cat)
                                    <li><a href="{{URL::to('/')}}/category/{{$cat->slug}}">{{$cat->name}}</a></li>
                                @endforeach

                                </ul>
                            </div>
                            <div class="col-lg-9">
                                <div class="owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs">

                                   @foreach($stick['products'] as $product)

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                    <?php  $images = json_decode($product->images);?>
                                                    <a href="{{URL::to('/')}}/product/{{$product->slug}}"> <img src="{{URL::to('/')}}/storage/{{$images[0]}}" alt="{{$product->name}}"> </a>

                                                    </div>
                                                    <!-- /.image -->

                                                    @if($product->upper_text) <div class="tag hot"><span>{{$product->upper_text}}</span></div> @endif
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="{{URL::to('/')}}/product/{{$product->slug}}">{{$product->name}}</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price"> <span class="price"> @convert($product->price) </span> <span class="price-before-discount">@convert($product->discount)</span> </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                                    <button   data-toggle="modal" data-target="#wishlistModal"   class="btn btn-primary icon" type="button" title="Wishlist"  ng-click="addToWishlist({{json_encode($product)}}, 1)"> <i class="fa fa-heart"></i> </button>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a  data-toggle="modal" data-target="#cartModal"  class="add-to-cart" href="#" title="Add to cart"  ng-click="addToCart({{json_encode($product)}}, 1)"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                                                                </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->
                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    @endforeach


                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- /.home-owl-carousel -->
                    </section>
                    <!-- /.section -->
                    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                    <!-- ============================================== WIDE PRODUCTS ============================================== -->
                    <div class="wide-banners outer-bottom-xs">
                        <div class="row">

                        @foreach($home_middle_banners as $middle)

                            <div class="col-md-6 col-sm-6">
                                <div class="wide-banner cnt-strip">
                                    <div class="image_1"><a href="{{$middle->link}}"><img class="img-responsive" src="{{URL::to('/')}}/storage/{{$middle->image}}" alt=""> </a> </div>
                                </div>
                                <!-- /.wide-banner -->
                            </div>
                            @endforeach

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.wide-banners -->
                    <!-- =============== WIDE PRODUCTS : END ======================== -->


                    @foreach($home_products as $home)
                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                    <section class="section new-arriavls">

                        <h3 class="section-title">{{$home->name}}</h3>
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                        @foreach($home['products'] as $product)

                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                            <?php  $images = json_decode($product->images);?>
                                            <a href="{{URL::to('/')}}/product/{{$product->slug}}"> <img src="{{URL::to('/')}}/storage/{{$images[0]}}" alt="{{$product->name}}"> </a>

                                            </div>
                                            <!-- /.image -->

                                           @if($product->upper_text) <div class="tag hot"><span>{{$product->upper_text}}</span></div> @endif
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="{{URL::to('/')}}/product/{{$product->slug}}">{{$product->name}}</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"> <span class="price">@convert($product->price) </span> <span class="price-before-discount">@convert($product->discount)</span> </div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                    <button   data-toggle="modal" data-target="#wishlistModal"   class="btn btn-primary icon" type="button" title="Wishlist"  ng-click="addToWishlist({{json_encode($product)}}, 1)"> <i class="fa fa-heart"></i> </button>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a  data-toggle="modal" data-target="#cartModal"  class="add-to-cart" href="#" title="Add to cart"  ng-click="addToCart({{json_encode($product)}}, 1)"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                                                                </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->
                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->

                            @endforeach

                        </div>
                        <!-- /.home-owl-carousel -->
                    </section>
                    <!-- /.section -->
                    @endforeach

					 <!-- ========== Technology SLIDER ============== -->

                    <section class="section latest-blog outer-bottom-vs">
                        <h3 class="section-title">Technology</h3>
                        <div class="blog-slider-container outer-top-xs">
                            <div class="owl-carousel blog-slider custom-carousel">

                            @foreach($posts as $post)
                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image">
                                                <a href="{{URL::to('/')}}/blog/{{$post->slug}}"><img src="{{URL::to('/')}}/storage/{{$post->image}}" alt="{{$post->title}}"></a>
                                            </div>
                                        </div>
                                        <!-- /.blog-post-image -->

                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="{{URL::to('/')}}/blog/{{$post->slug}}">{{$post->title}}</a></h3>
                                            <span class="info">By admin &nbsp;|&nbsp; {{$post->created_at}} </span>
                                            <p class="text">{{$post->excerpt}}</p>
                                        </div>
                                        <!-- /.blog-post-info -->

                                    </div>
                                    <!-- /.blog-post -->
                                </div>
                                <!-- /.item -->
                                @endforeach


                            </div>
                            <!-- /.owl-carousel -->
                        </div>
                        <!-- /.blog-slider-container -->
                    </section>


                    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

                </div>
                <!-- /.homebanner-holder -->
                <!-- ============================================== CONTENT : END ============================================== -->
            </div>
            <!-- /.row -->

                </div>
            </div>
        </div>
</div>

@endsection
