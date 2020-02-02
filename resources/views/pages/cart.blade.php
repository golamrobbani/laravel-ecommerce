@extends("layout.app")

@section("contentheader_title", "Cart")
@section("contentheader_description", "Cart")

@section("main-content")

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Cart</li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>

    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row ">
                <div class="shopping-cart">
                    <div class="shopping-cart-table ">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-romove item">Remove</th>
                                        <th class="cart-description item">Image</th>
                                        <th class="cart-product-name item">Product Name</th>
                                        <th class="cart-qty item">Quantity</th>
                                        <th class="cart-sub-total item">Subtotal</th>
                                    </tr>
                                </thead>
                                <!-- /thead -->

                                <tbody>

                                    <tr ng-repeat="item in cart  track by $index | orderBy:'id'">
                                        <td class="romove-item"><a href=""  ng-click="removeItem(item)" title="cancel" class="icon"><i class="fas fa-trash-alt"></i></a></td>
                                        <td class="cart-image">
                                            <a class="entry-thumbnail"  href="{{URL::to('/')}}/product/@{{item.slug}}">
                                             <img  style="height: 60px; width: 60px;" src="{{URL::to('/')}}/storage/@{{singleImage(item.images)}}" alt="">
                                            </a>
                                        </td>
                                        <td class="cart-product-name-info">
                                            <h4 class='cart-product-description'><a  href="{{URL::to('/')}}/product/@{{item.slug}}">@{{item.name}}</a></h4>
                                            <!-- <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="rating rateit-small"></div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="reviews">
                                                        (06 Reviews)
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- /.row -->

                                        </td>
                                        <td class="cart-product-quantity">
                                            <div class="quant-input">
                                                <input type="number" ng-change="updateCart()" ng-model="item.qty" min="0" max="@{{item.stock}}" value="1">
                                            </div>
                                        </td>
                                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">@{{item.price * item.qty  | currency : '৳'}}</span></td>
                                    </tr>


                                </tbody>
                                <!-- /tbody -->

                                <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <div class="shopping-cart-btn">
                                                <span class="">
													<a href="/" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
											 	</span>
                                            </div>
                                            <!-- /.shopping-cart-btn -->
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- /table -->
                        </div>
                    </div>
                    <!-- /.shopping-cart-table -->
                    <div class="col-md-4 col-sm-12 estimate-ship-tax">
{{--                        <table class="table">--}}
{{--                            <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>--}}
{{--                                        <span class="estimate-title">Estimate shipping and tax</span>--}}
{{--                                        <p>Enter your destination to get shipping and tax.</p>--}}
{{--                                    </th>--}}
{{--                                </tr>--}}
{{--                            </thead>--}}
{{--                            <!-- /thead -->--}}
{{--                            <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="info-title control-label">Country <span>*</span></label>--}}
{{--                                            <select class="form-control unicase-form-control selectpicker">--}}
{{--                                                <option>--Select options--</option>--}}
{{--                                                <option>Bangladesh</option>--}}
{{--                                                <option>India </option>--}}
{{--                                                <option>Nepal</option>--}}
{{--                                                <option>Singapor</option>--}}
{{--                                                <option>UAE</option>--}}
{{--                                                <option>Oman</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="info-title control-label">State/Province <span>*</span></label>--}}
{{--                                            <select class="form-control unicase-form-control selectpicker">--}}
{{--                                                <option>--Select options--</option>--}}
{{--                                                <option>Dhaka</option>--}}
{{--                                                <option>Cumilla </option>--}}
{{--                                                <option>Chittagone</option>--}}
{{--                                                <option>khulna</option>--}}
{{--                                                <option>Rajshahi</option>--}}
{{--                                                <option>Rangpur</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="info-title control-label">Zip/Postal Code</label>--}}
{{--                                            <input type="text" class="form-control unicase-form-control text-input" placeholder="">--}}
{{--                                        </div>--}}
{{--                                        <div class="pull-right">--}}
{{--                                            <button type="submit" class="btn-upper btn btn-primary">GET A QOUTE</button>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
                    </div>
                    <!-- /.estimate-ship-tax -->

                    <div class="col-md-4 col-sm-12 estimate-ship-tax">
                       <!--  <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="estimate-title">Discount Code</span>
                                        <p>Enter your coupon code if you have one..</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" ng-model="coupon_code" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
                                        </div>
                                        <div class="clearfix pull-right">
                                            <button type="button" ng-click="check_coupon(coupon_code)" class="btn-upper btn btn-primary">APPLY COUPON</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>  -->
                    </div>
                    <!-- /.estimate-ship-tax -->

                    <div class="col-md-4 col-sm-12 cart-shopping-total">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="cart-sub-total">
                                            Subtotal<span class="inner-left-md">@{{getTotal()  | currency : '৳'}}</span>
                                        </div>
                                        <div class="cart-grand-total">
                                            Grand Total<span class="inner-left-md">@{{getTotal() | currency : '৳'}}</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <!-- /thead -->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="cart-checkout-btn pull-right">
                                            <a href="/checkout"> <button type="submit" ng-disabled="cart.length == 0" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button></a>
                                            <!-- <span class="">Checkout with multiples address!</span> -->
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- /tbody -->
                        </table>
                        <!-- /table -->
                    </div>
                    <!-- /.cart-shopping-total -->
                </div>
                <!-- /.shopping-cart -->
            </div>
            <!-- /.row -->
        </div>
    </div>

@endsection
