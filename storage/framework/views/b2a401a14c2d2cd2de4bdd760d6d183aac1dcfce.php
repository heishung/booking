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
                        <th>Name</th>
                        <th>Content</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $Locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="odd gradeX" align="center">
                            <td><?php echo e($locations->id); ?></td>
                            <td><?php echo e($locations->name); ?></td>
                            <td><?php echo $locations->content; ?></td>
                            <td><?php echo $locations->slug; ?></td>

                            <td><img src="<?php echo e(route('img.view',['p'=>$locations->image,'w'=>100,'q'=>80])); ?>" alt=""></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        onclick="return confirm('Do you want delete')"
                                        href="/admin/location/delete/<?php echo e($locations->id); ?>">Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="/admin/location/edit/<?php echo e($locations->id); ?>">Edit</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                            <ul class="pagination">
                                <?php echo e($Locations->links()); ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>