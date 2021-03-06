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
                <h1 class="page-header">Location
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <?php echo Form::open(['method'=>'post','route'=>'admin.location.store','role'=>'form','enctype'=>"multipart/form-data"]); ?>

                    <div class="form-group <?php if($errors->has('name')): ?> has-warning <?php endif; ?> "  >
                        <label for="name" >Name</label>
                        <input class="form-control" name="name" placeholder="Please Enter Location Name" />
                        <?php if(count($errors)>0): ?>
                            <div class=" alert alert-danger">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($err); ?><br>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                       
                        <?php if(session('notification')): ?>
                            <span class="help-block" >
                                <?php echo e(session('notification')); ?>

                            </span>
                        <?php endif; ?>
                    </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="upload_img" >
                </div>
                <div class="form-group">
                    <label>Location content</label>
                    <textarea name="content" id="demo" class="ckeditor"></textarea>

                </div>

                    
                    <button type="submit" class="btn btn-default">Location Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <?php echo Form::close(); ?>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>