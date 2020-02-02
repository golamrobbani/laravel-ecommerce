
 


@extends("layout.app")

@section("contentheader_title", "Reset Password")
@section("contentheader_description", "Reset Password")

@section("main-content")

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li class='active'>Reset Password</li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Reset password -->
                    <div class="col-md-6 col-sm-12 sign-in">
                        <h4 class="">Set New Password</h4>
                        
                        <form class="register-form outer-top-xs" role="form"  method="POST"  action="{{ route('password.request') }}">
 
                             {{ csrf_field() }}

                             <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email"  class="info-title" >E-Mail Address</label>

                            <input type="email" class="form-control unicase-form-control text-input" name="email" value="{{ old('email') }}"  id="exampleInputEmail1">

                              @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>


                           
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password"  class="info-title" >Password <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" name="password" value="{{ old('password') }}"  id="password">
                           
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                      
                        </div>

                                           
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password_confirmation"  class="info-title" >Confirm Password <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" name="password_confirmation"  id="password_confirmation">
                       
                            @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                       
                        </div>

                            
  
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Reset Password</button>

                         
                        </form>
                    </div>
                    <!-- Reset password -->

                   
                </div>
                <!-- /.row -->
            </div>
            <!-- /.sigin-in-->
        </div>
    </div>

@endsection

 
 