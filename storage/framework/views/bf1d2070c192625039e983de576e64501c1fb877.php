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
                    <th>Category Parent</th>
                    <th>Status</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <tr class="odd gradeX" align="center">
                    <td>1</td>
                    <td>Tin Tức</td>
                    <td>None</td>
                    <td>Hiện</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                </tr>
                <tr class="even gradeC" align="center">
                    <td>2</td>
                    <td>Bóng Đá</td>
                    <td>Thể Thao</td>
                    <td>Ẩn</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                </tr>
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