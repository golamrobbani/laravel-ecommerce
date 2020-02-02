@extends("layout.app")

@section("contentheader_title", "Blog")
@section("contentheader_description", "Blog")

@section("main-content")

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li class='active'>Blog</li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="blog-page">
                    <div class="col-xs-12 col-sm-9 col-md-9 rht-col">
                    @foreach($blogs as $blog)
                        <div class="blog-post  wow fadeInUp">
                            <a href="{{URL::to('/')}}/blog/{{$blog->slug}}"><img class="img-responsive" src="{{URL::to('/')}}/storage/{{$blog->image}}" alt="{{$blog->title}}"></a>
                            <h1><a href="{{URL::to('/')}}/blog/{{$blog->slug}}">{{$blog->title}}</a></h1>
                            <!-- <span class="author">farhad</span>
                            <span class="review">6 Comments</span> -->
                            <span class="date-time">{{$blog->created_at}}</span>
                            <p>{!!$blog->excerpt!!}</p>
                            <a href="{{URL::to('/')}}/blog/{{$blog->slug}}" class="btn btn-upper btn-primary read-more">read more</a>
                        </div>
                    @endforeach

                        <div class="clearfix blog-pagination filters-container  wow fadeInUp" style="padding:0px; background:none; box-shadow:none; margin-top:15px; border:none">

                            <div class="text-right">
                                <div class="pagination-container">
                                {{ $blogs->links() }}
                                    <!-- /.list-inline -->
                                </div>
                                <!-- /.pagination-container -->
                            </div>
                            <!-- /.text-right -->

                        </div>
                        <!-- /.filters-container -->
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 sidebar">

                        <div class="sidebar-module-container">


                            @include('common.blogside')

                            <!-- /.sidebar-widget -->
                            <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
