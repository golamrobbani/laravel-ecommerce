@extends("layout.app")

@section("contentheader_title", $category_items->name)
@section("contentheader_description", $category_items->name)

@section("main-content")

<div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>category</li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row'>
                <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
                    <!-- ================================== TOP NAVIGATION ================================== -->
                    @include('common.sidemenu')
                    <!-- ================================== TOP NAVIGATION : END ================================== -->
                    <div class="sidebar-module-container">
                        <div class="sidebar-filter">
                            <!-- ============================================== PRICE SILDER============================================== -->
                            <div class="sidebar-widget">
                                <div class="widget-header">
                                    <h4 class="widget-title">Price Slider</h4>
                                </div>

                                <div class="sidebar-widget-body m-t-10">
                                <form method="GET">
                                    <div class="price-range-holder">
										<!-- <span class="min-max"> <span class="pull-left" id="minmum">20000Tk</span>
										<span class="pull-right">80000Tk</span> </span> -->
                                        <!-- <input type="text" name="minmum" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;"> -->
                                        <input type="text" name="range" class="price-slider" value="">
                                    </div>
                                    <!-- /.price-range-holder -->
                                    <button type="submit" class="lnk btn btn-primary">Show Now</button>
                                    </form>
								</div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <!-- /.sidebar-widget -->

                            <!-- ============================================== PRICE SILDER : END ============================================== -->
                            <!-- ============================================== MANUFACTURES============================================== -->
                            <div class="sidebar-widget">
                                <div class="widget-header">
                                    <h4 class="widget-title">Manufactures</h4>
                                </div>
                                <div class="sidebar-widget-body">
                                    <ul class="list">
                                    @foreach($brands as $brand)
                                        <li><a href="{{URL::to('/')}}/category/{{$category_items->slug}}?brand={{$brand->brand}}">{{$brand->brand}}</a></li>
                                    @endforeach
                                    </ul>
                                    <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
                                </div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <!-- /.sidebar-widget -->


                            <!-- =============================== PRODUCT TAGS ============================= -->
                            <div class="sidebar-widget product-tag outer-top-vs">
                                <h3 class="section-title">Product tags</h3>
                                <div class="sidebar-widget-body outer-top-xs">
                                    <div class="tag-list">
                                        @foreach ($categories as $category)
                                                <a class="item" title="Phone" href="{{URL::to('/')}}/category/{{$category->slug}}">{{$category->name}}</a>
                                         @endforeach 									</div>
                                    <!-- /.tag-list -->
                                </div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <!-- /.sidebar-widget -->


                            <!-- ============================================== Testimonials: END ============================================== -->

                            <!-- ============================================== NEWSLETTER ============================================== -->
                            <div class="sidebar-widget newsletter outer-bottom-small  outer-top-vs">
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

                        </div>
                        <!-- /.sidebar-filter -->
                    </div>
                    <!-- /.sidebar-module-container -->
                </div>
                <!-- /.sidebar -->
                <div class="col-xs-12 col-sm-12 col-md-9 rht-col">
                    <!-- ========================================== SECTION – HERO ========================================= -->


                    <div class="clearfix filters-container m-t-10">
                        <div class="row">
                            <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
                                <div class="filter-tabs">
                                    <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                        <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                                        <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-bars"></i>List</a></li>
                                    </ul>
                                </div>
                                <!-- /.filter-tabs -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-sm-12 col-md-5 col-lg-5 hidden-sm">
                                <div class="col col-sm-6 col-md-6 no-padding">
                                    <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                                        <div class="fld inline">
                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li role="presentation"><a href="{{URL::to('/')}}/category/{{$category_items->slug}}?order=lowprice">Price:Lowest first</a></li>
                                                    <li role="presentation"><a href="{{URL::to('/')}}/category/{{$category_items->slug}}?order=highprice">Price:HIghest first</a></li>
                                                    <li role="presentation"><a href="{{URL::to('/')}}/category/{{$category_items->slug}}?order=asc">Product Name:A to Z</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                        <!-- /.fld -->
                                    </div>
                                    <!-- /.lbl-cnt -->
                                </div>
                                <!-- /.col -->

                                <!-- /.col -->
                            </div>
                            <!-- /.col -->

                            <div class="col col-sm-6 col-md-4 col-xs-6 col-lg-4 text-right">

                             {{ $category_items->products->links() }}
                                <!-- /.pagination-container -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="search-result-container ">
                        <div id="myTabContent" class="tab-content category-list">

                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product">
                                    <div class="row">

                                    @foreach($category_items->products as $product)
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="item">
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
                                                                    <button  data-toggle="modal" data-target="#wishlistModal"  class="btn btn-primary icon" type="button" title="Wishlist"  ng-click="addToWishlist({{json_encode($product)}}, 1)"> <i class="fa fa-heart"></i> </button>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a  data-toggle="modal" data-target="#cartModal" class="add-to-cart"  title="Add to cart" href="#"  ng-click="addToCart({{json_encode($product)}}, 1)"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
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
                                        </div>
                                        <!-- /.item -->

                                        @endforeach


                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.category-product -->

                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="list-container">
                                <div class="category-product">
                                    <div class="category-product-inner">
                                        <div class="products">

                                        @foreach($category_items->products as $product)

                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-3 col-lg-3">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <?php  $images = json_decode($product->images);?>
                                                                <a href="{{URL::to('/')}}/product/{{$product->slug}}"> <img src="{{URL::to('/')}}/storage/{{$images[0]}}" alt="{{$product->name}}"> </a>
                                                            </div>
                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-sm-9 col-lg-9">
                                                        <div class="product-info">
                                                        <h3 class="name"><a href="{{URL::to('/')}}/product/{{$product->slug}}">{{$product->name}}</a></h3>                                                            <div class="rating rateit-small rateit"><button id="rateit-reset-18" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-18" style="display: none;"></button><div id="rateit-range-18" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-18" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;"><div class="rateit-selected" style="height: 14px; width: 56px;"></div><div class="rateit-hover" style="height:14px"></div></div></div>
                                                        <div class="product-price"> <span class="price"> @convert($product->price)</span> <span class="price-before-discount">@convert($product->discount)</span> </div>
                                                            <!-- /.product-price -->
                                                            <div class="description m-t-10">{{$product->short_description}}</div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-signal"></i> </button>
                                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                                        </li>
                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart" href="{{URL::to('/')}}/product/{{$product->slug}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a>
                                                                        </li>
                                                                        <li class="lnk">
                                                                            <a class="add-to-cart" href="{{URL::to('/')}}/product/{{$product->slug}}" title="Compare"> <i class="fa fa-shopping-cart"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->

                                                        </div>
                                                        <!-- /.product-info -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-list-row -->
                                                @if($product->upper_text) <div class="tag new"><span>{{$product->upper_text}}</span></div> @endif
                                            </div>
                                            <!-- /.product-list -->

                                            @endforeach


                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.category-product-inner -->
                                </div>
                            </div>

                        </div>
                        <!-- /.tab-content -->
                        <div class="clearfix filters-container bottom-row">
                            <div class="text-right">

                                 {{ $category_items->products->links() }}
                                <!-- /.pagination-container -->
                            </div>
                            <!-- /.text-right -->

                        </div>
                        <!-- /.filters-container -->

                    </div>
                    <!-- /.search-result-container -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>

@endsection
