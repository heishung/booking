<?php $__env->startSection('content'); ?>


    <div class="container home-promotion margin-top-40">
        <div class="has-text-centered margin-bottom-20">
            <h2>Promotion</h2>
            <p class="center-block line-grey">&nbsp;</p>
        </div>
        <div class="columns">
            <?php $__currentLoopData = $promotion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="column margin-bottom-20">
                    <div class="promotion-content">
                        <div style="position: relative;">
                            <a href="<?php echo e(route('post.detail',['id'=>$posts->id])); ?>"><img style="width: 100%" src="<?php echo e(route('img.view',['p'=>$posts->image,'q'=>100])); ?>" alt=""></a>
                            <div class="discount hide">
                                <p class="disc-text text-center">Discount 15%</p>
                            </div>
                        </div>
                        <div class="promo-content">
                            <div class="title">
                                <?php echo $posts->title; ?>

                            </div>
                            <div class="content">
                                <p><?php echo str_limit($posts->content, $limit = 200, $end = '...'); ?></p>
                            </div>
                            <div class="padding-top-10 padding-bottom-10 text-right">
                                <a class="button is-warning is-active has-text-centered" href="/post/<?php echo e($posts->id); ?>" style="padding-top: 11px;">VIEW DETAIL <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
   
    <div class="container">
        <div class="body-margin-bottom is-clearfix">
            <div class="bg-grey box-book">
                <div class="has-text-centered padding-top-30 padding-bottom-30">
                    <p style="margin:-5px 0; font-size: 20px; color: #d78e15;">TRAVELING IS OUR PASSION</p>
                    <p style="margin-bottom:20px; font-size: 20px; color: #d78e15;">LET US DESIGN YOUR UNFORGETTABLE TRIP!</p>
                    <p style="margin:-5px 0; font-size: 15px; color: #333333;">
                        Sometimes we live experiences that mark us for the rest of our life. If you are looking for living one of these experiences, let us help you. Our</p>
                    <p style="margin-bottom:20px; font-size: 15px; color: #333333;">
                        passionate personnel will assist you in order to design a tailored trip that you will remember forever.</p>
                    <a class="btn btn-orange" href="<?php echo e(route('contactindex')); ?>" style="font-size: 18px; padding: 7px 30px;">Enquire Now</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>