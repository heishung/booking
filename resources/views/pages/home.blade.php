@extends('frontend.index')
@section('content')
    <div class="bpt-content container">
        <div class="columns home-top-services">
            @foreach($Locations as $location)
            <div class="column">
                <div class="product-contents">
                    <!-- Cabins & Suites 334px-271px-->
                    <a href="{{route('location.detail',['slug'=>$location->slug])}}">
                        <img class="img-product-content" alt="" src="{{route('img.view',["p"=>$location->image,'q'=>100])}}" width="100%">
                        <div class="product-title has-text-centered">
                            <span class="text">{{$location->name}}</span>
                        </div></a>
                </div>
            </div>
            @endforeach

        </div>
        <div class="box-pagination">{{ $Locations->links() }}</div>
        <div class=" home-top-services has-text-centered">
            <div class="has-text-centered margin-bottom-20">
                <h1>Orchid Cruise - HA LONG BAY</h1>
                <p class="center-block line-grey">&nbsp;</p>
            </div><br>
            <div>
                <span class="column contents-text">Believing that “5-star” has various shapes, Orchid Cruises has strived to perfect our luxury line for fresh experiences in Halong Bay, with an upgraded level of premium cruising services.</span>
            </div>
            <div class="col-sm-6 col-sm-push-3" style="margin-top: 15px;">
                <span class="contents-text">Unique route, a sailing pioneer to discover Halong Bay - Bai Tu Long - Lan Ha Bay. Only 1.5 hour from Hanoi centre to Orchid Cruise instead of 4 hours as other cruises. Elegant Orchid Cruise Concept with luxury facilities.</span>
            </div>
        </div>
        <div class="columns btn-readmore column">
            <button class=" button is-info has-text-centered" id="read_more_button" type="submit">READ MORE</button>
        </div>
    </div><!--end-bpt-content-->
    <div class="columns has-text-centered is-fullhd home-activities">
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <div class="content act-col-left">
                        <div class="box-ct-left">
                            <h1 class="title text-uppercase">Activities on board</h1>
                            <div class="imgs"><img class="img-res" src="{{ url('')}}/image/activities-on-board.png"></div>
                            <div class="contents">
                                <p style="margin: 0 0 10px;">it will not be a perfect trip in Halong without Orchid Cruise. Visit Halong Bay, there are many cruises for you to choose and Orchid Cruise is an out-standing choice. Book our perfect Orchid Cruise Halong to explore Halong Bay with many interesting activities and top attractions nearby.</p>
                            </div>
                            <div class="actions">
                                <div class="columns">
                                    <div class="col-md-3">
                                        <a class="button is-warning is-active has-text-centered" href="#" id="view_detail_button">VIEW DETAIL <img alt="#" src="{{ url('')}}/image/chevron-button-right-icon.png" style="padding-bottom: 3px;"></a>
                                    </div>
                                    <div class="col-md-4" style="float: right; display: none;">
                                        <div class=" owl-theme">
                                            <div class="owl-controls">
                                                <div class="owl-nav" id="customNav">
                                                    <div class="owl-dots" id="customDots"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right-vd">
                    <div class="imgs">
                        <iframe allowfullscreen frameborder="0" height="427" src="https://www.youtube.com/embed/isUWkgmdXXM" width="673"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container home-promotion margin-top-40">
        <div class="has-text-centered margin-bottom-20">
            <h2>Promotion</h2>
            <p class="center-block line-grey">&nbsp;</p>
        </div>
        <div class="columns">
            @foreach($post as $posts)
            <div class="column margin-bottom-20">
                <div class="promotion-content">
                    <div style="position: relative;">
                        <a href="{{route('post.detail',['id'=>$posts->id])}}"><img style="width: 100%" src="{{route('img.view',['p'=>$posts->image,'q'=>100])}}{{--{{route('img.view',['p'=>$posts->image,'q'=>100])}}--}}" alt=""></a>
                        <div class="discount hide">
                            <p class="disc-text text-center">Discount 15%</p>
                        </div>
                    </div>
                    <div class="promo-content">
                        <div class="title">
                            {!! $posts->title!!}
                        </div>
                        <div class="content">
                            <p>{!! str_limit($posts->content, $limit = 200, $end = '...') !!}</p>
                        </div>
                        <div class="padding-top-10 padding-bottom-10 text-right">
                            <a class="button is-warning is-active has-text-centered" href="/post/{{$posts->id}}" style="padding-top: 11px;">VIEW DETAIL <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="container">
        <div class="home-tripadvisor-review">
            <h2 class="has-text-centered">What our customers say<br>
                <span>REVIEWS FROM OUR CLIENTS ON TRIPADVISOR</span></h2>
            <div class="columns margin-top-40">
                <div class="column">
                    <div class="review-frame">
                        <div class="review-content has-text-centered">
                            <i class="title">“Unforgettable Experience”</i>
                            <div style="margin: 10px 0;">
                                <img alt="" src="{{ url('')}}/image/tripad-icon-new.png" style="margin-right: 5px; margin-top: -5px;"><span>Deni C</span>
                            </div>
                            <div class="content">
                                Orchid Cruise offer complete 5 star luxury. The experience from start to finish was perfect, the scenery is some of the most breathtaking scenery I have ever seen. The service on board the ship was great, with plenty of food (buffet lunch and breakfast, set menu for dinner) that all tasted great. The cocktails during happy hour were made very well. The rooms and amenities were very luxurious and the view is second to none...
                            </div><a href="#" target="_blank"><img alt="#" class="btn-review-detail" src="{{ url('')}}/image/btn-tripad-view-detail.png"></a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="review-frame">
                        <div class="review-content has-text-centered">
                            <i class="title">“Unforgettable Experience”</i>
                            <div style="margin: 10px 0;">
                                <img alt="" src="{{ url('')}}/image/tripad-icon-new.png" style="margin-right: 5px; margin-top: -5px;"><span>Deni C</span>
                            </div>
                            <div class="content">
                                Orchid Cruise offer complete 5 star luxury. The experience from start to finish was perfect, the scenery is some of the most breathtaking scenery I have ever seen. The service on board the ship was great, with plenty of food (buffet lunch and breakfast, set menu for dinner) that all tasted great. The cocktails during happy hour were made very well. The rooms and amenities were very luxurious and the view is second to none...
                            </div><a href="#" target="_blank"><img alt="#" class="btn-review-detail" src="{{ url('')}}/image/btn-tripad-view-detail.png"></a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="review-frame">
                        <div class="review-content has-text-centered">
                            <i class="title">“Unforgettable Experience”</i>
                            <div style="margin: 10px 0;">
                                <img alt="" src="{{ url('')}}/image/tripad-icon-new.png" style="margin-right: 5px; margin-top: -5px;"><span>Deni C</span>
                            </div>
                            <div class="content">
                                Orchid Cruise offer complete 5 star luxury. The experience from start to finish was perfect, the scenery is some of the most breathtaking scenery I have ever seen. The service on board the ship was great, with plenty of food (buffet lunch and breakfast, set menu for dinner) that all tasted great. The cocktails during happy hour were made very well. The rooms and amenities were very luxurious and the view is second to none...
                            </div><a href="#" target="_blank"><img alt="#" class="btn-review-detail" src="{{ url('')}}/image/btn-tripad-view-detail.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection