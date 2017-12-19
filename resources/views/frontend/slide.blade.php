<section class="h-slider">
    <div id="slider">
        <figure class="image">
            @foreach($slides as $slide)

                <img src="{{route('img.view',['p'=>$slide->image,'q'=>100])}}" alt="">
                @endforeach

        </figure>
    </div>
</section>

    {{Form::open(['method'=>'post','id'=>'frm_make_reservation','route'=>('bookingguide')])}}

    <div class="container-fluid">

        <div class="row h-make-reservation has-text-centered">
            <p class="h-align-control"><em>MAKE A RESERVATIONS:</em> <input id="cruise_id" name="cruise_id" type="hidden" value="1"> <span class="h-ctrls">
                   {{-- <select class="select" id="tour_id"  name="tour_id">
						@for ($i = 0; $i < 10; $i++)
						<option data-duration="{{$i}}" value="{{$i}}">
							{{$i}} DAY
						</option>
                            @endfor
					</select>--}}
                    <select class="select" id="location" name="location">
                        @foreach($slidelocation as $lt)
						<option data-duration="2" value="{{$lt->id}}">
							{{$lt->name}}
						</option>
						@endforeach
					</select>
                  {{-- <select id="hotels" class="select" name="hotels_id" >
                            @foreach($slidehotels as $ht)
                           <option value={!! $ht->id !!}> {{$ht->name}}</option>
                       @endforeach
                        </select>--}}
                <span class="h-ctrls">
                                <span class="icon" id="btn_check_in"><img alt="" src="{{ url('')}}/image/icon-date-picker.jpg"></span>
					 <label for="calender">
                          <input type="text" name="check_in" class=" input-text "  id="CheckInDatePicker" placeholder="CHECK IN" />
                     </label></span> <!-- check-out date -->

                {{--<span class="h-ctrls">
                     <input type="text" name="check_uot" class=" input-text "  id="CheckUotDatePicker" placeholder="CHECK UOT" />
						<span style="display: none;" class="icon" id='btn_check_out'> <img alt="" src="{{ url('')}}/media/icon/icon-date-picker.jpg"> </span>
					</span>--}}

                <span class="h-ctrls"><span class="icon" id="btn_check_out" style="display: none;"><img alt="" src="{{ url('')}}/public/icon-date-picker.jpg"></span></span> <span class="h-ctrls"><!-- type="submit" -->
					 <button class="btn btn-orange button is-primary btn-book-now has-text-centered" id="search_button" type="submit"><span class="h-ctrls"><span class="h-ctrls"><span class="h-ctrls">SEARCH</span></span></span></button></span></p>
        </div>
    </div>
    {{Form::close()}}
{{--<script>
    $(document).ready(function () {
        $("#location").change(function () {
            var location_id=$(this).val();
            $.get("admin/ajax/rooms/"+location_id,function (data) {
                $("#hotels").html(data);
            });
        });
    });
</script>--}}
