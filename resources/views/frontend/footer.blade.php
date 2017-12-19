<div class="contact-footer">
    <div class="container has-text-centered">
        <div class="padding-left-0">

            <a class="social" href="/">Home</a>

            <a class="social" href="{{route('post.detail',['id'=>$itineraries->id])}}">{{$itineraries->title}}</a>

            <a class="social" href="{{route('services.list')}}">Services &amp; Activities</a>

            <a class="social" href="{{route('promotion.list')}}">Promotion</a>


            <a class="social" href="{{route('contactindex')}}">@lang('frontend.header.contact_us')</a>
        </div>
    </div>
</div>
<div class=" container address-footer" style="border-top: solid white;">
    <div class="columns">
        <div class="column address">
            <p class="office text-uppercase">{{\App\helpers\Lap::getArrayVal($options,'name-office-1')}}</p>
            <p class="margin-top-15">{{\App\helpers\Lap::getArrayVal($options,'address-off-1')}}</p>
            <p class="margin-top-15">Tel: {{\App\helpers\Lap::getArrayVal($options,'tel-off-1')}}</p>
            <p class="margin-top-15">Fax: {{\App\helpers\Lap::getArrayVal($options,'fax-off-1')}}</p>
            <p class="margin-top-15">Web: <a class="link" href="{{\App\helpers\Lap::getArrayVal($options,'web-off-1')}}">{{\App\helpers\Lap::getArrayVal($options,'web-off-1')}}</a></p>
            <p class="margin-top-15">Email: <a class="link" href="{{\App\helpers\Lap::getArrayVal($options,'email-off-1')}}">{{\App\helpers\Lap::getArrayVal($options,'email-off-1')}}</a></p>
        </div>
        <div class="column address">
            <p class="office text-uppercase">{{\App\helpers\Lap::getArrayVal($options,'name-off-2')}}</p>
            <p class="margin-top-15"># {{\App\helpers\Lap::getArrayVal($options,'address-off-2')}}</p>
            <p class="margin-top-15">Tel: {{\App\helpers\Lap::getArrayVal($options,'tel-off-2')}}</p>
            <p class="margin-top-15">Fax: {{\App\helpers\Lap::getArrayVal($options,'fax-off-2')}}</p>
            <p class="margin-top-15">HOT LINE: {{\App\helpers\Lap::getArrayVal($options,'hotline-off-2')}} – {{\App\helpers\Lap::getArrayVal($options,'hotline-off-1')}}</p>
            <p class="margin-top-15">Email: <a class="link" href="mailto:{{\App\helpers\Lap::getArrayVal($options,'email-off-1')}}">{{\App\helpers\Lap::getArrayVal($options,'email-off-1')}}</a></p>
        </div>
        <div class="column address">
            <p class="office text-uppercase">{{\App\helpers\Lap::getArrayVal($options,'name-box-3')}}</p>
          {{--  <p class="margin-top-15">International Tour Operator License No</p>--}}
            <p class="margin-top-15">{{\App\helpers\Lap::getArrayVal($options,'content-box-3')}}</p>
            {{--<p class="text-uppercase" style="margin-top: 35px;">Verified and Protected by<img alt="#" class="margin-left-15" src="public/ssl-geotrust.png"></p>--}}
        </div>
    </div>
</div>