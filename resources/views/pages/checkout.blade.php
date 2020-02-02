@extends("layout.app")

@section("contentheader_title", "Checkout")
@section("contentheader_description", "Checkout")

@section("main-content")

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li class='active'>Checkout</li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>

    <div class="body-content">
        <div class="container">
            <div class="checkout-box ">
                <div class="row shopping-cart">
                    <div class="col-xs-12 col-sm-8 col-md-8">

                        <div class="panel-group checkout-steps" id="accordion">

                            <div class="row">
                               <div class="stepwizard">
                                    <div class="stepwizard-row setup-panel">
                                        <div class="stepwizard-step">
                                            <a href="#step-1" type="button" class="btn  btn-default btn-circle"  ng-class="{'btn-primary': checkout_option == 'area'}">1</a>
                                            <p>Delivery Area</p>
                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="#step-2" type="button" class="btn  btn-default btn-circle"   ng-class="{'btn-primary': checkout_option == 'shipping'}" >2</a>
                                            <p>Delivery Address</p>
                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="#step-3" type="button" class="btn btn-default btn-circle" ng-class="{'btn-primary': checkout_option == 'payment'}" >3</a>
                                            <p>Payment Options</p>
                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="#step-3" type="button" class="btn btn-default btn-circle"  ng-class="{'btn-primary': checkout_option == 'confirm'}" >4</a>
                                            <p>Submit Order</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div ng-if="checkout_option == 'area'">

                                    <br/>
                                    <br/>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                    <label class="info-title control-label">Select Your Delivery Area </label>
                                    <select class="form-control unicase-form-control" ng-model="delivery_area" ng-change="changeDeliveryArea(delivery_area)">
                                        <option value="Inside Dhaka">Inside Dhaka</option>
                                        <option value="Outside Dhaka">Outside Dhaka </option>
                                    </select>
                                </div>

                                </div>

                                <br/>
                                <br/>

                                <button type="button"  ng-click="changeOption('shipping')" ng-disabled="cart.length == 0" class="btn-upper btn btn-primary checkout-page-button">Next</button>

                            </div>


                            <div ng-if="checkout_option == 'confirm'">
                                <br/>
                                <br/>

                                <div class="cart-checkout-btn" style="text-align: center;">
                                     <img ng-if="button_disabled" src="{{ URL::to('/') }}/assets/images/tenor.gif" alt="loading..." />
                                     <button type="button" ng-hide="button_disabled" ng-click="submitOrder()" class="btn btn-primary checkout-btn">CONFIRM ORDER</button>
                                </div>

                            </div>

                            <div ng-if="checkout_option == 'shipping'">

                                 <div class="sign-in-page">
                                    <div class="row">
                                        <!-- Sign-in -->
                                        <div class="col-md-6 col-sm-6 sign-in">
                                            <h4 class="">Enter Your Delivery Address</h4>
                                            <!-- <p class="">Hello, Welcome to your account.</p> -->

                                            <form class="register-form outer-top-xs" role="form">
                                                <div class="form-group">
                                                    <label class="info-title" for="phone">Delivery Phone <span>*</span></label>
                                                    <input type="text" class="form-control unicase-form-control text-input" id="phone" ng-model="order.delivery_phone">
                                                </div>

                                                <div class="form-group">
                                                    <label class="info-title" for="city">Delivery City <span>*</span></label>
                                                    <input type="text" class="form-control unicase-form-control text-input" id="city" ng-model="order.delivery_city">
                                                </div>

                                                <div class="form-group">
                                                    <label class="info-title" for="postcode">Delivery Postcode <span>*</span></label>
                                                    <input type="text" class="form-control unicase-form-control text-input" id="postcode"  ng-model="order.delivery_postcode">
                                                </div>

                                                <div class="form-group">
                                                    <label class="info-title" for="address">Delivery Address <span>*</span></label>
                                                    <textarea  class="form-control unicase-form-control text-input" id="address"  ng-model="order.delivery_address"></textarea>
                                                </div>



                                                <button type="button"  ng-click="changeOption('payment')" ng-disabled="validDeliveryAddress()" class="btn-upper btn btn-primary checkout-page-button">Next</button>
                                            </form>
                                        </div>
                                        <!-- Sign-in -->
                                    </div>
                                </div>


                            </div>


                    <div ng-if="checkout_option == 'payment'">

                       <h4 class="">Select Payment Method</h4>

                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" ng-click="changePaymentMethod('cashondelivery')" href="#cashondelivery">Cash On Delivery</a></li>
                          <li><a data-toggle="tab" ng-click="changePaymentMethod('bKash')"  href="#bkash">bKash Payment</a></li>
                          <li><a data-toggle="tab" ng-click="changePaymentMethod('Rocket')"  href="#rocket">Rocket Payment</a></li>
                        </ul>

                        <div class="tab-content panel panel-default">

                          <div id="cashondelivery" class="tab-pane fade in active">
                            <h3>Cash On Delivery</h3>

                              <br />
                              <br />
                              <button type="button"  ng-click="changeOption('confirm')" class="btn-upper btn btn-primary checkout-page-button">Next</button>
                          </div>

                           <div id="bkash" class="tab-pane">
                            <h3>bKash Payment Information</h3>
                            <div class="panel-body">
                                        <ul type="square">
                                            <li>Go to your bKash Mobile Menu by dialing <b> *247#</b></li>
                                            <li>Choose “Payment” <b>(Option #3)</b></li>
                                            <li>Enter the Merchant bKash <b>({{$shop->bkash_merchant}})</b></li>
                                            <li>Enter the amount Total <b>(Tk. @{{getTotal() + delivery_charge - offer.amount | currency : '৳'}} Enter Ammount)</b></li>
                                            <li>Enter a reference* against your payment <b>(Your Reference No: 33)</b></li>
                                            <li>Enter the Counter Number* (Your Counter No: 1)</li>
                                            <li>Now enter your bKash Mobile Menu PIN to confirm</li>
                                            <li>Now tell us your bKash number to ensure your payment </li>

                                        </ul>

                                        <div class="form-group">
                                          <input type="text" class="form-control" ng-model="bkash_number" placeholder="Enter The Bkash No">
                                        </div>

                                        <img src="{{URL::to('/')}}/storage/{{$shop->bkash_instruction_image}}" alt="bKash instuction iamge" />

                                        <p>Please send the calculated money to this <b>({{$shop->bkash_merchant}})</b> number which is a Bkash merchant account. And send the bkash number to us.</p>
                                        <br />
                                        <br />
                                        <button type="button"  ng-click="changeOption('confirm')" ng-disabled="validPhoneNumber(bkash_number)" class="btn-upper btn btn-primary checkout-page-button">Next</button>

                                    </div>
                          </div>

                           <div id="rocket" class="tab-pane">
                            <h3>Rocket Payment Information</h3>
                            <div class="panel-body">
                                        <ul type="square">
                                            <li>Go to your Rocket Mobile Menu by dialing <b> *322#</b></li>
                                            <li>Choose “Payment” <b>(Option #1)</b></li>
                                            <li>Choose “Merchant Pay” <b>(Option #2)</b></li>
                                            <li>Enter the Merchant Rocket <b>({{$shop->rocket_merchant}})</b></li>
                                            <li>Enter a reference* against your payment <b>(Your Reference No: 33)</b></li>
                                            <li>Enter the amount Total <b>(Tk. @{{getTotal() + delivery_charge - offer.amount | currency : '৳'}} Enter Ammount)</b></li>
                                            <li>Now enter your Rocket Mobile Menu PIN to confirm</li>
                                            <li>Now tell us your Rocket number to ensure your payment </li>

                                        </ul>

                                        <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Enter The Rocket No"  ng-model="rocket_number" >
                                        </div>

                                        <img src="{{URL::to('/')}}/storage/{{$shop->rocket_instruction_image}}" alt="Rocket instruction image" />

                                        <p>Please send the calculated money to this <b>({{$shop->rocket_merchant}})</b> number which is a Rocket merchant account. And send the bkash number to us.</p>
                                        <br />
                                        <br />
                                        <button type="button"  ng-click="changeOption('confirm')"  ng-disabled="validPhoneNumber(rocket_number)" class="btn-upper btn btn-primary checkout-page-button">Next</button>
                                    </div>
                          </div>


                        </div>

                    </div>

                    </div>
                        <!-- /.checkout-steps -->
                    </div>


                    <div class="col-md-4 col-sm-12 pull-right">
                       <div class="col-md-12 col-sm-12 cart-shopping-total pull-right">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="cart-sub-total">
                                                <span class="amount-name">Subtotal</span><span>@{{getTotal()  | currency : '৳'}}</span>
                                                <hr/>
                                            </div>


                                            <div class="cart-sub-total">
                                                <span  class="amount-name">Delivery Charge <br/>(<span class="small">@{{delivery_area}}</span>) </span> <span>@{{delivery_charge | currency : '৳'}}</span>
                                                  <hr/>
                                            </div>

                                            <div class="cart-sub-total border-green" ng-if="offer.status == 'success'">
                                                 <span  class="amount-name">Discount</span> <span>@{{offer.amount | currency : '৳'}}</span>
                                                  <hr/>
                                            </div>
                                            <div class="cart-grand-total">
                                                <span  class="amount-name"> Grand Total</span><span>@{{getTotal() + delivery_charge - offer.amount | currency : '৳'}}</span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- /thead -->
                                <!-- <tbody>
                                    <tr>
                                        <td>
                                            <div class="cart-checkout-btn pull-right">
                                               <button type="submit" class="btn btn-primary checkout-btn">CONFIRM ORDER</button>
                                           </div>
                                        </td>
                                    </tr>
                                </tbody> -->
                                <!-- /tbody -->
                            </table>
                            <!-- /table -->
                        </div>


                    <div class="col-md-12 col-sm-12 estimate-ship-tax  pull-right">
                        <table class="table">
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
                            <!-- /tbody -->
                        </table>
                        <!-- /table -->
                    </div>


                    <!-- /.cart-shopping-total -->

       <!--              <div class="col-xs-12 col-sm-3 col-md-3 sidebar">

                        <div class="checkout-progress-sidebar ">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                                    </div>
                                    <div class="">
                                        <ul class="nav nav-checkout-progress list-unstyled">
                                            <li class="checkout-option" ng-class="{checkoutActive: checkout_option == 'shipping'}"><a href="#" ng-click="changeOption('shipping')">Delivery Address</a></li>

                                            <li  class="checkout-option"  ng-class="{checkoutActive: checkout_option == 'payment-method'}"><a href="#"  ng-click="changeOption('payment-method')">Payment Method</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.checkout-box -->
            </div>
        </div>
    </div>
@endsection
