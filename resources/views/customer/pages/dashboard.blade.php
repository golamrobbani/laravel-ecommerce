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
                                            <h4 class="page-title m-0">Dashboard</h4></div>

                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end page-title-box -->
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary mini-stat text-white">
                                    <div class="p-3 mini-stat-desc">
                                        <div class="clearfix">
                                            <h6 class="text-uppercase mt-0 float-left text-white-50">Total Orders</h6>
                                            <h4 class="mb-3 mt-0 float-right">{{$total_order}}</h4></div>
                                    </div>
                                    <div class="p-3">
                                        <div class="float-right"><a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a></div>
                                        <p class="font-14 m-0">Details</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info mini-stat text-white">
                                    <div class="p-3 mini-stat-desc">
                                        <div class="clearfix">
                                            <h6 class="text-uppercase mt-0 float-left text-white-50">Pending Orders</h6>
                                            <h4 class="mb-3 mt-0 float-right">{{$total_pending}}</h4></div>

                                    </div>
                                    <div class="p-3">
                                        <div class="float-right"><a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a></div>
                                        <p class="font-14 m-0">Details</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pink mini-stat text-white">
                                    <div class="p-3 mini-stat-desc">
                                        <div class="clearfix">
                                            <h6 class="text-uppercase mt-0 float-left text-white-50">Total Spent</h6>
                                            <h4 class="mb-3 mt-0 float-right">{{ number_format($total_spent, 2 )}} tk</h4></div>

                                    </div>
                                    <div class="p-3">
                                        <div class="float-right"><a href="#" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a></div>
                                        <p class="font-14 m-0">Details</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success mini-stat text-white">
                                    <div class="p-3 mini-stat-desc">
                                        <div class="clearfix">
                                            <h6 class="text-uppercase mt-0 float-left text-white-50">Total Discount</h6>
                                            <h4 class="mb-3 mt-0 float-right">{{ number_format($total_discount, 2 )}} tk</h4></div>
                                    </div>
                                    <div class="p-3">
                                        <div class="float-right"><a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a></div>
                                        <p class="font-14 m-0">Details</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- end row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Latest Trasaction</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Transaction No.</th>
                                                        <th scope="col">Order Number</th>
                                                        <th scope="col">Payment Type</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Payment Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($transactions as $transaction)
                                                    <tr>
                                                        <th scope="row">{{$transaction->transaction_no}}</th>
                                                        <td>#{{$transaction->order_number}}</td>
                                                        <td>{{$transaction->payment_type}}</td>
                                                        <td>
                                                              {{ number_format($transaction->amount, 2 )}} tk
                                                               </td>
                                                        <td>{{$transaction->created_at}}</td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
