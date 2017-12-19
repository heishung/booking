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

                        <th>Logo</th>
                        <th>Emailus</th>
                        <th>Hotline</th>
                        <th>Nameservice</th>
                        <th></th>
                        <th>Fax</th>
                        <th>Tel</th>
                        <th>Web</th>
                        <th>location </th>
                        <th>Phone</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $custom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="odd gradeX" align="center">
                            <td><img src="<?php echo e(route('img.view',['p'=>$customs->logo,'w'=>100,'q'=>80])); ?>" alt=""></td>
                            <td><?php echo e(isset($customs->header["emailus"])?$customs->header['emailus']:''); ?></td>
                            <td><?php echo e(isset($customs->header['hotline'])?$customs->header['hotline']:''); ?></td>
                            <td><?php echo e(isset($customs->header['nameservice'])?$customs->header['nameservice']:''); ?></td>
                            <td></td>
                            <td><?php echo isset($customs->footer['fax'])?$customs->footer['fax']:''; ?></td>
                            <td><?php echo isset($customs->footer['tel'])?$customs->footer['tel']:''; ?></td>
                            <td><?php echo isset($customs->footer['web'])?$customs->footer['web']:''; ?></td>
                            <td><?php echo isset($customs->footer['phone'])?$customs->footer['phone']:''; ?></td>
                            <td><?php echo isset($customs->footer['nameservice'])?$customs->footer['nameservice']:''; ?></td>


                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo e(route('geteditcustom',['id'=>$customs->id])); ?>">Edit</a></td>
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