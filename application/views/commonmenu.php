<script type="text/javascript">
    if (lang == 'CN') {
        var html = '<ul class="navleftul">';
        var on = pageName == 'aboutus' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="<?php echo base_url();?>/Main/aboutus"><span class="span_circle"></span>关于我们</a></li>';
        on = pageName == 'practices' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="<?php echo base_url();?>/Main/practices"><span class="span_circle"></span>服务领域</a></li>';
        on = pageName == 'partners' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="<?php echo base_url();?>/Main/partners"><span class="span_circle"></span>专业团队</a></li>';
        on = pageName == 'events' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="<?php echo base_url();?>/Main/events"><span class="span_circle"></span>培训与活动</a></li>';
        on = pageName == 'contact' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="<?php echo base_url();?>/Main/contact"><span class="span_circle"></span>联络我们</a></li>';
        html += '</ul>';
        document.write(html);
    } else if (lang == 'EN') {
        var html = '<ul class="navleftul">';
        var on = pageName == 'aboutus_en' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="<?php echo base_url();?>/Main/aboutus_en"><span class="span_circle"></span>About Us</a></li>';
        on = pageName == 'practices_en' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="<?php echo base_url();?>/Main/practices_en"><span class="span_circle"></span>Practices</a></li>';
        on = pageName == 'partners_en' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="<?php echo base_url();?>/Main/partners_en"><span class="span_circle"></span>Professionals</a></li>';
        on = pageName == 'events_en' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="<?php echo base_url();?>/Main/events_en"><span class="span_circle"></span>Events</a></li>';
        on = pageName == 'contact_en' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="<?php echo base_url();?>/Main/contact_en"><span class="span_circle"></span>Contact Us</a></li>';
        html += '</ul>';
        document.write(html);
    }
    $(function(){
        $('#li_' + pageName).addClass('on');
    });
</script>

