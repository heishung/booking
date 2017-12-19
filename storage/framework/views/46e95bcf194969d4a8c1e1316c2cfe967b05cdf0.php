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
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">

                    <?php echo Form::open(['method'=>'post','route'=>'admin.hotels.store','enctype'=>'multipart/form-data','role'=>'form']); ?>

                    <div class="form-group <?php if($errors->has('name')): ?> has-warning <?php endif; ?> "  >
                        <label for="name" >Name</label>
                        <input class="form-control" name="name" placeholder="Please Enter Location Name" />
                        <?php if($errors->any()): ?>
                            <span class="help-block" >
                                <?php echo e($errors->first('name')); ?>

                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="info[address]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>hotels content</label>
                        
                        <textarea name="info[content]" id="demo" class="ckeditor"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Slide</label>
                        <label class="custom-file">
                            <input name="img_upload" id="file2" class="custom-file-input" type="file">
                            <span class="custom-file-control"></span>
                        </label>
                    </div>


                    <div class="form-group">
                        <label>Location</label>
                        <?php echo Form::select('location_id',$locations); ?>

                    </div>
                        <div class="form-group">
                            <label>Overview</label>
                            <input id="input-upload" class="form-control" name="overview[Necessaryinformation]" placeholder="Necessaryinformation" type="text" multiple/><br>
                            <input id="input-upload" class="form-control" name="overview[Gotogether]" type="text" placeholder="Gotogether" multiple/><br>
                            <input id="input-upload" class="form-control" name="overview[circulate]" placeholder="circulate" type="text" multiple/><br>
                        </div>

                    <div class="form-group">
                        <label for="">Price from</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input name="price_from" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">hotels Add</button>
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
    <script src="admin_asset/upload/fileinput.min.js"></script>
    <script>
       /* $(document).ready(function () {
            $("#input-upload").fileinput({
                allowedFileExtensions: ["png", "jpg", "jpeg", "gif"],
                uploadUrl: '/admin/image/upload',
                uploadExtraData: {_token:""}
            });
        });*/

       $custom-file-text: (
           placeholder: (
               en: "Choose file...",
               es: "Seleccionar archivo..."
           ),
           button-label: (
           en: "Browse",
           es: "Navegar"
       )
       );
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>