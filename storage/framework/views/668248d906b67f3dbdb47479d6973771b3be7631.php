<?php
/**
 * Created by PhpStorm.
 * User: thehung
 * Date: 29/08/2017
 * Time: 4:17 CH
 */ ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="admin_asset/upload/css/fileinput.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">hotels
                        <small><?php echo e($hotels->name); ?></small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/hotels/edit/<?php echo e($hotels->id); ?>" method="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                    <div class="form-group <?php if($errors->has('name')): ?> has-warning <?php endif; ?> "  >
                        <label for="name" >Name</label>
                        <input class="form-control" name="name" value="<?php echo e($hotels->name); ?>" placeholder="Please Enter Locations Name" />
                        <?php if($errors->any()): ?>
                            <span class="help-block" >
                                <?php echo e($errors->first('name')); ?>

                            </span>
                        <?php endif; ?>
                        <?php if(session('notification')): ?>
                            <span class="help-block" >
                                <?php echo e(session('notification')); ?>

                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" value="<?php echo e($hotels->info['address']); ?>" name="info[address]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Slide</label>
                        <input id="input-upload" value="<?php echo e($hotels->image); ?>" name="image" placeholder="images" type="file" multiple/>
                    </div>
                    <div class="form-group">
                        <label>hotels content</label>
                        <textarea name="info[content]" id="demo" class="ckeditor"><?php echo e(isset($hotels->info['content'])?$hotels->info['content']:''); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Location</label>
                        <select class="form-control"  name="location_id" id="">
                            <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                        <?php if($hotels->location_id == $lc->id): ?>
                                            <?php echo e('selected'); ?>

                                        <?php endif; ?>
                                        value="<?php echo e($lc->id); ?>"> <?php echo e($lc->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                        <div class="form-group">
                            <label>Overview</label>
                            <input id="input-upload" value="<?php echo e($hotels->overview['Necessaryinformation']); ?>" class="form-control" name="overview[Necessaryinformation]" placeholder="Necessaryinformation" type="text" multiple/><br>
                            <input id="input-upload" value="<?php echo e($hotels->overview['Gotogether']); ?>" class="form-control" name="overview[Gotogether]" type="text" placeholder="Gotogether" multiple/><br>
                            <input id="input-upload" value="<?php echo e($hotels->overview['circulate']); ?>" class="form-control" name="overview[circulate]" placeholder="circulate" type="text" multiple/><br>
                        </div>
                        <div class="form-group">
                            <label for="">Price from</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input name="price_from" value="<?php echo e($hotels->price_from); ?>" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">hotels Add</button>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>