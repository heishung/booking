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
                <h1 class="page-header">Category
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">permission</th>
                    <th class="text-center">Delete</th>
                    <th class="text-center">Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="odd gradeX" align="center">
                    <td><?php echo e($u->id); ?></td>
                    <td><?php echo e($u->name); ?></td>
                    <td><?php echo e($u->email); ?></td>
                    <td><?php echo e($u->permission); ?>

                        <?php if($u->permission==1): ?>
                        <?php echo e("Admin"); ?>

                        <?php elseif($u->permission==2): ?>
                        <?php echo e("Editor"); ?>

                        <?php elseif($u->permission==3): ?>
                        <?php echo e("author"); ?>

                            <?php endif; ?>
                    </td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="/admin/user/delete/<?php echo e($u->id); ?>"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/user/edit/<?php echo e($u->id); ?>">Edit</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>