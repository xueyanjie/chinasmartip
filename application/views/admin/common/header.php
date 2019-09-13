<link href="<?php echo base_url();?>static/c/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>static/c/dashboard.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>static/j/jquery.1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/j/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/j/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/j/bootbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/j/jquery.form.js"></script>
<style>
    .ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }
    .ui-timepicker-div dl { text-align: left; }
    .ui-timepicker-div dl dt { height: 25px; margin-bottom: -25px; }
    .ui-timepicker-div dl dd { margin: 0 10px 10px 65px; }
    .ui-timepicker-div td { font-size: 90%; }
    .ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }
    .ui_tpicker_hour_label,.ui_tpicker_minute_label,.ui_tpicker_second_label,
    .ui_tpicker_millisec_label,.ui_tpicker_time_label{padding-left:20px}
</style>


<script type="text/javascript">
    function showTip(type, html) {
        if (!type) {type = 'success';}
        if (!html) {html = 'success';}
        $('.alert-'+type).html(html).show();
    }

    function hideTip(type) {
        if (!type) {type = 'success';}
        $('.alert-'+type).html('').hide();
    }

    function closeTip() {
        $('.alert').hide();
    }
</script>
