<div class="head container">
    <div class="columns h-lg-ct">
        <div class="column is-one-quarter has-text-centered">
            <a class="logo" href="/" title="logo"><img alt="" src="{{route('img.view',['p'=>\App\helpers\Lap::getArrayVal($options,'logo')/*,'w'=>100*/,'q'=>0])}}"></a>
        </div>
        <div class="column is-9">
            <div class="column has-text-right">
                <div class="h-hotline-email">
                    <p class="h-contact"><img alt="#" src="{{ url('')}}/image/phone-icon.png"> Hotline:<a href="tel:+84%20936-638-069" style="color: #fff;">{{\App\helpers\Lap::getArrayVal($options,'name-office-1')}} – {{\App\helpers\Lap::getArrayVal($options,'name-hotline-head')}}</a> <img alt="#" src="{{ url('')}}/image/email-icon.png">
                        <a href="mailto:{{\App\helpers\Lap::getArrayVal($options,'emailus-head')}}">{{\App\helpers\Lap::getArrayVal($options,'emailus-head')}}</a>
                        <a class="button is-primary h-reservation" href="{{route('contactindex')}}" id="reservation_button">RESERVATION</a></p>
                </div>
            </div>
            <div class="columns">
                <div class="menu-mobile">
                    <!-- Pushy Menu -->
                    <nav class=" pushy pushy-left" data-focus="#first-link">
                        <div class="pushy-content ">
                            <ul class="menu-list">
                                <li class="pushy-link">
                                    <a href="/">Home</a>
                                </li>

                                <li class="pushy-link">
                                    <a href="{{route('post.detail',['id'=>$itineraries->id])}}">{{$itineraries->title}}</a>
                                </li>
                                <li class="pushy-link">
                                    <a href="{{route('services.list')}}">Services &amp; Activities</a>
                                </li>
                                <li class="pushy-link">
                                    <a href="{{route('promotion.list')}}">Promotion</a>
                                </li>
                                {{--<li class="pushy-link">
                                    <a href="#">Photos &amp; Videos</a>
                                </li>--}}
                                <li class="pushy-link">
                                    <a href="{{route('contactindex')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Site Overlay -->
                    <div class="site-overlay"></div><!-- Your Content -->
                    <div id="container">
                        <!-- Menu Button -->
                        <button class="menu-btn navbar-burger burger"><span></span><span></span><span></span></button> <!-- end-menuresponsive -->
                    </div>
                </div>
                <div class="menu-des tabs">
                    <nav>
                        <ul class="h-menu topnav " id="myTopnav">
                            <li class="pushy-link">
                                <a href="/">Home</a>
                            </li>

                            <li class="pushy-link">
                                <a href="{{route('post.detail',['id'=>$itineraries->id])}}">{{$itineraries->title}}</a>
                            </li>
                            <li class="pushy-link">
                                <a href="{{route('services.list')}}">Services &amp; Activities</a>
                            </li>
                            <li class="pushy-link">
                                <a href="{{route('promotion.list')}}">Promotion</a>
                            </li>
                            <li>
                                <a href="{{route('contactindex')}}">@lang('frontend.header.contact_us')</a>
                            </li>
                            <li class="pushy-link">
                                <a href="{{route('post.detail',['id'=>$aboutus->id])}}">{{$aboutus->title}}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
