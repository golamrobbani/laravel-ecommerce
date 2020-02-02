@extends("customer.layout.app")

@section("contentheader_title", "Admin Dashboard")
@section("contentheader_description", "Admin Dashboard")

@section("main-content")

                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <h4 class="page-title m-0">Order History</h4></div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end page-title-box -->
                            </div>
                        </div>

                        <!-- end row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-stripped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Order Number</th>
                                                        <th scope="col">Order Date</th>
                                                        <th scope="col">Order Status</th>
                                                        <th scope="col">Total Price</th>
                                                        <th scope="col">Total Discount</th>
                                                        <th scope="col">Delivery Charge</th>
                                                        <th scope="col">Total Payable</th>
                                                        <th scope="col">Total Paid</th>
                                                        <th scope="col">Payment Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($orders as $order)
                                                    <tr>
                                                        <th scope="row">#{{$order->order_number}}</th>
                                                        <td>{{$order->order_date}}</td>
                                                        <td>

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
                                                        <td>{{ number_format($order->order_price_total, 2)}} tk</td>
                                                        <td>{{ number_format($order->order_discount, 2 )}} tk</td>
                                                        <td>{{ number_format($order->order_total_payable, 2 )}} tk</td>
                                                        <td>{{ number_format($order->order_delivery_charge, 2 )}} tk</td>
                                                        <td>{{ number_format($order->amount, 2 )}} tk</td>
                                                        <td>
                                                            @if($order->order_payment_status == 1)
                                                                 <span class="badge badge-primary f17">Paid</span>
                                                            @else
                                                                <span class="badge badge-danger f17">Not Paid</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="/myaccount/order/{{$order->id}}" class="btn btn-primary " aria-haspopup="true" aria-expanded="false">Details</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                {{ $orders->links() }}
                            </div>

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container fluid -->
                </div>
                <!-- Page content Wrapper -->
            </div>
            <!-- content -->

 @endsection
