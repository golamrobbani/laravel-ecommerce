    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">

        <!-- ============================================== TOP MENU ============================================== -->
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                    <div class="cnt-account">
                        <ul class="list-unstyled">
                            <li class="wishlist"><a href="{{URL::to('/')}}/wishlist"><span>Wishlist (@{{ wishlist.length }})</span></a></li>
                            <li class="header_cart hidden-xs"><a href="{{URL::to('/')}}/cart"><span>My Cart  (@{{ cart.length }})</span></a></li>

                            @if (Auth::guest())
                                <li class="login"><a href="{{URL::to('/')}}/login"><span>Login / Register</span></a></li>
                            @else
                                <li class="myaccount"><a href="{{URL::to('/')}}/myaccount"><span>My Account <b>({{ Auth::user()->name }})</b></span></a></li>
                            @endif

                        </ul>
                    </div>
                    <!-- /.cnt-account -->
					<div class="cnt-block">
						<div class="logo">
                            <a href="/"> <img src="{{URL::to('/')}}/storage/{{$shop->shop_logo}}" alt="logo"> </a>
                        </div>
					</div>

                    <!-- /.cnt-cart -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.header-top-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.header-top -->


        <!-- ============================================== NAVBAR ============================================== -->
        <div class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <ul class="nav navbar-nav">
                                    <li class="active dropdown"> <a href="/">Home</a> </li>

                                    @foreach ($menus['main_menus'] as $menu)
                                    <li class="dropdown yamm mega-menu"> <a href="{{URL::to('/')}}/category/{{$menu->slug}}" data-hover="dropdown" class="dropdown-toggle" >{{$menu->name}} @if($menu->menu_tag) <span class="menu-label hot-menu hidden-xs">{{$menu->menu_tag}}</span> @endif</a>
                                       @if($menu->submenus->first())
                                            @php
                                                $name = 'category';
                                                if($menu->display_item == 'yes'){
                                                    $name = 'product';
                                                }
                                            @endphp
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <h2 class="title">{{$menu->submenu_heading}}</h2>
                                                            <ul class="links">
                                                                @foreach ($menu['submenus'] as $single)
                                                                     <li><a href="{{URL::to('/')}}/{{$name}}/{{$single->slug}}">{{$single->name}}</a></li>
                                                                @endforeach

                                                            </ul>
                                                        </div>


                                                        <!-- /.col -->


                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
															<img class="img-responsive" src="{{URL::to('/')}}/storage/{{$menu->category_image}}" alt="{{$menu->name}}">
														</div>
                                                        <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        @endif
                                    </li>

                                    @endforeach

                                     <li class="dropdown"> <a href="{{URL::to('/')}}/contact">Contact Us</a> </li>
                                    <li class="dropdown"> <a href="{{URL::to('/')}}/blog">Blog</a> </li>
                                    <li class="pull-right">
                                        <form action="/search" method="get">
                                            <div class="control-group">
                                                 <input class="search-box" placeholder="Search here..." name="q"/>
                                                <a class="search-button" href="#"></a>
                                            </div>
                                        </form>
                                    </li>

                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="clearfix"></div>
                            </div>
                            <!-- /.nav-outer -->
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.nav-bg-class -->
                </div>
                <!-- /.navbar-default -->
                        <!-- /.search-area -->
            </div>
            <!-- /.container-class -->
        </div>
        <!-- /.header-nav -->
        <!-- ============================================== NAVBAR : END ============================================== -->
    </header>
    <!-- ============================================== HEADER : END ============================================== -->
