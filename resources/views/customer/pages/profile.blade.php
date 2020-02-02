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
                                            <h4 class="page-title m-0">Profile Update</h4></div>

                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end page-title-box -->
                            </div>
                        </div>


                        <!-- end row -->
                        <div class="row">
                           <div class="col-lg-12">
                             @if($errors->any())
                            <h4 class="bg-warning p10 btn">{{$errors->first()}}</h4>
                            @endif
                           </div>
                                <!-- end col -->
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Update your profile informatin</h4>
                                            <form  action="/myaccount/update-profile" method="POST">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label>Your Name</label>
                                                    <div>
                                                        <input type="text" class="form-control" required    placeholder="your name" name="name" value="{{ $user->name }}">
                                                    </div>
                                                </div>

<!--
                                                <div class="form-group">
                                                    <label>Your Email</label>
                                                    <div>
                                                        <input type="text" class="form-control" required    placeholder="your email" value="{{ $user->email }}" name="email">
                                                    </div>
                                                </div>
 -->

                                                <div class="form-group">
                                                    <label>Your Phone</label>
                                                    <div>
                                                        <input type="text" class="form-control" required    placeholder="your phone" name="phone" value="{{$user->phone}}">
                                                    </div>
                                                </div>



                                                <div class="form-group m-b-0">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <!-- end col -->
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Change Password</h4>
                                            <form  action="/myaccount/change-password" method="POST">
                                                {{ csrf_field() }}

                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <div>
                                                        <input type="text" class="form-control" required    placeholder="old password" name="old_password">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <div>
                                                        <input type="text" class="form-control" required    placeholder="new password" name="new_password">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label>Retype New Password</label>
                                                    <div>
                                                        <input type="text" class="form-control" required    placeholder="retype new password" name="password_confirmation">
                                                    </div>
                                                </div>



                                                <div class="form-group m-b-0">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Change Password</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container fluid -->
                </div>
                <!-- Page content Wrapper -->
            </div>
            <!-- content -->

 @endsection
