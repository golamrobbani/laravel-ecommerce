 


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
                        <h4 class="">Reset Password</h4>
                        <p class="">Password reset link sent to your email address!</p>
                    
                        <form class="register-form outer-top-xs" role="form"  method="POST" action="{{ route('password.email') }}">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                             {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email"  class="info-title" >E-Mail Address</label>

                            <input type="email" class="form-control unicase-form-control text-input" name="email" value="{{ old('email') }}"  id="exampleInputEmail1">

                              @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
  
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Send Password Reset Link</button>

                         
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

 