
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="/css/bulma.min.css" rel="stylesheet">
    <link href="/css/basic.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/pushy.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/jquery-ui-1.9.2.custom.min.js"></script>
    @yield('css')
    @yield('jquery')
</head>
<body>
<header class="">
    @include('frontend.header')
</header>
<div class="h-box-sl-fr">
    @include('frontend.slide')
</div><!--end h-box-sl-fr-->
<div class="content">
    @yield('content')
    @yield('hotel')
</div><!--endcontent-->
<div id='footer'>
    @include('frontend.footer')
</div><!--footer-->
@yield('script')
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