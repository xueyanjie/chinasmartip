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


            <h3 class="page-header">添加/编辑新闻</h3>

			<form role="form">
				<div class="form-group">
					<label for="name">标题</label>
					<input type="text" class="form-control" id="txtTitle" placeholder="请输入新闻标题">
				</div>
			</form>

        </div>


    </div>


    <script type="text/javascript">
        var curr_id = '';
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
            $('#btn_edit_submit').click(submitInfo);
            //初始化datepicker
        });
    </script>
</body>
</html>
