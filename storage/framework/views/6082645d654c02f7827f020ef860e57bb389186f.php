<section class="h-slider">
    <div id="slider">
        <figure class="image">
            <img alt="" src="<?php echo e(url('')); ?>/image/travel-1737172__340.jpg"> <img alt="" src="<?php echo e(url('')); ?>/image/hotel-389256__340.jpg"> <img alt="" src="<?php echo e(url('')); ?>image/relax-2356858__340.jpg"> <img alt="" src="<?php echo e(url('')); ?>/image/water-165219__340.jpg">
        </figure>
    </div>
</section>
<form action="" id="frm_make_reservation" method="get" name="booking">
    <div class="container-fluid">
        <div class="row h-make-reservation has-text-centered">
            <p class="h-align-control"><em>MAKE A RESERVATIONS:</em> <input id="cruise_id" name="cruise_id" type="hidden" value="1"> <span class="h-ctrls"><select class="select" id="tour_id" name="tour_id">
						<option data-duration="2" value="1">
							Orchid Cruises 2 days 1 night
						</option>
						<option data-duration="3" value="2">
							Orchid Cruises 3 days 2 nights
						</option>
					</select></span> <!-- Check-in Date -->
                <span class="h-ctrls">

                                <span class="icon" id="btn_check_in"><img alt="" src="<?php echo e(url('')); ?>/image/icon-date-picker.jpg"></span>
					 <label for="calender"><input class="input-text hasDatepicker" id="some-id"  type="text"></label></span> <!-- check-out date -->
                <script>const picker = datepicker('#some-id');</script>
                <span class="h-ctrls"><span class="icon" id="btn_check_out" style="display: none;"><img alt="" src="<?php echo e(url('')); ?>/public/icon-date-picker.jpg"></span></span> <span class="h-ctrls"><!-- type="submit" -->
					 <button class="btn btn-orange button is-primary btn-book-now has-text-centered" id="search_button" type="submit"><span class="h-ctrls"><span class="h-ctrls"><span class="h-ctrls">BOOK NOW</span></span></span></button></span></p>
        </div>
    </div>
</form>