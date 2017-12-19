<?php
/**
 * Created by PhpStorm.
 * User: thehung
 * Date: 29/08/2017
 * Time: 4:17 CH
 */?>

<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div id="page-wrapper" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Rooms
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <?php echo Form::open(['method'=>'post','route'=>'admin.rooms.store','role'=>'form','enctype'=>"multipart/form-data"]); ?>

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
                        <label for="">Price</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input name="price" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-addon">.00</span>
                            <?php if($errors->any()): ?>
                                <span class="help-block" >
                                <?php echo e($errors->first('name')); ?>

                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Describe</label>
                        <textarea name="info[content]" id="demo" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Room amenities</label>
                        <textarea name="info[amenities]" id="demo" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Cancellation policy</label>
                        <textarea name="info[Cancellation]" id="demo" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Max adults</label>
                        <input class="form-control" name="max_adults" type="number" value="1" id="example-number-input">

                    </div>
                    <div class="form-group">
                        <label>Max child</label>
                        <input class="form-control" name="max_child" type="number" value="0" id="example-number-input">
                    </div>
                    <div class="form-group">
                        <label>convenient</label>
                        <textarea name="overview[convenient]" id="demo" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>
                            Necessary information</label>
                        <textarea name="overview[information]" id="" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>
                            Single supplement</label>
                        <textarea name="overview[supplement]" id="" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>
                            Is book</label>
                        <textarea name="is_book" id="" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>
                            Necessary information</label>
                        <textarea name="single_sup" id="" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <select id="location" class="form-control" name="location" id="">
                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($lc->id); ?>"> <?php echo e($lc->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="img_upload" >
                    </div>

                    <div class="form-group">
                        <label>Hotels</label>
                        <select id="hotels" class="form-control" name="hotels_id" >
                            <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ht): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value=<?php echo $ht->id; ?>> <?php echo e($ht->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Room Add</button>
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

<?php $__env->startSection("script"); ?>
    <script>
        $(document).ready(function () {
            $("#location").change(function () {
                var location_id=$(this).val();
                $.get("admin/ajax/rooms/"+location_id,function (data) {
                    $("#hotels").html(data);
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>