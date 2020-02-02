@extends("layout.app")

@section("contentheader_title", $page->title)
@section("contentheader_description", $page->title)

@section("main-content")

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li class='active'>Page</li>
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
            <div class="row">
                <div class="blog-page">
                        <div class="blog-post  wow fadeInUp">
                            <a href="{{URL::to('/')}}/page/{{$page->slug}}"><img class="img-responsive" src="{{URL::to('/')}}/storage/{{$page->image}}" alt="{{$page->title}}"></a>
                            <h1><a href="{{URL::to('/')}}/page/{{$page->slug}}">{{$page->title}}</a></h1>

                            <p>{!! $page->body !!}</p>
                        </div>


                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
        </div>
    </div>

@endsection
