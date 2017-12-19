<?php
/**
 * Created by PhpStorm.
 * User: thehung
 * Date: 29/08/2017
 * Time: 4:17 CH
 */ ?>
        <!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
 <?php $__env->startSection('content'); ?> <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User <small><?php echo e($user->name); ?></small></h1>
            </div><!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/user/edit/<?php echo e($user->id); ?>" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                    <div class="form-group">
                        <label for="name">Name</label> <input class="form-control" name="name" type="text" value="<?php echo e($user->name); ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label> <input class="form-control" name="email" type="text" value="<?php echo e($user->email); ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">Password</label>
                        <input class="form-control" id="password" name="password" required="required" type="password">
                    </div>
                    <div class="form-group">
                        <select id="" name="permission">
                            <option value="1">
                                Admin
                            </option>
                            <option value="2">
                                Edittor
                            </option>
                            <option value="3">
                                Author
                            </option>
                        </select>
                    </div><button class="btn btn-default" type="submit">User Edit</button> <button class="btn btn-default" type="reset">Reset</button>

                </form>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function(){
            $('input[type="password"]').after(' <input type="checkbox" class="check" /> Show password');
            $('.check').change(function(){
                var prev = $(this).prev();
                var value = prev.val();
                var type = prev.attr('type');
                var name = prev.attr('name');
                var id = prev.attr('id');
                var klass = prev.attr('class');
                var new_type = (type == 'password') ? 'text' : 'password';
                prev.remove();
                $(this).before('<input type="'+new_type+'" value="' +value+ '" name="' +name+ '" value="' +value+ '"id="' +id+ '" class="' +klass+ '" />');

            });
        })
    </script>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('admin.layuot.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>