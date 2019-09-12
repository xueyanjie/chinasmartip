<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var pageName = 'index.shtml';
		var toPageName = 'ENindex.shtml';
		var lang = 'CN';
	</script>
	<meta charset="utf-8" />

	<link rel="stylesheet" href="static/c/demo.css" />
	<link rel="stylesheet" href="static/c/style.css" />
	<link rel="stylesheet" href="static/c/add.css" />

	<script type="text/javascript" src="static/j/jquery.1.7.1.min.js" ></script>
	<script type="text/javascript" src="static/j/index.js" ></script>
	<title>
		北京汉智嘉成知识产权代理有限公司
	</title>
</head>
<body>
<div class="wrapper displaynone indexlogo">
	<div class="mainWrap">
		<!--<div class="headwrap cl">
            <a class="backindex fl">首页</a>
            <a class="backindex fr">EN</a>
        </div>-->
		<div class="conWrap">
			<div class="congo">
				<a class="gotoChina" href="navlist.shtml">中</a>|<a class="gotoEnglish" href="ENnavlist.shtml">EN</a>
			</div>
		</div>
	</div>
</div>
</body>

<script>
	$(function(){
		$('.conWrap').height($(window).height()+'px');
		isLoaded(function(){
			$('.wrapper').show();
		})
	})
</script>
</html>

