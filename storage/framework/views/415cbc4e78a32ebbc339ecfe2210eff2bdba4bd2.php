<section class="h-slider">
    <div id="slider">
        <figure class="image">
            <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <img src="<?php echo e(route('img.view',['p'=>$slide->image,'q'=>100])); ?>" alt="">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </figure>
    </div>
</section>

    <?php echo e(Form::open(['method'=>'post','id'=>'frm_make_reservation','route'=>('bookingguide')])); ?>


    <div class="container-fluid">

        <div class="row h-make-reservation has-text-centered">
            <p class="h-align-control"><em>MAKE A RESERVATIONS:</em> <input id="cruise_id" name="cruise_id" type="hidden" value="1"> <span class="h-ctrls">
                   
                    <select class="select" id="location" name="location">
                        <?php $__currentLoopData = $slidelocation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option data-duration="2" value="<?php echo e($lt->id); ?>">
							<?php echo e($lt->name); ?>

						</option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
                  
                <span class="h-ctrls">
                                <span class="icon" id="btn_check_in"><img alt="" src="<?php echo e(url('')); ?>/image/icon-date-picker.jpg"></span>
					 <label for="calender">
                          <input type="text" name="check_in" class=" input-text "  id="CheckInDatePicker" placeholder="CHECK IN" />
                     </label></span> <!-- check-out date -->

                

                <span class="h-ctrls"><span class="icon" id="btn_check_out" style="display: none;"><img alt="" src="<?php echo e(url('')); ?>/public/icon-date-picker.jpg"></span></span> <span class="h-ctrls"><!-- type="submit" -->
					 <button class="btn btn-orange button is-primary btn-book-now has-text-centered" id="search_button" type="submit"><span class="h-ctrls"><span class="h-ctrls"><span class="h-ctrls">SEARCH</span></span></span></button></span></p>
        </div>
    </div>
    <?php echo e(Form::close()); ?>


