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
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Room amenities</th>
                    <th>Cancellation policy</th>
                    <th>Content</th>
                    <th>Convenient</th>
                    <th>Supplement</th>
                    <th>Information</th>
                    <th>Max adults</th>
                    <th>Max child</th>
                    <th>Is book</th>
                    <th>Hotels</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="odd gradeX" align="center">
                    <td><?php echo e($room->id); ?></td>
                    <td><?php echo e($room->name); ?></td>
                    <td><?php echo e($room->price); ?></td>
                    <td><?php echo $room->info['amenities']; ?></td>
                    <td><?php echo $room->info['Cancellation']; ?></td>
                    <td><?php echo $room->info['content']; ?></td>
                    <td><?php echo $room->overview['convenient']; ?></td>
                    <td><?php echo $room->overview['supplement']; ?></td>
                    <td><?php echo $room->overview['information']; ?></td>
                    <td><?php echo e($room->max_adults); ?></td>
                    <td><?php echo e($room->max_child); ?></td>
                    <td><?php echo $room->is_book; ?></td>
                    <td><?php echo e($room->hotels->name); ?></td>

                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Do you want delete')" href="/admin/rooms/delete/<?php echo e($room->id); ?>"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/rooms/edit/<?php echo e($room->id); ?>">Edit</a></td>
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