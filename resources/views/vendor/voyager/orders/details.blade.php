@extends('voyager::master')



@section('content')
    <div class="page-content read container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered" style="padding-bottom:5px;">




                    <!-- end row -->
                    <div class="row">

                        <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Order Informatin</h4>

                                    <div class="table-responsive">
                                        <table class="table table-stripped">
                                            <tbody>
                                            <tr>
                                                <td scope="col">Order Date</td>
                                                <td scope="col">{{$order->order_date}}</td>
                                            </tr>


                                            <tr>
                                                <td scope="col">Order Number</td>
                                                <td scope="col">#{{$order->order_number}}</td>
                                            </tr>


                                            <tr>
                                                <td scope="col">Order Status</td>
                                                <td scope="col">
                                                    @if($order->order_status == 1)
                                                        <span class="badge badge-primary f17">Delivered</span>
                                                    @elseif($order->order_status == 2)
                                                        <span class="badge badge-warning f17">Pending</span>
                                                    @elseif($order->order_status == 3)
                                                        <span class="badge badge-info f17">Delivering</span>
                                                    @else
                                                        <span class="badge badge-danger f17">Cancled</span>
                                                    @endif
                                                </td>
                                            </tr>


                                            <tr>
                                                <td scope="col">Order Total Price</td>
                                                <td scope="col">{{ number_format($order->order_price_total, 2)}} tk</td>
                                            </tr>


                                            <tr>
                                                <td scope="col">Order Total Discount</td>
                                                <td scope="col">{{ number_format($order->order_discount, 2 )}} tk</td>
                                            </tr>


                                            <tr>
                                                <td scope="col">Order Delivery Charge</td>
                                                <td scope="col">{{ number_format($order->order_delivery_charge, 2 )}} tk</td>
                                            </tr>


                                            <tr>
                                                <td scope="col">Order Total Payable</td>
                                                <td scope="col">{{ number_format($order->order_total_payable, 2 )}} tk</td>
                                            </tr>



                                            <tr>
                                                <td scope="col">Order Total Paid</td>
                                                <td scope="col">{{ number_format($order->amount, 2 )}} tk</td>
                                            </tr>

                                            <tr>
                                                <td scope="col">Order Payment Type</td>
                                                <td scope="col">
                                                    {{$order->order_payment_type}}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="col">Order Payment Transaction No</td>
                                                <td scope="col">
                                                    {{$order->transaction_no}}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="col">Order Payment Status</td>
                                                <td scope="col">
                                                    @if($order->order_payment_status == 1)
                                                        <span class="badge badge-primary f17">Paid</span>
                                                    @else
                                                        <span class="badge badge-danger f17">Not Paid</span>
                                                    @endif
                                                </td>
                                            </tr>



                                            </tbody>
                                        </table>
                                    </div>

                                    <h4 class="mt-0 header-title">Order Delivery Informatin</h4>

                                    <div class="table-responsive">
                                        <table class="table table-stripped">
                                            <tbody>
                                            <tr>
                                                <td scope="col">Delivery Phone Number</td>
                                                <td scope="col">{{$order->order_delivery_phone}}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="col">Delivery Address</td>
                                                <td scope="col">{{$order->order_delivery_postcode}} {{$order->order_delivery_address}}
                                                    {{$order->order_delivery_city}}
                                                </td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>





                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Order Item Information</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Product Price</th>
                                                <th scope="col">Product Quantity</th>
                                                <th scope="col">Product Total Price</th>
                                                <th scope="col">Note</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($items as $item)
                                                <tr>
                                                    <th scope="row">{{$item->item_name}}</th>
                                                    <td>{{ number_format($item->item_price, 2 )}} tk</td>
                                                    <td>{{$item->item_qty}}</td>
                                                    <td>{{ number_format($item->item_price_total, 2 )}} tk</td>
                                                    <td>{{$item->item_note}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->






                </div>
            </div>
        </div>
    </div>
@stop


