@extends("layout.app")

@section("contentheader_title", $product->name)
@section("contentheader_description", $product->short_description)

@section("main-content")

<div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{URL::to('/')}}">Home</a></li>
                    <li class='active'>{{$product->name}}</li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.breadcrumb -->

    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row single-product'>
                <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
                    <div class="sidebar-module-container">
                    @foreach ($sidebar_banners as $banner)
                        <div class="home-banner outer-top-n outer-bottom-xs">
                           <a href="{{$banner->link}}"> <img style="width: 100%;" src="{{URL::to('/')}}/storage/{{$banner->image}}" alt="Image"> </a>
                        </div>
                    @endforeach


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
                                                <button  data-toggle="modal" data-target="#cartModal"  class="btn btn-primary icon"  ng-click="addToCart({{json_encode($deal)}}, 1)" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button  data-toggle="modal" data-target="#cartModal"   ng-click="addToCart({{json_encode($deal)}}, 1)" class="btn btn-primary cart-btn" type="button">Add to cart</button></a>
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


                        <!-- ============================================== NEWSLETTER ============================================== -->
                        <div class="sidebar-widget newsletter outer-bottom-small outer-top-vs">
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
                            <!-- /.sidebar-widget-body -->
                        </div>
                        <!-- /.sidebar-widget -->

                    </div>
                </div>
                </div>
                <!-- /.sidebar -->
                <div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
                    <div class="detail-block">
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-5 gallery-holder">
                                <div class="show" href="images/p9.jpg">

                                <?php  $images = json_decode($product->images);?>
                                <img src="{{URL::to('/')}}/storage/{{$images[0]}}"  id="show-img" alt="{{$product->name}}">

								</div>

								<div class="small-img">
									<img src="{{asset('assets/images/online_icon_right@2x.png')}}" class="icon-left" alt="" id="prev-img">
									<div class="small-container">
									  <div id="small-img-roll">
                                      @foreach ($images as $image)
										<img src="{{URL::to('/')}}/storage/{{$image}}" class="show-small-img" alt="{{$product->name}}">
                                      @endforeach
                                    </div>
									</div>
									<img src="{{asset('assets/images/online_icon_right@2x.png')}}" class="icon-right" alt="" id="next-img">
								</div>

                            </div>
                            <!-- /.gallery-holder -->
                            <div class='col-sm-12 col-md-8 col-lg-7 product-info-block'>
                                <div class="product-info">
                                    <h1 class="name">{{$product->name}}</h1>

                                    <div class="rating-reviews m-t-20">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="pull-left">
                                                    <div class="rating rateit-small"></div>
                                                </div>
                                                <div class="pull-left">
                                                    <div class="reviews">
                                                        <a href="#review" class="lnk">({{count($product->reviews)}} Reviews)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.rating-reviews -->

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="pull-left">
                                                    <div class="stock-box">
                                                        <span class="label">Availability :</span>
                                                    </div>
                                                </div>
                                                <div class="pull-left">
                                                    <div class="stock-box">
                                                    @if($product->stock > 0)
                                                        <span class="value">In Stock</span>
                                                    @endif
                                                     @if($product->stock <= 0)
                                                        <span class="value">Out of Stock</span>
                                                    @endif                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.stock-container -->

                                    <div class="description-container m-t-20">
                                       <p>{!! $product->short_description !!}</p>
                                    </div>
                                    <!-- /.description-container -->

                                    <div class="price-container info-container m-t-30">
                                        <div class="row">

                                            <div class="col-sm-6 col-xs-6">
                                                <div class="price-box">
                                                    <span class="price">@convert($product->price)</span>
                                                    <span class="price-strike">@convert($product->discount)</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xs-6">
                                                <div class="favorite-button m-t-5">
                                                    <a class="btn btn-primary"  data-toggle="modal" data-target="#wishlistModal"  data-placement="right" title="Wishlist" href="#"  ng-click="addToWishlist({{json_encode($deal)}})">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                                        <i class="fa fa-envelope"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.price-container -->

                                    <div class="quantity-container info-container">
                                        <div class="row">

                                            <div class="qty">
                                                <span class="label">Qty :</span>
                                            </div>

                                            <div class="qty-count">
                                                <div class="cart-quantity">
                                                    <div class="quant-input">

                                                        <input type="number" ng-model="qty" class="input-text qty text" step="1" min="1" max="{{$product->stock}}" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="add-btn">
                                                <a href="#"  data-toggle="modal" data-target="#cartModal"   ng-click="addToCart({{json_encode($product)}}, qty)" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                                            </div>

                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.quantity-container -->

                                </div>
                                <!-- /.product-info -->
                            </div>
                            <!-- /.col-sm-7 -->
                        </div>
                        <!-- /.row -->
                    </div>

                    <div class="product-tabs inner-bottom-xs">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                    <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                                    <!--  <li><a data-toggle="tab" href="#tags">TAGS</a></li> -->
                                </ul>
                                <!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-12 col-md-9 col-lg-9">

                                <div class="tab-content">

                                    <div id="description" class="tab-pane in active">
                                        <div class="product-tab">
                                            {!! $product->long_description !!}

                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div id="review" class="tab-pane">
                                        <div class="product-tab">

                                            <div class="product-reviews">
                                                <h4 class="title">Customer Reviews</h4>

                                                <div class="reviews">

                                                    @foreach ($product->reviews as $review)
                                                    <div class="review">
                                                        <div class="review-title"><span class="summary">{{$review->summery}}</span><span class="date"><i class="fa fa-calendar"></i><span>{{$review->created_at}}</span></span>
                                                        </div>
                                                        <div class="text">{{$review->review_text}}</div>
                                                    </div>
                                                    @endforeach
                                                   

                                                </div>
                                                <!-- /.reviews -->
                                            </div>
                                            <!-- /.product-reviews -->

                                            <div class="product-add-review">
                                                <h4 class="title">Write your own review</h4>
                                                <div class="review-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th class="cell-label">&nbsp;</th>
                                                                <th>1 star</th>
                                                                <th>2 stars</th>
                                                                <th>3 stars</th>
                                                                <th>4 stars</th>
                                                                <th>5 stars</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="cell-label">Quality</td>
                                                                <td>
                                                                    <input type="radio" ng-model="review.quality" name="quality" class="radio" value="1">
                                                                </td>
                                                                <td>
                                                                    <input type="radio"  ng-model="review.quality" name="quality" class="radio" value="2">
                                                                </td>
                                                                <td>
                                                                    <input type="radio"  ng-model="review.quality" name="quality" class="radio" value="3">
                                                                </td>
                                                                <td>
                                                                    <input type="radio"  ng-model="review.quality" name="quality" class="radio" value="4">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" ng-model="review.quality"  name="quality" class="radio" value="5">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cell-label">Price</td>
                                                                <td>
                                                                    <input type="radio" ng-model="review.price" name="price" class="radio" value="1">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" ng-model="review.price"  name="price" class="radio" value="2">
                                                                </td>
                                                                <td>
                                                                    <input type="radio"  ng-model="review.price" name="price" class="radio" value="3">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" ng-model="review.price"  name="price" class="radio" value="4">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" ng-model="review.price"  name="price" class="radio" value="5">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cell-label">Value</td>
                                                                <td>
                                                                    <input type="radio" ng-model="review.value"  name="value" class="radio" value="1">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" ng-model="review.value"  name="value" class="radio" value="2">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" ng-model="review.value"  name="value" class="radio" value="3">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" ng-model="review.value"  name="value" class="radio" value="4">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" ng-model="review.value"  name="value" class="radio" value="5">
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- /.table .table-bordered -->
                                                    </div>
                                                    <!-- /.table-responsive -->
                                                </div>
                                                <!-- /.review-table -->

                                                <div class="review-form">
                                                    <div class="form-container">
                                                        <form class="cnt-form" name="reviewForm">

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                                                        <input required type="text" ng-model="review.name" class="form-control txt" id="exampleInputName" placeholder="">
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                                                                        <input required type="text" ng-model="review.summery" class="form-control txt" id="exampleInputSummary" placeholder="">
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                                                        <textarea required ng-model="review.review" class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>
                                                            </div>
                                                            <!-- /.row -->

                                                            <div class="action text-right">
                                                                <button ng-disabled="!reviewForm.$valid" ng-click="submitReview({{$product->id}})" class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                                                            </div>
                                                            <!-- /.action -->

                                                        </form>
                                                        <!-- /.cnt-form -->
                                                    </div>
                                                    <!-- /.form-container -->
                                                </div>
                                                <!-- /.review-form -->

                                            </div>
                                            <!-- /.product-add-review -->

                                        </div>
                                        <!-- /.product-tab -->
                                    </div>
                                    <!-- /.tab-pane -->


                                    <div id="tags" class="tab-pane">
                                        <div class="product-tag">

                                            <h4 class="title">Product Tags</h4>
                                            <form class="form-inline form-cnt">
                                                <div class="form-container">

                                                    <div class="form-group">
                                                        <label for="exampleInputTag">Add Your Tags: </label>
                                                        <input type="email" id="exampleInputTag" class="form-control txt">

                                                    </div>

                                                    <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                                                </div>
                                                <!-- /.form-container -->
                                            </form>
                                            <!-- /.form-cnt -->

                                            <form class="form-inline form-cnt">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                                </div>
                                            </form>
                                            <!-- /.form-cnt -->

                                        </div>
                                        <!-- /.product-tab -->
                                    </div>
                                    <!-- /.tab-pane -->

                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.product-tabs -->

                    <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                    <section class="section featured-product">
                        <div class="row">
                            <div class="col-lg-3">
                                <h5 class="section-title">Related <br /> Products</h5>
                                <div class="ad-imgs">
                                    <!-- <img class="img-responsive" src="assets/images/banners/home-banner1.jpg" alt="">
                                    <img class="img-responsive" src="assets/images/banners/home-banner2.jpg" alt=""> -->
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="owl-carousel homepage-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

                                @foreach($realateds as $product)
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
                                                                <button   data-toggle="modal" data-target="#cartModal"  ng-click="addToCart({{json_encode($product)}}, 1)"  class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button  data-toggle="modal" data-target="#cartModal"  ng-click="addToCart({{json_encode($product)}}, 1)" class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                            </li>

                                                            <li class="lnk wishlist">
                                                                <a class="add-to-cart"  data-toggle="modal" data-target="#wishlistModal"   ng-click="addToWishlist({{json_encode($product)}})" href="#" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
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
                        </div>
                    </section>
                    <!-- /.section -->
                    <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

                </div>
                <!-- /.col -->
                <div class="clearfix"></div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.body-content -->

    <!-- ============================================================= FOOTER ============================================================= -->


@endsection
