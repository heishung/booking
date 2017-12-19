
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="/css/bulma.min.css" rel="stylesheet">
    <link href="/css/basic.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/pushy.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/jquery-ui-1.9.2.custom.min.js"></script>
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo $__env->yieldContent('jquery'); ?>
</head>
<body>
<header class="">
    <?php echo $__env->make('frontend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
<div class="h-box-sl-fr">
    <?php echo $__env->make('frontend.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div><!--end h-box-sl-fr-->
<div class="content">
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldContent('hotel'); ?>
</div><!--endcontent-->
<div id='footer'>
    <?php echo $__env->make('frontend.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div><!--footer-->
<?php echo $__env->yieldContent('script'); ?>
<script src="/js/pushy.min.js"></script>
<script>
    $(document).ready(function() {
        $('.modal-button').click(function() {
            $('.modal').addClass('is-active');
        });
        $('.delete').click(function () {
            $('.modal').removeClass('is-active');
        });
        $('.model-cancel').click(function () {
            $('.modal').removeClass('is-active');
        });
    });


</script>
<script>
    $("#CheckInDatePicker").datepicker({
        defaultDate: "+0",
        changeMonth: true,
        dateFormat: "mm-dd-yy",
        minDate: "+0",
    });
    $("#CheckUotDatePicker").datepicker({});
    /*$("#CheckInDatePicker").datepicker({

        defaultDate: "+0",
        changeMonth: true,
        dateFormat: "mm-dd-yy",
        minDate: "+0",
        onSelect: function(dateText, inst) {
            var d = $.datepicker.parseDate(inst.settings.dateFormat, dateText);
            d.setDate(d.getDate() + parseInt($('#tour_id').val()) );
            $("#CheckOutDatePicker").val($.datepicker.formatDate(inst.settings.dateFormat, d));

        },

        onClose: function(selectedDate) {
            $("#CheckOutDatePicker").datepicker("option", "minDate", selectedDate);

        }

    });*/

</script>
<script>
    $(document).ready(function () {
        var url = window.location;
        // Will only work if string in href matches with location
        $('ul a[href="' + url + '"]').parent().addClass('is-active');

        // Will also work for relative and absolute hrefs
        $('ul a').filter(function () {
            return this.href == url;
        }).parent().addClass('is-active').parent().parent().addClass('is-active');
    });
</script>
</body>
</html>