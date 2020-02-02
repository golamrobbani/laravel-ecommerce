            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider">
					<div class="logo-slider-inner">
						<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        @foreach ($brands as $brand)
								<div class="item m-t-15">
									<a href="#" class="image"> <img data-echo="{{URL::to('/')}}/storage/{{$brand->image}}" src="assets/images/blank.gif" alt="{{$brand->title}}"> </a>
								</div>
                        @endforeach

								<!--/.item-->
						</div>
						<!-- /.owl-carousel #logo-slider -->
					</div>
                <!-- /.logo-slider-inner -->

            </div>
            <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#top-banner-and-menu -->

    <!-- ============================================== INFO BOXES ============================================== -->


    <!-- ============== INFO BOXES : END ======================= -->

    <!-- =========================== FOOTER ================================== -->

    <footer id="footer" class="footer color-bg">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="address-block">

                            <!-- /.module-heading -->

                            <div class="module-body">
                                <ul class="toggle-footer" style="">
                                    <li class="media">
                                        <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                                        <div class="media-body">
                                            <p>{{$shop->shop_address}}</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-phone fa-stack-1x fa-inverse"></i> </span> </div>
                                        <div class="media-body">
                                            <p> {{$shop->shop_phone}}</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                                        <div class="media-body"> <span><a href="#">{{$shop->shop_email}}</a></span> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.module-body -->
                    </div>
                    <!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Customer Service</h4>
                        </div>
                        <!-- /.module-heading -->

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <li class="first"><a href="{{URL::to('/')}}/myaccount" title="My Account">My Account</a></li>
                                <li><a href="{{URL::to('/')}}/my-orders" title="Order History">Order History</a></li>

                                @foreach ($customerPages as $page)
                                    <li><a href="{{URL::to('/')}}/page/{{$page->slug}}">{{$page->title}}</a></li>
                                 @endforeach
                            </ul>
                        </div>
                        <!-- /.module-body -->
                    </div>
                    <!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Corporation</h4>
                        </div>
                        <!-- /.module-heading -->

                        <div class="module-body">
                            <ul class='list-unstyled'>

                                @foreach ($corporationPages as $page)
                                    <li><a href="{{URL::to('/')}}/page/{{$page->slug}}">{{$page->title}}</a></li>
                                 @endforeach

                            </ul>
                        </div>
                        <!-- /.module-body -->
                    </div>
                    <!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Why Choose Us</h4>
                        </div>
                        <!-- /.module-heading -->

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <li class="first"><a href="{{URL::to('/')}}/blog" title="Blog">Blog</a></li>

                                @foreach ($whychoosePages as $page)
                                    <li><a href="{{URL::to('/')}}/page/{{$page->slug}}">{{$page->title}}</a></li>
                                 @endforeach

                            </ul>
                        </div>
                        <!-- /.module-body -->
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-bar">
            <div class="container">
                <div class="col-xs-12 col-sm-4 no-padding social">
                    <ul class="link">
                        <li class="fb pull-left">
                            <a target="_blank" rel="nofollow" href="{{$shop->facebook}}" title="Facebook"></a>
                        </li>
                        <li class="tw pull-left">
                            <a target="_blank" rel="nofollow" href="{{$shop->twotter}}" title="Twitter"></a>
                        </li>
                        <li class="googleplus pull-left">
                            <a target="_blank" rel="nofollow" href="{{$shop->google}}" title="GooglePlus"></a>
                        </li>
                        <li class="rss pull-left">
                            <a target="_blank" rel="nofollow" href="{{$shop->rss}}" title="RSS"></a>
                        </li>
                        <li class="pintrest pull-left">
                            <a target="_blank" rel="nofollow" href="{{$shop->pinterest}}" title="PInterest"></a>
                        </li>
                        <li class="linkedin pull-left">
                            <a target="_blank" rel="nofollow" href="{{$shop->linkedin}}" title="Linkedin"></a>
                        </li>
                        <li class="youtube pull-left">
                            <a target="_blank" rel="nofollow" href="{{$shop->youtube}}" title="Youtube"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 no-padding copyright"><a href="http://www.grovalailab.com">Design & Development by Groval AI Lab</a> </div>
                <div class="col-xs-12 col-sm-4 no-padding">
                    <div class="clearfix payment-methods">
                        <ul>
                            <li><img src="assets/images/payments/1.png" alt=""></li>
                            <li><img src="assets/images/payments/2.png" alt=""></li>
                            <li><img src="assets/images/payments/3.png" alt=""></li>
                            <li><img src="assets/images/payments/4.png" alt=""></li>
                            <li><img src="assets/images/payments/5.png" alt=""></li>
                        </ul>
                    </div>
                    <!-- /.payment-methods -->
                </div>

{{--				<a href="http://www.facebook.com" target="_blank"><button onclick="topFunction()" id="myBtn" title="Messenger"> <i class="fab fa-facebook-messenger"></i> </button></a>--}}
            </div>
        </div>
    </footer>
    <!-- ============================================================= FOOTER : END============================================================= -->
