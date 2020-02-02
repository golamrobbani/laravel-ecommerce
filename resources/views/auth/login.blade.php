@extends("layout.app")

@section("contentheader_title", "Login")
@section("contentheader_description", "Login")

@section("main-content")

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li class='active'>Login</li>
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
                    <!-- Sign-in -->
                    <div class="col-md-6 col-sm-6 sign-in">
                        <h4 class="">Sign in</h4>
                        <p class="">Hello, Welcome to your account.</p>
                        <!-- <div class="social-sign-in outer-top-xs">
                            <a href="#" class="facebook-sign-in"><i class="fab fa-facebook"></i> Sign In with Facebook</a>
                            <a href="#" class="twitter-sign-in"><i class="fab fa-twitter"></i> Sign In with Twitter</a>
                        </div> -->
                        <form class="register-form outer-top-xs" role="form" action="{{ route('login') }}" method="POST">

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

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password"  class="info-title" >Password</label>
                            <input type="password" class="form-control unicase-form-control text-input" name="password" value="{{ old('password') }}"  id="password">
                        </div>



                        <div class="radio outer-xs">
                                <label>
                                    <input type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }} id="remember"> Remember me!
                                </label>
                                <a  href="{{ route('password.request') }}" class="forgot-password pull-right">Forgot your Password?</a>
                            </div>

                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>


                        </form>
                    </div>
                    <!-- Sign-in -->

                    <!-- create a new account -->
                    <div class="col-md-6 col-sm-6 create-new-account">
                        <h4 class="checkout-subtitle">Create a new account</h4>
                        <p class="text title-tag-line">Create your new account.</p>
                        <form class="register-form outer-top-xs" role="form"  method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email"  class="info-title" >E-Mail Address <span>*</span></label>

                            <input type="email" class="form-control unicase-form-control text-input" name="email" value="{{ old('email') }}"  id="exampleInputEmail1">

                              @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name"  class="info-title" >Name <span>*</span></label>

                            <input type="text" class="form-control unicase-form-control text-input" name="name" value="{{ old('name') }}"  id="name">

                              @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone"  class="info-title" >Phone Number <span>*</span></label>

                            <input type="text" class="form-control unicase-form-control text-input" name="phone" value="{{ old('phone') }}"  id="phone">

                              @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
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

                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
                        </form>

                    </div>
                    <!-- create a new account -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.sigin-in-->
        </div>
    </div>

@endsection

<!-- @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
