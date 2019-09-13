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
	<script type="text/javascript" src="<?php echo base_url();?>ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>ueditor/ueditor.all.js"></script>
	<script type="text/javascript"></script>
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


            <h3 class="page-header">添加/编辑新闻</h3>

			<form role="form">
				<div class="form-group">
					<label for="name">标题</label>
					<input type="text" class="form-control" id="txtTitle" placeholder="请输入新闻标题">
				</div>
				<div class="form-group">
					<label for="name">分类</label>
					<select id="sel_cate">
						<?php
							if (!empty($cates)) {
								foreach ($cates as $cate) {
									?>
									<option value="<?php echo $cate["cat_id"]; ?>"><?php echo $cate["cat_name"]; ?></option>
									<?php
								}
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="name">内容</label>
					<!-- 加载编辑器的容器 -->
					<script id="container" name="content" type="text/plain">
						这里写你的初始化内容
					</script>
				</div>
				<button id="btn_submit" type="button" class="btn btn-primary" data-dismiss="modal">保存</button>
			</form>

        </div>


    </div>

	<!-- 实例化编辑器 -->
	<script type="text/javascript">
		var ue = UE.getEditor('container');
		var ueReady = false;
		ue.ready(function() { ueReady = true; });
	</script>

    <script type="text/javascript">
        var curr_id = '<?php echo $id; ?>';
        //菜单初始化
        function renderMenu(){
            $('.mi').removeClass('active');
            $('#mi_action_mgr').addClass('active');
        }

        function fillInfo() {
            clearInfo();//先清空信息
            var url = '/AdminCate/get?id='+curr_id;
            $.get(url, {}, function(res){
                if (!res.data || !res.data.cat_id) {return false;}
                $('#txtTitle').val(res.data.cat_name);
            });
        }

        function clearInfo() {
            $('#txtTitle').val('');
			ue.setContent('');
        }

        function submitInfo() {
        	if (ueReady == false) {
				showTip('error','<strong>编辑器尚未初始化成功</strong>');
				return;
			}
        	var val = $('#txtTitle').val();
			var html = ue.getContent();
        	if (val == "") { return false; }
            //构造参数并提交
            var params = {
                //id:curr_id,
                title:$('#txtTitle').val(),
				content:html,
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



        $(function(){
            renderMenu();
            //编辑
            $('.a_edit').click(function(){
                curr_id = $(this).attr('cat_id');//记录当前的活动id
                fillInfo();
            });
            //新增
            $('#btnAddAction').click(function(){
                curr_id = '0';
                clearInfo();//清空表单信息
            });
            $('#btn_submit').click(submitInfo);
            //初始化datepicker
        });
    </script>
</body>
</html>
