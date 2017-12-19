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
                    <h1 class="page-header">Slide
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <?php echo Form::open(['method'=>'post','route'=>['post.edit.slide','id'=>$slides->id],'role'=>'form','enctype'=>"multipart/form-data"]); ?>

                    <div class="form-group <?php if($errors->has('name')): ?> has-warning <?php endif; ?> "  >
                        <label for="nameslide" >Name Slide</label>
                        <input class="form-control" value="<?php echo e($slides->nameslide); ?>" name="nameslide" placeholder="Please Enter Slide Name" />
                        
                        <?php if($errors->any()): ?>
                            <span class="help-block" >
                                 <?php echo e($errors->first('nameslide')); ?>

                             </span>
                        <?php endif; ?>
                        <?php if(session('notification')): ?>
                            <span class="help-block" >
                                <?php echo e(session('notification')); ?>

                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input  type="file" name="upload_img" >
                        <img src="<?php echo e(route('img.view',['p'=>$slides->image,'w'=>100,'q'=>80])); ?>" alt="">
                    </div>
                    <div class="form-group">
                        <label>Slide content</label>
                        <input class="form-control" value="<?php echo e($slides->slidecontent); ?>" name="slidecontent" type="text">

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