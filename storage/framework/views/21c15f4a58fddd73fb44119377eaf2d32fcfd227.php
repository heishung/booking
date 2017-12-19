<div class="contact-footer">
    <div class="container has-text-centered">
        <div class="padding-left-0">

            <a class="social" href="/">Home</a>

            <a class="social" href="<?php echo e(route('post.detail',['id'=>$itineraries->id])); ?>"><?php echo e($itineraries->title); ?></a>

            <a class="social" href="<?php echo e(route('services.list')); ?>">Services &amp; Activities</a>

            <a class="social" href="<?php echo e(route('promotion.list')); ?>">Promotion</a>


            <a class="social" href="<?php echo e(route('contactindex')); ?>"><?php echo app('translator')->getFromJson('frontend.header.contact_us'); ?></a>
        </div>
    </div>
</div>
<div class=" container address-footer" style="border-top: solid white;">
    <div class="columns">
        <div class="column address">
            <p class="office text-uppercase"><?php echo e(\App\helpers\Lap::getArrayVal($options,'name-office-1')); ?></p>
            <p class="margin-top-15"><?php echo e(\App\helpers\Lap::getArrayVal($options,'address-off-1')); ?></p>
            <p class="margin-top-15">Tel: <?php echo e(\App\helpers\Lap::getArrayVal($options,'tel-off-1')); ?></p>
            <p class="margin-top-15">Fax: <?php echo e(\App\helpers\Lap::getArrayVal($options,'fax-off-1')); ?></p>
            <p class="margin-top-15">Web: <a class="link" href="<?php echo e(\App\helpers\Lap::getArrayVal($options,'web-off-1')); ?>"><?php echo e(\App\helpers\Lap::getArrayVal($options,'web-off-1')); ?></a></p>
            <p class="margin-top-15">Email: <a class="link" href="<?php echo e(\App\helpers\Lap::getArrayVal($options,'email-off-1')); ?>"><?php echo e(\App\helpers\Lap::getArrayVal($options,'email-off-1')); ?></a></p>
        </div>
        <div class="column address">
            <p class="office text-uppercase"><?php echo e(\App\helpers\Lap::getArrayVal($options,'name-off-2')); ?></p>
            <p class="margin-top-15"># <?php echo e(\App\helpers\Lap::getArrayVal($options,'address-off-2')); ?></p>
            <p class="margin-top-15">Tel: <?php echo e(\App\helpers\Lap::getArrayVal($options,'tel-off-2')); ?></p>
            <p class="margin-top-15">Fax: <?php echo e(\App\helpers\Lap::getArrayVal($options,'fax-off-2')); ?></p>
            <p class="margin-top-15">HOT LINE: <?php echo e(\App\helpers\Lap::getArrayVal($options,'hotline-off-2')); ?> – <?php echo e(\App\helpers\Lap::getArrayVal($options,'hotline-off-1')); ?></p>
            <p class="margin-top-15">Email: <a class="link" href="mailto:<?php echo e(\App\helpers\Lap::getArrayVal($options,'email-off-1')); ?>"><?php echo e(\App\helpers\Lap::getArrayVal($options,'email-off-1')); ?></a></p>
        </div>
        <div class="column address">
            <p class="office text-uppercase"><?php echo e(\App\helpers\Lap::getArrayVal($options,'name-box-3')); ?></p>
          
            <p class="margin-top-15"><?php echo e(\App\helpers\Lap::getArrayVal($options,'content-box-3')); ?></p>
            
        </div>
    </div>
</div>