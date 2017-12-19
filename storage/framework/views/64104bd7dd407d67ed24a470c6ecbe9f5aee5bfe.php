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
                <h1 class="page-header">Post
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <?php if(session('messagedelete')): ?>
                <span class="help-block" >
                                <?php echo e(session('messagedelete')); ?>

                            </span>
            <?php endif; ?>
            <?php if(session('notification')): ?>
                <span class="help-block" >
                                <?php echo e(session('notification')); ?>

                            </span>
            <?php endif; ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Titile</th>

                    <th>content</th>
                    <th>Image</th>
                    <th>Slug</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="odd gradeX" align="center">
                    <td><?php echo e($post->id); ?></td>
                    <td><?php echo e(isset($post->title)?$post->title:''); ?></td>
                    <td><?php echo str_limit($post->content, $limit = 200, $end = '...'); ?></td>
                    <td><img src="<?php echo e(route('img.view',['p'=>$post->image,'w'=>100,'q'=>80])); ?>" alt=""></td>
                    <td><?php echo isset($post->slug)?$post->slug:''; ?></td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Do you want delete')" href="/admin/post/delete/<?php echo e($post->id); ?>"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/post/edit/<?php echo e($post->id); ?>">Edit</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-6">

                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                        <ul class="pagination">
                            <?php echo e($posts->links()); ?>

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