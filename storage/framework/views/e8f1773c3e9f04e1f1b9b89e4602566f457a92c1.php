
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="/css/bulma.min.css" rel="stylesheet">
    <link href="/css/basic.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/datepicker.css">
    <script src="/js/datepicker.min.js"></script>
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/pushy.css" rel="stylesheet"><!-- jQuery -->
    <?php echo $__env->yieldContent('css'); ?>
    <script src="/js/jquery-3.2.1.min.js">
    </script>
</head>
<body>
<header class="">
    <?php echo $__env->make('layuot.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
<div class="h-box-sl-fr">
    <?php echo $__env->make('layuot.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div><!--end h-box-sl-fr-->
<div class="content">
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldContent('hotel'); ?>
</div><!--endcontent-->
<div id='footer'>
    <?php echo $__env->make('layuot.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div><!--footer-->
<?php echo $__env->yieldContent('script'); ?>
<script src="/js/pushy.min.js"></script>


</body>
</html>