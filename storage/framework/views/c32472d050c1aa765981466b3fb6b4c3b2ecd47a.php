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
                <h1 class="page-header">Locations Edit
                    <small><?php echo e($locations->name); ?></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">

                <form action="admin/location/edit/<?php echo e($locations->id); ?>" method="POST">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                    <div class="form-group <?php if($errors->has('name')): ?> has-warning <?php endif; ?>">
                        <label>Locations Name</label>
                        <input class="form-control" name="name" value="<?php echo e($locations->name); ?>" placeholder="Please Enter Locations Name" />
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
                        <label>Content</label>
                        <textarea name="Content" value="<?php echo e($locations->content); ?>" id="demo" class="ckeditor"></textarea>
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
                    <button type="submit" class="btn btn-default">Category Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>