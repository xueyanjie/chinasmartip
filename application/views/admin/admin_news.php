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


            <h3 class="page-header">新闻管理</h3>
            <div style="margin:10px;">
                <button id="btnAddNews" class="btn btn-primary" type="button" href="<?echo base_url();?>/AdminNews/page_edit">新增</button>
            </div>
            <table class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                    <tr>
						<td>id</td>
                        <td>分类名称</td>
                        <td>标题</td>
                        <td>更新时间</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                if (isset($list) && !empty($list)) {
                    foreach ($list as $item) {
                        echo '<tr>';
                        echo '<td>' . $item['id'] . '</td>';
                        echo '<td>' . $item['cat_name'] . '</td>';
						echo '<td>' . $item['title'] . '</td>';
                        echo '<td>' . $item['update_time'] . '</td>';
                        //操作区域
                        echo '<td><a target="_blank" href="' . base_url() . 'AdminNews/page_edit?id=' . $item['id'] . '">编辑</a>';//|<a>删除</a>
                        echo '|<a class="a_del" href="">删除</a>';
                        $news_url = '/AdminNews/index?cat_id=' . $item['id'];
                        echo '|<a href="' . $news_url . '">新闻管理</a>';
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
                    <h4 class="modal-title" id="win_eidt_title">新增/编辑分类</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">分类名称:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="txtCatName" placeholder="请输入活动名称">
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
        var curr_id = '';
        //菜单初始化
        function renderMenu(){
            $('.mi').removeClass('active');
            $('#mi_news_mgr').addClass('active');
        }

        function fillInfo() {
            clearInfo();//先清空信息
            var url = '/AdminCate/get?id='+curr_id;
            $.get(url, {}, function(res){
                if (!res.data || !res.data.cat_id) {return false;}
                $('#txtCatName').val(res.data.cat_name);
            });
        }

        function clearInfo() {
            $('#txtCatName').val('');
        }

        function submitInfo() {
        	var val = $('#txtCatName').val();
        	if (val == "") { return false; }
            //构造参数并提交
            var params = {
                //id:curr_id,
                cat_name:$('#txtCatName').val(),
            };
            if (curr_id!='0') {
                params['id'] = curr_id;
            }
            var url = '/AdminCate/set';
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

        function del() {
			var val = $('#txtCatName').val();
			var url = '/AdminCate/del';
			bootbox.confirm({
				size: "small",
				message: "确认删除分类<strong>"+val+"</strong>吗？",
				callback: function(result){
					if (result == true) {
						$.post(url,{id:curr_id},function(res){
							if (res && res.status == '0') {
								bootbox.alert({
									size: "small",
									title: "操作成功",
									message: "已删除",
									//callback: function(){ /* your callback code */ }
								})
							} else {
								bootbox.alert({
									size: "small",
									title: "操作失败",
									message: "删除失败",
									//callback: function(){ /* your callback code */ }
								})
							}
						});
					}
				}
			});

		}

        $(function(){
            renderMenu();
            //编辑
            $('.a_edit').click(function(){
                curr_id = $(this).attr('cat_id');//记录当前的活动id
                fillInfo();
            });
            //新增
            $('#btnAddNews').click(function(){
                curr_id = '0';
                clearInfo();//清空表单信息
				var href = $(this).attr('href');
				location.href = href;
            });
            $('#btn_edit_submit').click(submitInfo);
            //初始化datepicker
            //重置抽奖活动
            $('.a_del').click(del);
        });
    </script>
</body>
</html>
