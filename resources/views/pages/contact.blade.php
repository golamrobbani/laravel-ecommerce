@extends("layout.app")

@section("contentheader_title", 'Contact Us')
@section("contentheader_description", 'Contact Us')

@section("main-content")

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li class='active'>Contact Us</li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>

    <div class="body-content">
        <div class="container">


        <div class="body-content">
        <div class="container">
            <div class="contact-page">
                <div class="row">

                    <div class="col-lg-12">
                        @if($errors->any())
                            <h2 class="alert alert-primary" role="alert">{{$errors->first()}}</h2>
                        @endif
                    </div>
                    <div class="col-md-12 contact-map outer-bottom-vs">
                        <iframe src="{{$shop->google_map}}" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-8 contact-form">
                        <div class="col-md-12 contact-title">
                            <h4>Contact Form</h4>
                        </div>


                        <form class="register-form" role="form" method="post" action="/submit-contact">
                            {{ csrf_field() }}
                        <div class="col-md-4 ">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
                                    <input type="text" name="msg_name" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="Type your Name">
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                    <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Type your Email">
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
                                    <input type="text" name="msg_title" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="Title">
                                </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
                                    <textarea name="comments" class="form-control unicase-form-control"  id="exampleInputComments" placeholder="Type Here"></textarea>
                                </div>
                        </div>
                        <div class="col-md-12 outer-bottom-small m-t-20">
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Send Message</button>
                        </div>
                        </form>
                    </div>
                    <div class="col-md-4 contact-info">
                        <div class="contact-title">
                            <h4>Information</h4>
                        </div>
                        <div class="clearfix address">
                            <span class="contact-i"><i class="fa fa-map-marker"></i></span>
                            <span class="contact-span"><p>{{$shop->shop_address}}</p></span>
                        </div>
                        <div class="clearfix phone-no">
                            <span class="contact-i"><i class="fa fa-phone"></i></span>
                            <span class="contact-span">{{$shop->shop_phone}}</span>
                        </div>
                        <div class="clearfix email">
                            <span class="contact-i"><i class="fa fa-envelope"></i></span>
                            <span class="contact-span"><a href="#">{{$shop->shop_email}}</a></span>
                        </div>
                    </div>
                </div>
                <!-- /.contact-page -->
            </div>
            <!-- /.row -->
        </div>
        </div>
        </div>
    </div>

@endsection
