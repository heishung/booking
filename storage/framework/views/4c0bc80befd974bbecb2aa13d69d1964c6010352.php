<?php
/**
 * Created by PhpStorm.
 * User: thehung
 * Date: 29/08/2017
 * Time: 4:17 CH
 */ ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Rooms
                        <small><?php echo e($room->name); ?></small>
                    </h1>

                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/rooms/edit/<?php echo e($room->id); ?>" enctype="multipart/form-data" method="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                        <div class="form-group <?php if($errors->has('name')): ?> has-warning <?php endif; ?> ">
                            <label for="name">Name</label>
                            <input class="form-control" value="<?php echo e($room->name); ?>" name="name"
                                   placeholder="Please Enter Location Name"/>
                            <?php if($errors->any()): ?>
                                <span class="help-block">
                                <?php echo e($errors->first('name')); ?>

                            </span>
                            <?php endif; ?>

                            
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input name="price" value="<?php echo e($room->price); ?>" type="text" class="form-control"
                                       aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Describe</label>
                            <textarea name="info[content]" id="demo"
                                      class="ckeditor"><?php echo $room->info['content']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Room amenities</label>
                            <textarea name="info[amenities]" id="demo"
                                      class="ckeditor"><?php echo $room->info['amenities']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cancellation policy</label>
                            <textarea name="info[Cancellation]" id="demo"
                                      class="ckeditor"><?php echo $room->info['Cancellation']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Max adults</label>
                            <input class="form-control" value="<?php echo e($room->max_adults); ?>" name="max_adults" type="number"
                                   id="example-number-input">

                        </div>
                        <div class="form-group">
                            <label>Max child</label>
                            <input class="form-control" value="<?php echo e($room->max_child); ?>" name="max_child" type="number"
                                   id="example-number-input">
                        </div>
                        <div class="form-group">
                            <label>convenient</label>
                            <textarea name="overview[convenient]" id="demo"
                                      class="ckeditor"><?php echo $room->overview['convenient']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>
                                Necessary information</label>
                            <textarea name="overview[information]" id="demo"
                                      class="ckeditor"><?php echo $room->overview['information']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>
                                Single supplement</label>
                            <textarea name="overview[supplement]" id=""
                                      class="ckeditor"><?php echo $room->overview['supplement']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>
                                Is book</label>
                            <textarea name="is_book" id="" class="ckeditor"><?php echo $room->is_book; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>
                                Necessary information</label>
                            <textarea name="single_sup" id="" class="ckeditor"><?php echo $room->single_sup; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="img_upload">
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <select id="location" class="form-control" name="location" id="">
                                <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <option value="<?php echo e($lc->id); ?>"> <?php echo e($lc->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Hotels</label>
                            <select id="hotels" class="form-control" name="hotels_id" id="">
                                <?php $__currentLoopData = $hotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ht): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                            <?php if($room->hotels_id == $ht->id): ?>
                                            <?php echo e('selected'); ?>

                                            <?php endif; ?>
                                            value="<?php echo e($ht->id); ?>"> <?php echo e($ht->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        
                        <button type="submit" class="btn btn-default">Room edit</button>
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

<?php $__env->startSection("script"); ?>
    <script>
        $(document).ready(function () {
            $("#location").change(function () {
                var location_id = $(this).val();
                $.get("admin/ajax/rooms/" + location_id, function (data) {
                    /*alert(data);*/
                    $("#hotels").html(data);
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>