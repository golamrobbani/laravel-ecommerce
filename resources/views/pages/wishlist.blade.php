@extends("layout.app")

@section("contentheader_title", "Wishlist")
@section("contentheader_description", "Wishlist")

@section("main-content")

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li class='active'>Wishlist</li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>

    <div class="body-content">
        <div class="container">
            <div class="my-wishlist-page">
                <div class="row">
                    <div class="col-md-12 my-wishlist">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="4" class="heading-title">My Wishlist</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr ng-repeat="item in wishlist  track by $index | orderBy:'id'">
                                        <td class="col-md-2 col-sm-6 col-xs-6">
                                            <img src="{{URL::to('/')}}/storage/@{{singleImage(item.images)}}" alt="imga">
                                        </td>
                                        <td class="col-md-5 col-sm-6 col-xs-6">
                                            <div class="product-name"><a  href="{{URL::to('/')}}/product/@{{item.slug}}">@{{item.name}}</a></div>
                                            <!-- <div class="rating">
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star non-rate"></i>
                                                <span class="review">( 06 Reviews )</span>
                                            </div>
                                            <div class="price">
                                                45000Tk
                                                <span>4500Tk</span>
                                            </div> -->
                                        </td>
                                        <td class="col-md-2 ">
                                            <span class="price"> @{{item.price  | currency : '৳'}} </span>
                                        </td>
                                        <td class="col-md-2 ">
                                        <!-- /.product-price -->
                                            <a href="#"  data-toggle="modal" data-target="#cartModal"  ng-click="addToCart(item,1)" class="btn-upper btn btn-primary">Add to cart</a>
                                        </td>
                                        <td class="col-md-1 close-btn">
                                            <a href=""  ng-click="removeWishlist(item)"  class=""><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
@endsection
