<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'common/header.php'; ?>
    <style>
        .reset_action{ cursor:pointer;color:red; }
    </style>
</head>
<body>
    <?php include 'common/navigation.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <?php include 'common/left.php'; ?>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <!-- 弹窗 -->
            <div class="alert alert-success" role="alert" style="display:none;">...</div>
            <div class="alert alert-info" role="alert" style="display:none;">...</div>
            <div class="alert alert-warning" role="alert" style="display:none;">...</div>
            <div class="alert alert-danger" role="alert" style="display:none;">...</div>


            <h3 class="page-header">分类管理</h3>
            <div style="margin:10px;">
                <button id="btnAddAction" class="btn btn-primary" type="button" data-toggle="modal" data-target="#win_edit">新增分类</button>
            </div>
            <table class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <td>分类id</td>
                        <td>名称</td>
                        <td>更新时间</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                if (isset($list) && !empty($list)) {
                    foreach ($list as $item) {
                        echo '<tr>';
                        echo '<td>' . $item['cat_id'] . '</td>';
                        echo '<td>' . $item['cat_name'] . '</td>';
                        echo '<td>' . $item['update_time'] . '</td>';
                        //操作区域
                        echo '<td><a class="a_edit" style="cursor:pointer;" data-toggle="modal" data-target="#win_edit" action_id="'.$item['cat_id'].'">编辑</a>';//|<a>删除</a>
                        $url = '/AdminLottery/winlog?pn=1&pz=25&action_id=' . $item['cat_id'];
                        echo '|<a href="' . $url . '">中奖记录</a>';
                        $status_url = '/AdminLottery/actionStatus?action_id=' . $item['cat_id'];
                        echo '|<a href="' . $status_url . '">概览</a>';
                        $prizemgr = '/AdminPrize/getlist?action_id=' . $item['cat_id'];
                        echo '|<a href="' . $prizemgr . '">奖品管理</a>';
                        echo '|<a class="reset_action" action_id="' . $item['cat_id'] . '" title="' . $item['name'] . '">重置</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                }
                ?>
                </tbody>
            </table>
            <div id="div_pager">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-default"><a href="/AdminLottery/getActionList?pn=1&pz=<?php echo $pz;?>">首页</a></button>
                    <button type="button" class="btn btn-default"><a href="/AdminLottery/getActionList?pn=<?php echo intval($pn)>1 ? intval($pn)-1 : 1; ?>&pz=<?php echo $pz;?>">上一页</a></button>
                    <button type="button" class="btn btn-default"><a href="/AdminLottery/getActionList?pn=<?php echo intval($pn)<intval($pm) ? intval($pn)+1 : $pm; ?>&pz=<?php echo $pz;?>">下一页</a></button>
                    <button type="button" class="btn btn-default"><a href="/AdminLottery/getActionList?pn=<?php echo $pm; ?>&pz=<?php echo $pz;?>">末页</a></button>
                </div>
            </div>
        </div>
    </div>

    <!--弹窗：新增和修改-->
    <div class="modal fade" id="win_edit"  >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="win_eidt_title">新增/编辑抽奖活动</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">活动名称:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="txtTitle" placeholder="请输入活动名称">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">活动描述:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="txtDesc" placeholder="请输入活动描述">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">开始时间:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="txtStartTime" placeholder="开始时间">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">结束时间:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="txtEndTime" placeholder="结束时间">
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-sm-3 control-label">单人每日抽奖次数:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="txtOneDayDrawNum" placeholder="0表示没有限制">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">单人每日中奖次数:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="txtOneDayWinNum" placeholder="0表示没有限制">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">单人每期中奖次数:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="txtOneCycleWinNum" placeholder="0表示没有限制">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">风险控制开关:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="txtRiskCtrl" placeholder="0表示没有限制">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button id="btn_edit_submit" type="button" class="btn btn-primary" data-dismiss="modal">保存</button>
                </div>
            </div>
        </div>
    </div>




    <script type="text/javascript">
        var curr_aid = '';
        //菜单初始化
        function renderMenu(){
            $('.mi').removeClass('active');
            $('#mi_action_mgr').addClass('active');
        }

        function fillInfo() {
            clearInfo();//先清空信息
            var url = '/Lottery/get?id='+curr_aid;
            $.get(url, {}, function(res){
                if (!res.data || !res.data.action_id) {return false;}
                $('#txtTitle').val(res.data.title);
                $('#txtDesc').val(res.data.desc);
                $('#txtStartTime').val(res.data.start_time);
                $('#txtEndTime').val(res.data.end_time);
                $('#txtOneDayDrawNum').val(res.data.one_day_draw_num);
                $('#txtOneDayWinNum').val(res.data.one_day_win_num);
                $('#txtOneCycleWinNum').val(res.data.one_cycle_win_num);
                $('#txtRiskCtrl').val(res.data.risk_control_switch);
            });
        }

        function clearInfo() {
            $('#txtTitle').val('');
            $('#txtDesc').val('');
            $('#txtStartTime').val('');
            $('#txtEndTime').val('');
            $('#txtOneDayDrawNum').val('');
            $('#txtOneDayWinNum').val('');
            $('#txtOneCycleWinNum').val('');
            $('#txtRiskCtrl').val('');
        }

        function submitInfo() {
            //todo:非空验证
            //构造参数并提交
            var params = {
                //id:curr_aid,
                title:$('#txtTitle').val(),
                desc:$('#txtDesc').val(),
                start_time:$('#txtStartTime').val(),
                end_time:$('#txtEndTime').val(),
                one_day_draw_num:$('#txtOneDayDrawNum').val(),
                one_day_win_num:$('#txtOneDayWinNum').val(),
                one_cycle_win_num:$('#txtOneCycleWinNum').val(),
                risk_control_switch:$('#txtRiskCtrl').val(),
            };
            if (curr_aid!='0') {
                params['id'] = curr_aid;
            }
            var url = '/Lottery/set';
            $.post(url, params, function(res){
                if (res) {
                    if (res.status == 0) {
                        showTip('success','<strong>保存成功</strong>');
                        setTimeout(function(){location.reload();},1500);
                        return;
                    }
                }
                showTip('danger','<strong>保存失败</strong>');
            });
        }

        $(function(){
            renderMenu();
            //编辑
            $('.a_edit').click(function(){
                curr_aid = $(this).attr('action_id');//记录当前的活动id
                fillInfo();
            });
            //新增
            $('#btnAddAction').click(function(){
                curr_aid = '0';
                clearInfo();//清空表单信息
            });
            $('#btn_edit_submit').click(submitInfo);
            //初始化datepicker
            $.datepicker.setDefaults($.datepicker.regional['zh-CN']);
            $('#txtStartTime,#txtEndTime').datetimepicker({
                dateFormat: 'yy-mm-dd',
                showSecond: true,
                timeFormat: 'hh:mm:ss'
            });
            //重置抽奖活动
            $('.reset_action').click(function(){
                var action_id = $(this).attr('action_id');
                var title = $(this).attr('title');
                bootbox.confirm({
                    size: "small",
                    message: "确认清除活动<strong>"+title+"</strong>的数据？",
                    callback: function(result){
                        if (result == true) {
                            $.post('/Lottery/reset',{id:action_id},function(res){
                                if (res && res.status == '0') {
                                    bootbox.alert({
                                        size: "small",
                                        title: "操作成功",
                                        message: title+"的数据已重置",
                                        //callback: function(){ /* your callback code */ }
                                    })
                                } else {
                                    bootbox.alert({
                                        size: "small",
                                        title: "操作失败",
                                        message: title+"的数据未能重置",
                                        //callback: function(){ /* your callback code */ }
                                    })
                                }
                            });
                        }
                    }
                })
            });
        });
    </script>
</body>
</html>
