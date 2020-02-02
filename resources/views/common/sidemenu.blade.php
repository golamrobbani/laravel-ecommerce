  <!-- ================================== TOP NAVIGATION ================================== -->
  <div class="side-menu animate-dropdown outer-bottom-xs">
                        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
                        <nav class="yamm megamenu-horizontal">
                            <ul class="nav">

                            @foreach ($menus['side_menus'] as $menu)
                                <li class="dropdown menu-item" > <a href="{{URL::to('/')}}/category/{{$menu->slug}}"  data-toggle="dropdown" class="dropdown-toggle" ><i class="icon fa fa-{{$menu->icon_name}}" aria-hidden="true"></i>{{$menu->name}}</a>
                                @if(count($menu->submenus) > 0)
                                    @php
                                        $name = 'category';
                                        if($menu->display_item == 'yes'){
                                            $name = 'product';
                                        }
                                    @endphp
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="yamm-content">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-8">
                                                    <ul class="links list-unstyled">

                                                       @foreach ($menu['submenus'] as $single)
                                                                     <li><a href="{{URL::to('/')}}/{{$name}}/{{$single->slug}}">{{$single->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>


                                                <!-- /.col -->
                                                <div class="col-sm-12 col-md-4">
                                                    <div class="hot_product">
														<a href="#"><img alt="{{$single->name}}" src="{{URL::to('/')}}/storage/{{$menu->category_image}}"  /></a>
													</div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </li>
                                        <!-- /.yamm-content -->
                                    </ul>
                                    @endif
                                    <!-- /.dropdown-menu -->
                                </li>
                                <!-- /.menu-item -->
                            @endforeach

                            </ul>
                            <!-- /.nav -->
                        </nav>
                        <!-- /.megamenu-horizontal -->
                    </div>
                    <!-- /.side-menu -->
                    <!-- ================================== TOP NAVIGATION : END ================================== -->
