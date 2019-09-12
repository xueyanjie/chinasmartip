<script type="text/javascript">
    if (lang == 'CN') {
        var html = '<a class="backindex fl" href="<?php echo base_url();?>/Main/navlist">首页</a>';
        html += '<a class="backindex fr" href="'+toPageName+'">EN</a>';
        document.write(html);
    } else if (lang = 'EN') {
        var html = '<a class="backindex fl" href="<?php echo base_url();?>/Main/navlist_en">Home</a>';
        html += '<a class="backindex fr" href="'+toPageName+'">中文</a>';
        document.write(html);
    }
</script>
