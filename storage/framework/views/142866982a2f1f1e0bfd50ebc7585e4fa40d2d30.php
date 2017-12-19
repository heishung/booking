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
                    <h1 class="page-header">
                        Creat custom theme
                        
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <?php echo Form::open(['method'=>'post','route'=>'postCreatcustom','role'=>'form','enctype'=>"multipart/form-data"]); ?>

                    <h3>header</h3>
                    <div class="form-group">
                        <label>logo</label>
                        <input type="file" name="upload_img" >
                    </div>
                    <div class="form-group">
                        <label>Hotline header</label>
                        <input name="header['hotline']" type="number" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Name sevice</label>
                        <input name="header['nameservice']" id="demo" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Email us</label>
                        <input name="header['emailus']" id="demo" type="email" class="form-control" >
                    </div>

                    <h3>Footer</h3>
                    <div class="form-group <?php if($errors->has('name')): ?> has-warning <?php endif; ?> "  >
                        <label for="name" >Name office</label>
                        <input class="form-control" name="nameoffice" placeholder="Please Enter Location Name" />
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
                        <label>Tel</label>
                        <input name="footer['tel']" id="demo" type="number" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Fax</label>
                        <input name="footer['fax']" id="demo" type="number" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Web</label>
                        <input name="footer['web']" id="demo" type="number" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Hotline</label>
                        <input name="footer['phone']" id="demo" type="number" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Name service</label>
                        <input name="footer['nameservice']" id="demo" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="footer['email']" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="footer['international']">International:</label>
                        <input type="text" name="footer['international']" class="form-control" id="email">
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