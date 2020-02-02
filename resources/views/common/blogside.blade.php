
   <div class="search-area outer-bottom-small">
                                <form>
                                    <div class="control-group">
                                        <input placeholder="Type to search" class="search-field">
                                        <a href="#" class="search-button"></a>
                                    </div>
                                </form>
                            </div>

                            <div class="home-banner outer-top-n outer-bottom-xs">
                                @foreach ($banners as $banner)
                                    <div class="home-banner outer-top-n outer-bottom-xs">
                                    <a href="{{$banner->link}}"> <img style="width: 100%;" src="{{URL::to('/')}}/storage/{{$banner->image}}" alt="Image"> </a>
                                    </div>
                                @endforeach
                            </div>
                            <!-- ==============================================CATEGORY============================================== -->
                            <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                                <h3 class="section-title">Category</h3>
                                <div class="sidebar-widget-body m-t-10">
                                    <div class="accordion">


                                    @foreach ($menus['main_menus'] as $menu)
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a href="#{{$menu->id}}" data-toggle="collapse" class="accordion-toggle collapsed"> {{$menu->name}} </a>
                                            </div>
                                            <!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="{{$menu->id}}" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        @foreach ($menu['submenus'] as $single)
                                                                <li><a href="{{URL::to('/')}}/category/{{$single->slug}}">{{$single->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <!-- /.accordion-inner -->
                                            </div>
                                            <!-- /.accordion-body -->
                                        </div>
                                        <!-- /.accordion-group -->

                                    @endforeach



                                    </div>
                                    <!-- /.accordion -->
                                </div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <!-- /.sidebar-widget -->



 <!-- ============================================== CATEGORY : END ============================================== -->
 <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                                <h3 class="section-title">Tab Widget</h3>

<ul class="nav nav-tabs">
                                    <li class="active"><a href="#popular" data-toggle="tab">popular post</a></li>
                                    <li><a href="#recent" data-toggle="tab">Recent post</a></li>
                                </ul>
                                <div class="tab-content" style="padding-left:0">
                                    <div class="tab-pane active m-t-20" id="popular">

                                    @foreach($populars as $blog)
                                        <div class="blog-post  nner-bottom-30 ">
                                            <a href="{{URL::to('/')}}/blog/{{$blog->slug}}"><img class="img-responsive" src="{{URL::to('/')}}/storage/{{$blog->image}}" alt="{{$blog->title}}"></a>
                                            <h1><a href="{{URL::to('/')}}/blog/{{$blog->slug}}">{{$blog->title}}</a></h1>
                                            <!-- <span class="author">farhad</span>
                                            <span class="review">6 Comments</span> -->
                                            <span class="date-time">{{$blog->created_at}}</span>
                                            <p>{!!$blog->excerpt!!}</p>
                                        </div>
                                    @endforeach


                                    </div>

                                    <div class="tab-pane m-t-20" id="recent">
                                        @foreach($latests as $blog)
                                            <div class="blog-post  nner-bottom-30 ">
                                                <a href="{{URL::to('/')}}/blog/{{$blog->slug}}"><img class="img-responsive" src="{{URL::to('/')}}/storage/{{$blog->image}}" alt="{{$blog->title}}"></a>
                                                <h1><a href="{{URL::to('/')}}/blog/{{$blog->slug}}">{{$blog->title}}</a></h1>
                                                <!-- <span class="author">farhad</span>
                                                <span class="review">6 Comments</span> -->
                                                <span class="date-time">{{$blog->created_at}}</span>
                                                <p>{!!$blog->excerpt!!}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>


                            </div>
