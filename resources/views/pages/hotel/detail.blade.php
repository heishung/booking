@extends('frontend.index')
@section('content')
    <div>
        <div class="column has-text-centered text-uppercase bg-grey">
            <a href="{{ URL::previous() }}">
                <h1>{{$hotelbox->name}}</h1>
            </a>
            <p class="center-block line-grey margin-top-20 margin-bottom-20">&nbsp;</p>
            <div class="content-detail ">
                {!! $hotelbox->info['content'] !!}
            </div>
        </div>
        <div class="container">
            @foreach($listrooms as $listroom)
                <div class="clearfix bg-grey margin-top-40 margin-bottom-40">
                    <div class="columns">
                        <div class="column is-6"><img style="width: 100%;max-height: 355px;" alt="img-{{$listroom->name}}"
                                                      src="{{route('img.view',["p"=>$listroom->image,'q'=>100])}}"></div>
                        <div class="column">
                            <div class="cabin-contents">
                                <div class="ctitle margin-bottom-15 name-hotel">
                                    {{$listroom->name}}
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">Max adults</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns">{!! $listroom->max_adults !!}</p>
                                    </div>
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">Max child</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns">{!! $listroom->max_child !!}</p>
                                    </div>
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">Price</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns">{!! $listroom->max_child !!}</p>
                                    </div>
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">Price</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns">{!! $listroom->max_child !!}</p>
                                    </div>
                                </div>
                                <div class="actions " style="margin-top: 30px;margin-bottom: 30px;">
                                    <a  class="btn btn-orange button is-primary is-large modal-button" data-target="modal-ter"
                                       style="font-size: 18px; padding: 7px 30px;">VIEW DETAIL<img alt="#"
                                                                                                   src="{{ url('')}}/image/chevron-button-right-icon.png"
                                                                                                   style="padding-bottom: 3px;"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal ">
                    <div class="modal-background"></div>
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <p class="modal-card-title has-text-centered">{{$listroom->name}}</p>
                            <button class="delete" aria-label="close"></button>
                        </header>
                        <section class="modal-card-body">
                            <h3 class="name-room has-text-centered"><img style="width: 100%;max-height: 355px;" alt="img-{{$listroom->name}}"
                                                                         src="{{route('img.view',["p"=>$listroom->image,'q'=>100])}}"></h3>
                            <div class="content columns is-clearfix">
                                <div class="column">
                                    <p class="columns">Max adults</p>
                                </div>
                                <div class="column">
                                    <p class="columns">{!! $listroom->max_adults !!}</p>
                                </div>
                            </div>
                            <div class="content columns is-clearfix">
                                <div class="column">
                                    <p class="columns">Max child</p>
                                </div>
                                <div class="column">
                                    <p class="columns">{!! $listroom->max_child !!}</p>
                                </div>
                            </div>
                            <div class="overview">
                                <h1>Overview</h1>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">Convenient</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns">{!! $listroom->overview['convenient'] !!}</p>
                                    </div>
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">Supplement</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns">{!! $listroom->overview['supplement'] !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                            <h1>Info</h1>
                            <div class="content columns is-clearfix">
                                <div class="column">
                                    <p class="columns">Amenities</p>
                                </div>
                                <div class="column">
                                    <p class="columns">{!! $listroom->info['amenities'] !!}</p>
                                </div>
                            </div>
                            <div class="content columns is-clearfix">
                                <div class="column">
                                    <p class="columns">Content</p>
                                </div>
                                <div class="column">
                                    <p class="columns">{!! $listroom->info['content'] !!}</p>
                                </div>
                            </div>
                            <div class="content columns is-clearfix">
                                <div class="column">
                                    <p class="columns">Cancellation</p>
                                </div>
                                <div class="column">
                                    <p class="columns">{!! $listroom->info['Cancellation'] !!}</p>
                                </div>
                            </div>
                            <div class="content columns is-clearfix">
                                <div class="column">
                                    <p class="columns">Cancellation</p>
                                </div>
                                <div class="column">
                                    <p class="columns">{!! $listroom->info['Cancellation'] !!}</p>
                                </div>
                            </div>
                            </div>

                            <div class="content columns is-clearfix">
                                <div class="column">
                                    <p class="columns">Price</p>
                                </div>
                                <div class="column">
                                    <p class="columns">{!! $listroom->price !!}</p>
                                </div>
                            </div>
                        </section>
                        <footer class="modal-card-foot">
                            <a href="{{route('bookingindex',['id'=>$listroom->id])}}" class="button is-success book-now">Book now</a>
                            <button class="button model-cancel">Cancel</button>
                        </footer>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="body-margin-bottom is-clearfix">
            <div class="bg-grey box-book">
                <div class="has-text-centered padding-top-30 padding-bottom-30">
                    <p style="margin:-5px 0; font-size: 20px; color: #d78e15;">TRAVELING IS OUR PASSION</p>
                    <p style="margin-bottom:20px; font-size: 20px; color: #d78e15;">LET US DESIGN YOUR UNFORGETTABLE
                        TRIP!</p>
                    <p style="margin:-5px 0; font-size: 15px; color: #333333;">
                        Sometimes we live experiences that mark us for the rest of our life. If you are looking for
                        living one of these experiences, let us help you. Our</p>
                    <p style="margin-bottom:20px; font-size: 15px; color: #333333;">
                        passionate personnel will assist you in order to design a tailored trip that you will remember
                        forever.</p>
                    <a class="btn btn-orange" href="#" style="font-size: 18px; padding: 7px 30px;">Enquire Now</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .name-hotel{text-align: center;
            font-size: 40px;}
        @media screen and (min-width: 769px) {
            .modal-card, .modal-content {
                margin: 0 auto;
                max-height: calc(110vh - 55px);
                width: 800px;
            }
        }
    </style>
@endsection
