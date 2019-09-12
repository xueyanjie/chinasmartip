<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var pageName = 'navlist.shtml';
		var toPageName = 'ENnavlist.shtml';
		var lang = 'CN';
	</script>
	<!--#include file="header.html"-->
	<?php $this->load->view('header');?>
</head>
<body>
<div class="wrapper wrapperbg">
	<div class="mainWrap">
		<div class="headwrap cl">
			<!--#include file="CommonNavigation.html"-->
			<?php $this->load->view('commonnavigation'); ?>
		</div>
		<div class="conWrap conWrapNav">
			<div class="navbanner">
				<ul class="bannerbox">
					<li class="bannerLi1"></li>
					<li class="bannerLi2"></li>
				</ul>
			</div>
			<div class="phold phold20"></div>
			<div class="navul cl">
				<div class="navline"></div>
				<div class="nav1 navli navli1">
					<a href="<?php echo base_url();?>/Main/aboutus">
						<div class="navspan"></div>
						<div class="navcon" id="navAbout">关于我们</div>
					</a>
				</div>
				<div class="nav1 navli">
					<a href="<?php echo base_url();?>/Main/parctices">
						<div class="navspan"></div>
						<div class="navcon" id="navPractices">服务领域</div>
					</a>
				</div>
				<div class="nav1 navli">
					<a href="<?php echo base_url();?>/Main/partners">
						<div class="navspan"></div>
						<div class="navcon" id="navPartners">专业团队</div>
					</a>
				</div>
				<div class="nav1 navli">
					<a href="<?php echo base_url();?>/Main/events">
						<div class="navspan"></div>
						<div class="navcon" id="navEvents">培训与活动</div>
					</a>
				</div>
				<div class="nav1 navli">
					<a href="<?php echo base_url();?>/Main/contact">
						<div class="navspan"></div>
						<div class="navcon" id="navContact">联络我们</div>
					</a>
				</div>
			</div>
		</div>
		<div class="phold phold18"></div>
		<div class="footerwrap">
			<div class="line_box">
				<div class="line"></div>
			</div>
			<div class="cl">
				<div class="phold phold65"></div>
				<div class="footerlogo fl"></div>
				<div class="footlink fr">
					<p class="ptel cl"><span class="span1">86-10-65184418</span> <span class="fr"><a href="mailto:info@chinasmartip.com">info@chinasmartip.com</a></span></p>
					<p class="pEng">
						<span class="fr">北京汉智嘉成知识产权代理有限公司</span>
					</p>
				</div>
			</div>
		</div>
	</div>

</div>
</body>
<script type="text/javascript">
	function changeTo(selector, num){
		//console.log(selector+','+num);
		$(selector).find("li").eq(num).fadeIn(1000);
		$(selector).find("li").eq(num-1).fadeOut(1000);

	}

	function createInterval(selector) {
		var curIndex = 1;
		setInterval(function(){
			changeTo(selector, curIndex);
			if(curIndex < $(selector).find("li").length-1){ curIndex ++; }else{ curIndex = 0;}
		}, 4000);
	}
	$(function(){
		createInterval('.bannerbox');
	})
</script>
</html>
