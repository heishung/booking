<?php $__env->startSection('content'); ?>
    <div class="column has-text-centered text-uppercase bg-grey">
        <h1>Booking <?php echo e($roombooking->name); ?></h1>
        <p class="center-block line-grey margin-top-20 margin-bottom-20">&nbsp;</p>
    </div>
    <div class="container from-booking">

        <?php if(session('notification')): ?>
        
        <article class="message is-success">
            <div class="message-header">
                <p>Success</p>
                <button type="button" onclick="clickCloseMessage(this)" class="delete" aria-label="delete"></button>
            </div>
            <div class="message-body">
                <?php echo e(session('notification')); ?>

            </div>
        </article>
        <?php endif; ?>
            <?php if($errors->any()): ?>
                <span class="help-block" >
                                <?php echo e($errors->first('room_id')); ?>

                            </span>
            <?php endif; ?>
        <?php echo e(Form::open(['method'=>'post','route'=>['bookingstore','id'=>$roombooking->id],'role'=>'form'])); ?>

        <div class="field is-horizontal">
            <div class="field-label is-normal">

            </div>
            <input type="hidden" name="room_id" value="<?php echo e($roombooking->id); ?>">

            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input" type="text" name="full_name" placeholder="Full Name">
                        <span class="icon is-small is-left">
          <i class="fa fa-user"></i>
        </span>
                        <?php if($errors->has('full_name') ): ?>
                            <span class="help-block">
                                <?php echo e($errors->first('full_name')); ?>

                            </span>
                        <?php endif; ?>
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
                        <?php if($errors->has('email') ): ?>
                            <span class="help-block">
                                <?php echo e($errors->first('email')); ?>

                            </span>
                        <?php endif; ?>
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
                            <?php if($errors->has('address') ): ?>
                                <span class="help-block" >
                                <?php echo e($errors->first('address')); ?>

                            </span>
                            <?php endif; ?>
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
                            <?php if($errors->has('phone') ): ?>
                                <span class="help-block" >
                                <?php echo e($errors->first('phone')); ?>

                            </span>
                            <?php endif; ?>
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
                            <?php if($errors->has('adults') ): ?>
                                <span class="help-block" >
                                <?php echo e($errors->first('adults')); ?>

                            </span>
                            <?php endif; ?>
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
                                <?php for($i=0;$i<30;$i++): ?>
                                    <option value="<?php echo e($i); ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>

                        </div>
                        <?php if($errors->has('adults') ): ?>
                            <span class="help-block" >
                                <?php echo e($errors->first('adults')); ?>

                            </span>
                        <?php endif; ?>
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
                                <?php for($i=0;$i<30;$i++): ?>
                                    <option value="<?php echo e($i); ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
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
        <?php echo e(form::close()); ?>

    </div>
    <style>
        .from-booking {
            padding-top: 40px
        }
        .help-block{color: #d9534f}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>