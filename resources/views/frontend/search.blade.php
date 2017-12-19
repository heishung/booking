@extends('frontend.index')

@section('content')
    <div>
        <div class="column has-text-centered text-uppercase bg-grey">
            <a  href="{{ URL::previous() }}"><H1>Booking guide & Term</H1></a>
            <p class="center-block line-grey margin-top-20 margin-bottom-20"></p>
            <div class="container has-text-centered">
                <p>Thank you for your interest in us  If you need to send us an inquiry, please use our Inquiry Form and Manager will respond to you within 24 hours. Or you can wait , please call us : {{\App\helpers\Lap::getArrayVal($options,'hotline-off-2')}}. </p>
               {{-- <p>{!! $locations->content !!}</p>--}}
            </div>
        </div>
        <div class="container">
            @foreach($hotels as $hotel)
                <div class="clearfix bg-grey margin-top-40 margin-bottom-40">
                    {{--   {{dd($hotel)}}--}}
                    <div class="columns">
                        <div class="column is-6"><img style="width: 100%;max-height: 355px;" alt="img {{$hotel->name}}"
                                                      src="{{route('img.view',["p"=>$hotel->image[0],'q'=>100])}}"></div>
                        <div class="column">
                            <div class="cabin-contents">
                                <div class="ctitle margin-bottom-15 name-hotel">
                                    {{$hotel->name}}
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">Address</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns">{{$hotel->info['address']}}</p>
                                    </div>
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p>circulate</p>
                                    </div>
                                    <div class="column">
                                        <p>{{$hotel->overview['circulate']}}</p>
                                    </div>
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p>Necessaryinformation</p>
                                    </div>
                                    <div class="column">
                                        <p>{{$hotel->overview['Necessaryinformation']}}</p>
                                    </div>
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">Gotogether</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns">{{$hotel->overview['Gotogether']}}</p>
                                    </div>
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">Price form</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns">{{$hotel->price_from}}</p>
                                    </div>
                                </div>
                                <div class="actions " style="margin-top: 30px;margin-bottom: 30px;">
                                    <a class="btn btn-orange" href="{{route('room.list',['id'=>$hotel->id])}}"
                                       style="font-size: 18px; padding: 7px 30px;">VIEW DETAIL<img alt="#"
                                                                                                   src="{{ url('')}}/image/chevron-button-right-icon.png"
                                                                                                   style="padding-bottom: 3px;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{--<ul class="pagination">
            {{ $locations->appends(['hotels' => '3'])->links() }}
        </ul>--}}
        <div class="body-margin-bottom is-clearfix">
            <div class="bg-grey box-book">
                <div class="has-text-centered padding-top-30 padding-bottom-30">
                    <p style="margin:-5px 0; font-size: 20px; color: #d78e15;">TRAVELING IS OUR PASSION</p>
                    <p style="margin-bottom:20px; font-size: 20px; color: #d78e15;">LET US DESIGN YOUR UNFORGETTABLE TRIP!</p>
                    <p style="margin:-5px 0; font-size: 15px; color: #333333;">
                        Sometimes we live experiences that mark us for the rest of our life. If you are looking for living one of these experiences, let us help you. Our</p>
                    <p style="margin-bottom:20px; font-size: 15px; color: #333333;">
                        passionate personnel will assist you in order to design a tailored trip that you will remember forever.</p>
                    <a class="btn btn-orange" href="{{route('contactindex')}}" style="font-size: 18px; padding: 7px 30px;">Enquire Now</a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .name-hotel{text-align: center;
            font-size: 40px;}
    </style>
@endsection