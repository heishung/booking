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
                    <h1 class="page-header">Location
                        <small>List</small>
                    </h1>
                </div>

                <!-- /.col-lg-12 -->
                <?php if(session('messagedelete')): ?>
                    <span class="help-block">
                                <?php echo e(session('messagedelete')); ?>

                            </span>
                <?php endif; ?>

                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>image</th>
                        <th>Name slide</th>
                        <th>Slide content</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="odd gradeX" align="center">
                            <td><?php echo e($slide->id); ?></td>
                            <td><img src="<?php echo e(route('img.view',['p'=>$slide->image,'w'=>100,'q'=>80])); ?>" alt=""></td>
                            <td><?php echo e($slide->nameslide); ?></td>
                            <td><?php echo e($slide->slidecontent); ?></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        onclick="return confirm('Do you want delete')"
                                        href="<?php echo e(route('delete.slide',['id'=>$slide->id])); ?>">Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="<?php echo e(route('edit.slide',['id'=>$slide->id])); ?>">Edit</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
               
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>