<?php
/**
 * Created by PhpStorm.
 * User: thehung
 * Date: 29/08/2017
 * Time: 4:17 CH
 */?>

<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reviews
                        <small></small>
                    </h1>
                    <h1 style="color: #00d6b2;color: #00d6b2;
background: azure;
text-align: center;"><?php if(session('notification')): ?>
                            <span class="help-block">
                                <?php echo e(session('notification')); ?>

                            </span>
                        <?php endif; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/reviews/edit/<?php echo e($review->id); ?>" method="post" role="form">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group <?php if($errors->has('name')): ?> has-warning <?php endif; ?> "  >
                        <label for="name" >Name</label>
                        <input class="form-control" name="name" value="<?php echo e($review->name); ?>"  placeholder="Please Enter Location Name" />
                        <?php if(count($errors)>0): ?>
                            <div class=" alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($err); ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="=form-group">
                        <label for="">Hotels</label>
                              <select name="hotel_id"  id="">
                                  <?php $__currentLoopData = $hotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotels): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option
                                   <?php if($review->hotel_id == $hotels->id): ?>
                                        <?php echo e('selected'); ?>

                                        <?php endif; ?>
                                       value="<?php echo e($hotels->id); ?>"><?php echo e($hotels->name); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                    </div>

                    <div class="=form-group">
                        <label for="">User</label>
                        <select name="user_id" id="">
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                        <?php if($review->user_id == $user->id): ?>
                                        <?php echo e('selected'); ?>

                                        <?php endif; ?>
                                        value="<?php echo e($user->id); ?>"> <?php echo e($user->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" value="<?php echo e($review->email); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" type="email">
                        <?php if(count($errors)>0): ?>
                            <div class=" alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($err); ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form_group">
                        <label for="" class="control-label">Rate This</label>
                        <div class="star-rating">
                            <span class="fa fa-star" data-rating="1"></span>
                            <span class="fa fa-star" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="data[rating]" class="rating-value" value="<?php echo e($review->data['rating']); ?>">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-default">Location edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        var $star_rating = $('.star-rating .fa');

        var SetRatingStar = function() {
            return $star_rating.each(function() {
                if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                    return $(this).removeClass('fa-star-o').addClass('fa-star');
                } else {
                    return $(this).removeClass('fa-star').addClass('fa-star-o');
                }
            });
        };

        $star_rating.on('click', function() {
            $star_rating.siblings('input.rating-value').val($(this).data('rating'));
            return SetRatingStar();
        });

        SetRatingStar();
        $(document).ready(function() {

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>