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
                    <?php echo Form::open([ 'route' => [ 'dropzone.store' ],'name'=>'addimg', 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'my-dropzone' ]); ?>

                    <div>
                        <h3>Upload Multiple Image By Click On Box</h3>
                    </div>
                    <?php echo Form::close(); ?>

                    <form action="admin/hotels/store" method="POST" enctype="multipart/form-data" name="addhotel" id="form-id" role="form">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group <?php if($errors->has('name')): ?> has-warning <?php endif; ?> ">
                        <label for="name">Name</label>
                        <input class="form-control" name="name" placeholder="Please Enter Location Name"/>
                        <?php if($errors->any()): ?>
                            <span class="help-block">
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
                    <div class="form-group" id="img-upload">

                    </div>

                    <div class="form-group">
                        <label>Location</label>
                        <?php echo Form::select('location_id',$locations); ?>

                    </div>
                    <div class="form-group">
                        <label>Overview</label>
                        <input id="input-upload" class="form-control" name="overview[Necessaryinformation]"
                               placeholder="Necessaryinformation" type="text" multiple/><br>
                        <input id="input-upload" class="form-control" name="overview[Gotogether]" type="number"
                               placeholder="Gotogether" multiple/><br>
                        <input id="input-upload" class="form-control" name="overview[circulate]" placeholder="circulate"
                               type="text" multiple/><br>
                    </div>

                    <div class="form-group">
                        <label for="">Price from</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input name="price_from" type="text" class="form-control"
                                   aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>

                    <button id="addhotel" type="submit" class="btn btn-default">hotels Add</button>
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
    <link rel="stylesheet" href="admin_asset/dist/css/dropzone.css">
    <script src="admin_asset/dist/js/dropzone.js"></script>
    <script type="text/javascript">
        Dropzone.options.myDropzone = {
            uploadMultiple: true,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            createImageThumbnails: true,
            init: function () {
                this.on("addedfile", function (file) {

                    // Create the remove button
                    var removeButton = Dropzone.createElement("<button class='dz-remove'>Remove file</button>");


                    // Capture the Dropzone instance as closure.
                    var _this = this;

                    // Listen to the click event
                    removeButton.addEventListener("click", function (e) {
                        // Make sure the button click doesn't submit the form:
                        e.preventDefault();
                        e.stopPropagation();

                        // Remove the file preview.
                        _this.removeFile(file);
                        // If you want to the delete the file on the server as well,
                        // you can do the AJAX request here.
                    });

                    // Add the button to the file preview element.
                    file.previewElement.appendChild(removeButton);
                });
                this.on("successmultiple", function (file, res) {
                    $.each(res,function (index,value) {
                        $('#img-upload').append('<input type="hidden" name="image[]" value="'+value+'">');
                    });

                });
            }
        };
    </script>
    <script src="admin_asset/upload/fileinput.min.js"></script>
    <style>
        .dropzone {
            border: 2px dashed #0087F7;
            border-radius: 5px;
            background: white;
        }
    </style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>