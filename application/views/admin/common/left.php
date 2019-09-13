<div class="col-sm-3 col-md-2 sidebar">

    <div id="div_mp_lottery" group="lottery" class="menu_parent">内容管理<p style="float:right;">-</p></div>
    <ul class="nav nav-sidebar" id="lottery_ul">
        <li id="mi_action_mgr" class="mi">
            <a id="mi_action_mgr_a" href="/AdminLottery/getActionList" class="mia">
                分类管理<span class="sr-only">(current)</span>
            </a>
        </li>
        <li id="mi_prize_mgr" class="mi">
            <a id="mi_prize_mgr_a" href="/AdminPrize/getlist" class="mia">新闻管理<span class="sr-only">(current)</span></a>
        </li>
    </ul>
    <!--
    <ul class="nav nav-sidebar">
        <li><a href="">Nav item again</a></li>
        <li><a href="">One more nav</a></li>
        <li><a href="">Another nav item</a></li>
    </ul>
    -->


</div>





<style>
    .menu_parent{
        cursor:pointer;
        color:#337ab7;
        margin-left: -10px;
        font-size:16px;
        padding: 5px 10px 5px 0;
    }
    .menu_parent:hover{background-color: #eee;}
</style>

<script type="text/javascript">
    $(function(){
        $('.menu_parent').click(function(){
            var group = $(this).attr('group');
            $('#'+group+'_ul').toggle(200);
            var txt = $($(this).find('p')[0]).html();
            if (txt == '+') { $($(this).find('p')[0]).html('-'); }
            else { $($(this).find('p')[0]).html('+'); }
        });
    });
</script>
