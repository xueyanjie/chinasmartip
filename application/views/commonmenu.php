<script type="text/javascript">
    if (lang == 'CN') {
        var html = '<ul class="navleftul">';
        var on = pageName == 'AboutUs.shtml' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="AboutUs.shtml"><span class="span_circle"></span>关于我们</a></li>';
        on = pageName == 'Practices.shtml' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="Practices.shtml"><span class="span_circle"></span>服务领域</a></li>';
        on = pageName == 'Partners.shtml' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="Partners.shtml"><span class="span_circle"></span>专业团队</a></li>';
        on = pageName == 'Events.shtml' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="Events.shtml"><span class="span_circle"></span>培训与活动</a></li>';
        on = pageName == 'Contact.shtml' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="Contact.shtml"><span class="span_circle"></span>联络我们</a></li>';
        html += '</ul>';
        document.write(html);
    } else if (lang == 'EN') {
        var html = '<ul class="navleftul">';
        var on = pageName == 'ENAboutUs.shtml' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="ENAboutUs.shtml"><span class="span_circle"></span>About Us</a></li>';
        on = pageName == 'ENPractices.shtml' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="ENPractices.shtml"><span class="span_circle"></span>Practices</a></li>';
        on = pageName == 'ENPartners.shtml' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="ENPartners.shtml"><span class="span_circle"></span>Professionals</a></li>';
        on = pageName == 'ENEvents.shtml' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="ENEvents.shtml"><span class="span_circle"></span>Events</a></li>';
        on = pageName == 'ENContact.shtml' ? ' class="on" ' : '';
        html += '<li '+on+'><a href="ENContact.shtml"><span class="span_circle"></span>Contact Us</a></li>';
        html += '</ul>';
        document.write(html);
    }
    $(function(){
        $('#li_' + pageName).addClass('on');
    });
</script>

