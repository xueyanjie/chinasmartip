<!DOCTYPE html>
<html>
<head>
	<title>汉智嘉成-后台</title>
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
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

		<!-- 弹窗 -->
		<div class="alert alert-success" role="alert" style="display:none;">...</div>
		<div class="alert alert-info" role="alert" style="display:none;">...</div>
		<div class="alert alert-warning" role="alert" style="display:none;">...</div>
		<div class="alert alert-danger" role="alert" style="display:none;">...</div>


		<h3 class="page-header"></h3>

		<form role="form">
			<div class="form-group">
				<label for="name">用户名</label>
				<input type="text" class="form-control" id="txtUserName" placeholder="请输入用户名" />
			</div>
			<div class="form-group">
				<label for="name">密码</label>
				<input type="password" class="form-control" id="txtPassword" placeholder="请输入用户名" />
			</div>
			<button id="btn_submit" type="button" class="btn btn-primary" data-dismiss="modal">保存</button>
		</form>
	</div>


</div>
</body>
</html>
