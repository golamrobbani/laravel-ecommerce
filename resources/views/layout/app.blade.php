
    <!DOCTYPE html>
    <html lang="en"  ng-app="myApp">

    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="robots" content="all">
        <title>@hasSection('contentheader_title')@yield('contentheader_title') - @endif{{ $shop->shop_title }}</title>

        <link rel="icon" href="{{ URL::to('/public/storage/' . $shop->fevicon) }}" type="image/png" sizes="16x16">

        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="@hasSection('contentheader_title')@yield('contentheader_title') - @endif{{ $shop->shop_title }}" />
        <meta name="og:description" content="@hasSection('contentheader_description')@yield('contentheader_description') - @endif{{ $shop->shop_title }}" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="{{ $shop->shop_title }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="@hasSection('contentheader_title')@yield('contentheader_title') - @endif{{ $shop->shop_title }}" />
        <meta name="twitter:description" content="@hasSection('contentheader_description')@yield('contentheader_description') - @endif{{ $shop->shop_title }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

        <!-- Customizable CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/blue.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/rateit.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
        <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet">
        <!-- Icons/Glyphs -->

        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


    <style>
      [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
        display: none !important;
      }
    </style>
    </head>

  <body class="cnt-home"  ng-controller="myController">



    {{ csrf_field() }}

    @include('common.header')




    <!-- Your Page Content Here -->
    @yield('main-content')





    @include('common.footer')



    <!-- Cart modal -->

    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Your Cart</h3>
                    <button ng-click="cartModal = false" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -34px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Item Image</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr   ng-repeat="item in cart  track by $index | orderBy:'id'">
                            <th scope="row">@{{$index + 1}}</th>
                            <td>
                                <div class="image_1" style="height: 40px; width: 40px;">
                                    <a  href="{{URL::to('/')}}/product/@{{item.slug}}"><img  src="{{URL::to('/')}}/storage/@{{singleImage(item.images)}}" alt=""></a>
                                </div>
                            </td>
                            <td><a href="{{URL::to('/')}}/product/@{{item.slug}}">@{{item.name}}</a></td>
                            <td><div class="price">@{{item.qty}}</div></td>
                            <td><div class="price">@{{item.price * item.qty  | currency : '৳' }} </div></td>
                            <td><a href="" ng-click="removeItem(item)"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">
                    <button  ng-click="cartModal = false" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{URL::to('/')}}/cart" class="btn btn-primary">Checkout</a>
                </div>

            </div>
        </div>
    </div>

    <!-- wishlist modal -->

    <div class="modal fade" id="wishlistModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Your Wish List</h3>
                    <button ng-click="wishlistModal = false" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -34px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Item Image</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr   ng-repeat="item in wishlist  track by $index | orderBy:'id'">
                            <th scope="row">@{{$index + 1}}</th>
                            <td>
                                <div class="image_1" style="height: 40px; width: 40px;">
                                    <a  href="{{URL::to('/')}}/product/@{{item.slug}}"><img  src="{{URL::to('/')}}/storage/@{{singleImage(item.images)}}" alt=""></a>
                                </div>
                            </td>
                            <td><a href="{{URL::to('/')}}/product/@{{item.slug}}">@{{item.name}}</a></td>
                            <td><div class="price">@{{item.price | currency : '৳' }} </div></td>
                            <td><a href="" ng-click="removeWishlist(item)"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">
                    <button  ng-click="wishlsitModal = false" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{URL::to('/')}}/wishlist" class="btn btn-primary">View Wishlist</a>
                </div>

            </div>
        </div>
    </div>


    <!-- For demo purposes – can be removed on production -->

    <!-- For demo purposes – can be removed on production : End -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>

    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/echo.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing-1.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.rateit.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

	<script src="{{ asset('assets/js/scripts/zoom-image.js') }}"></script>
	<script src="{{ asset('assets/js/scripts/main.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    </script>

    </body>

    </html>
