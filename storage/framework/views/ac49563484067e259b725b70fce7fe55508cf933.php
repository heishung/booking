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
                <h1 class="page-header">Hotels
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <?php if(session('messagedelete')): ?>
                <span class="help-block" >
                                <?php echo e(session('messagedelete')); ?>

                            </span>
            <?php endif; ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>address</th>
                    <th>content</th>
                    <th>Necessaryinformation</th>
                    <th>Gotogether</th>
                    <th>circulate</th>
                    <th>price form</th>
                    <th>location </th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $Hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="odd gradeX" align="center">
                    <td><?php echo e($hotel->id); ?></td>
                    <td><?php echo e(isset($hotel->name)?$hotel->name:''); ?></td>
                    <td><?php echo e(isset($hotel->info['address'])?$hotel->info['address']:''); ?></td>
                    <td><?php echo isset($hotel->info['content'])?$hotel->info['content']:''; ?></td>
                    <td><?php echo e(isset($hotel->overview['Necessaryinformation'])?$hotel->overview['Necessaryinformation']:''); ?></td>
                    <td><?php echo e(isset($hotel->overview['Gotogether'])?$hotel->overview['Gotogether']:''); ?></td>
                    <td><?php echo e(isset($hotel->overview['circulate'])?$hotel->overview['circulate']:''); ?></td>
                    <td><?php echo e(isset($hotel->price_from)?$hotel->price_from:''); ?></td>
                    <td><?php echo e(isset($hotel->location->name)?$hotel->location->name:''); ?></td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Do you want delete')" href="/admin/hotels/delete/<?php echo e($hotel->id); ?>"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/hotels/edit/<?php echo e($hotel->id); ?>">Edit</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-6">

                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                        <ul class="pagination">
                            <?php echo e($Hotels->links()); ?>

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