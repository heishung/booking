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
                    <h1 class="page-header">Post
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <?php echo Form::open(['method'=>'post','route'=>'admin.post.store','role'=>'form','enctype'=>"multipart/form-data"]); ?>

                    <div class="form-group <?php if($errors->has('name')): ?> has-warning <?php endif; ?> "  >
                        <div class="form-group">
                        <label>title</label>
                            <input class="form-control" name="title" placeholder="Please Enter Post Name">
                            <?php if(session('notification')): ?>
                                <span class="help-block" >
                                <?php echo e(session('notification')); ?>

                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="upload_img" >
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="data[description]">
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input class="form-control" type="text" name="slug">
                        <select name="slug" id="">
                            <option value="promotion">PROMOTION</option>
                            <option value="itineraries">ITINERARIES</option>
                            <option value="services">SERVICES & ACTIVITIES</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" id="demo" class="ckeditor"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Post Add</button>
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
<?php $__env->startSection('script'); ?>



    <style>
        .dropzone {
            border: 2px dashed #0087F7;
            border-radius: 5px;
            background: white;
        }
    </style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>