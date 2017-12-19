<?php $__env->startSection('content'); ?>
    <div>
        <div class="column has-text-centered text-uppercase bg-grey">
            <h1>Orchid Cruise Cabins</h1>
            <p class="center-block line-grey margin-top-20 margin-bottom-20">&nbsp;</p>
        </div>
        <div class="container">

                <div class="clearfix bg-grey margin-top-40 margin-bottom-40">

                    <div class="columns">
                        <div class="column is-6"><img alt="Suite Cabin With Balcony"
                                                      src="<?php echo e(url('')); ?>/image/59916c42e964b.jpg"
                                                      width="100%"></div>
                        <div class="column">
                            <div class="cabin-contents">
                                <div class="ctitle margin-bottom-15">
                                    <?php echo e($hotel->name); ?>

                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">Address</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns"><?php echo e($hotel->info['address']); ?></p>
                                    </div>
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">content</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns"><?php echo e($hotel->info['content']); ?></p>
                                    </div>
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p>circulate</p>
                                    </div>
                                    <div class="column">
                                        <p><?php echo e($hotel->overview['circulate']); ?></p>
                                    </div>
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">Gotogether</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns"><?php echo e($hotel->overview['Gotogether']); ?></p>
                                    </div>
                                </div>
                                <div class="content columns is-clearfix">
                                    <div class="column">
                                        <p class="columns">Max occupancy</p>
                                    </div>
                                    <div class="column">
                                        <p class="columns"><?php echo e($hotel->overview['Gotogether']); ?></p>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-orange" href="/room/<?php echo e($hotel->id); ?>"
                                       style="font-size: 18px; padding: 7px 30px;">VIEW DETAIL<img alt="#"
                                                                                                   src="<?php echo e(url('')); ?>/image/chevron-button-right-icon.png"
                                                                                                   style="padding-bottom: 3px;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>