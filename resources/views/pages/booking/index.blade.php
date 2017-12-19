@extends('frontend.index')

@section('content')
    <div class="column has-text-centered text-uppercase bg-grey">
        <h1>Booking {{$roombooking->name}}</h1>
        <p class="center-block line-grey margin-top-20 margin-bottom-20">&nbsp;</p>
    </div>
    <div class="container from-booking">

        @if (session('notification'))
        {{--<span class="help-block" >
                        {{session('notification')}}
                    </span>--}}
        <article class="message is-success">
            <div class="message-header">
                <p>Success</p>
                <button type="button" onclick="clickCloseMessage(this)" class="delete" aria-label="delete"></button>
            </div>
            <div class="message-body">
                {{session('notification')}}
            </div>
        </article>
        @endif
            @if ($errors->any())
                <span class="help-block" >
                                {{$errors->first('room_id')}}
                            </span>
            @endif
        {{Form::open(['method'=>'post','route'=>['bookingstore','id'=>$roombooking->id],'role'=>'form'])}}
        <div class="field is-horizontal">
            <div class="field-label is-normal">

            </div>
            <input type="hidden" name="room_id" value="{{$roombooking->id}}">

            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input" type="text" name="full_name" placeholder="Full Name">
                        <span class="icon is-small is-left">
          <i class="fa fa-user"></i>
        </span>
                        @if ($errors->has('full_name') )
                            <span class="help-block">
                                {{$errors->first('full_name')}}
                            </span>
                        @endif
                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded has-icons-left has-icons-right">
                        <input class="input is-success" name="email" type="email" placeholder="Email"
                               value="alex@smith.com">
                        <span class="icon is-small is-left">
          <i class="fa fa-envelope"></i>
        </span>
                        <span class="icon is-small is-right">
          <i class="fa fa-check"></i>
        </span>
                        @if ($errors->has('email') )
                            <span class="help-block">
                                {{$errors->first('email')}}
                            </span>
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label"></div>
            <div class="field-body">
                <div class="field is-expanded">
                    <div class="field has-addons">
                        <p class="control">
                            <a class="button is-static">
                                Address
                            </a>
                        </p>
                        <p class="control is-expanded">
                            <input class="input" name="address" type="text">
                            @if ($errors->has('address') )
                                <span class="help-block" >
                                {{$errors->first('address')}}
                            </span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label"></div>
            <div class="field-body">
                <div class="field is-expanded">
                    <div class="field has-addons">
                        <p class="control">
                            <a class="button is-static">
                                Phone
                            </a>
                        </p>
                        <p class="control is-expanded">
                            <input class="input" name="phone" type="tel">
                            @if ($errors->has('phone') )
                                <span class="help-block" >
                                {{$errors->first('phone')}}
                            </span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Long time</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow">
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select class="select" id="tour-id" name="tour_id">
                                    <option data-duration="2" value="1">
                                        Orchid Cruises 2 days 1 night
                                    </option>
                                    <option data-duration="3" value="2">
                                        Orchid Cruises 3 days 2 nights
                                    </option>
                                </select>
                            </div>
                            @if ($errors->has('adults') )
                                <span class="help-block" >
                                {{$errors->first('adults')}}
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Check in</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow">
                        <div class="control">
                            <div class="select is-fullwidth">
                                <input type="text"  class="input" name="check_in"  id="CheckIn-DatePicker" placeholder="yy-mm-dd" />
                            </div>
                            {{--@if ($errors->has('adults') )
                                <span class="help-block" >
                                {{$errors->first('adults')}}
                            </span>
                            @endif--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">

                    <label class="label">Check out</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow">
                        <div class="control">
                            <div class="select is-fullwidth">
                                <input type="text" class="input" name="check_out" disabled="disabled" id="CheckOut-DatePicker" placeholder="yy-mm-dd" />
                            </div>
                            {{--@if ($errors->has('adults') )
                                <span class="help-block" >
                                {{$errors->first('adults')}}
                            </span>
                            @endif--}}
                        </div>
                    </div>
                </div>
            </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Adults</label>
            </div>
            <div class="field-body">
                <div class="field is-narrow">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select name="adults" id="">
                                @for ($i=0;$i<30;$i++)
                                    <option value="{{$i}}">{!! $i !!}</option>
                                @endfor
                            </select>

                        </div>
                        @if ($errors->has('adults') )
                            <span class="help-block" >
                                {{$errors->first('adults')}}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Children</label>
            </div>
            <div class="field-body">
                <div class="field is-narrow">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select name="children" id="">
                                @for ($i=0;$i<30;$i++)
                                    <option value="{{$i}}">{!! $i !!}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Question</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <textarea name="mess" class="textarea" placeholder="More requirements"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label">
                <!-- Left empty for spacing -->
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <button class="button is-primary">
                            Book now
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{form::close()}}
    </div>
    <style>
        .from-booking {
            padding-top: 40px
        }
        .help-block{color: #d9534f}
    </style>
@endsection
@section('script')

    <script>
        $("#CheckIn-DatePicker").datepicker({

            defaultDate: "+0",
            changeMonth: true,
            dateFormat: "yy-mm-dd",
            minDate: "+0",

            onSelect: function(dateText, inst) {
                var d = $.datepicker.parseDate(inst.settings.dateFormat, dateText);
                d.setDate(d.getDate() + parseInt($('#tour-id').val()) );
                $("#CheckOut-DatePicker").val($.datepicker.formatDate(inst.settings.dateFormat, d));

            },

            onClose: function(selectedDate) {
                $("#CheckOut-DatePicker").datepicker("option", "minDate", selectedDate);

            }

        });

    </script>

@endsection