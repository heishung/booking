<?php
/**
 * Created by PhpStorm.
 * User: thehung
 * Date: 28/08/2017
 * Time: 5:21 CH
 */?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin - Hưng Nghiêm</title>
    <base href="<?php echo e(asset('')); ?>">
    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->

    
    <link href="admin_asset/dist/css/jquery-confirm.css" rel="stylesheet">
<?php echo $__env->yieldContent('head'); ?>

</head>

<body>

<div id="wrapper">

   <?php echo $__env->make('admin.layuot.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->yieldContent('content'); ?>

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="admin_asset/dist/js/sb-admin-2.js"></script>

<!-- DataTables JavaScript -->



<!-- Page-Level Demo Scripts - Tables - Use for reference -->

<script src="admin_asset/dist/js/jquery-confirm.min.js"></script>

<script type="text/javascript" language="javascript" src="admin_asset/ckeditor/ckeditor.js" ></script>
<script>
    $('.example21-2').on('click', function () {
        $.confirm({
            icon: 'fa fa-warning', // glyphicon glyphicon-heart
            title: 'font-awesome'
        });

    });
</script>

<?php echo $__env->yieldContent('script'); ?>
</body>

</html>

