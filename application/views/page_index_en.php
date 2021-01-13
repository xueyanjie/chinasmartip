<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
	<!--<META content="IE=7.0000" http-equiv="X-UA-Compatible">-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>China Smart Intellectual Property Ltd.</title>
	<meta name="keywords" content="Beijing Hanzhijiacheng Intellectual Property Agency Ltd." />
	<meta name="description" content="China Smart Intellectual Property Ltd. (China Smart IP) is a private IP law firm designated by the State Intellectual Property Office of China (SIPO) and Chinese Trademark Office (CTMO) of State Administration for Industry and Commerce and registered at the Copyright Protection Center of China, with the purpose of providing comprehensive legal services in intellectual property industry related to patents (inventions, utility models and designs), trademarks, copyrights, anti-unfair competition etc. and intangible assets management." />
	<LINK rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" />
	<link href="<?php echo base_url();?>css/lanrenzhijia.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.jslides.js"></script>
	<!--顶部菜单-->
	<script>
		location.href="<?php echo base_url();?>/Main/navlist_en";//跳转到新版官网英文版
		$(document).ready(function(){
			$("#nav li").hover(
				function(){
					$(this).children('ul').hide();
					$(this).children('ul').slideDown('fast');
				},
				function () {
					$('ul', this).slideUp('fast');
				});
		});
	</script>
</head>
<body>
<div class="main">
	<div class="head">
		<div class="topright">
			<a href="/index.html" title="中文网站">中文版</a> | <a href="/eindex.html" title="English site">English</a>
		</div>
	</div>
	<div id="lanrenzhijia">
		<ul id="slides">
			<li style="background:url('/uploadfile/2017971948551521.jpg') no-repeat center top"><a href="javascript:"></a></li>
			<li style="background:url('/uploadfile/2017971951363098.jpg') no-repeat center top"><a href="javascript:"></a></li>
			<li style="background:url('/uploadfile/2017971951477626.jpg') no-repeat center top"><a href="javascript:"></a></li>
		</ul>

	</div>

	<div id="content">
		<ul id="nav">
			<li class="dao">
				<a href='/eindex.html' target='_self'>Home</a>
			</li>
			<li class="dao">
				<a href='/eabout/1.html' target='_self'>About Us</a>
			</li>
			<li class="dao">
				<a href='/eabout/13.html' target='_self'>Traditional IP Service</a>
				<ul style="display: none;width:300px">
					<li style="width:260px"><a href='/eabout/13.html' target='_self'>Patents »</a>
						<ul style="display: none;width:260px; left:300px">
							<li style="width:220px"><a href='/eabout/13.html' target='_self'>Main Business</a>
							<li style="width:220px"><a href='/eabout/15.html' target='_self'>Correlated Business</a>
							<li style="width:220px"><a href='/eabout/21.html' target='_self'>Technical Fields</a>
						</ul>
					</li>
					<li style="width:260px;"><a href='/eabout/20.html' target='_self'>Trademarks</a>
					</li>
					<li style="width:260px;"><a href='/eabout/19.html' target='_self'>Copyright And Others</a>
					</li>
					<li style="width:260px; height:34px"><a href='/eabout/18.html' target='_self' style="line-height:16px">Intellectual Property Litigation And Non-Litigation Legal Services</a>
					</li>
				</ul>
			</li>
			<li class="dao">
				<a href='/eabout/22.html' target='_self'>Intangible Assets</a>
				<ul style="display: none;width:300px">
					<li style="width:260px;"><a href='/eabout/22.html' target='_self'>Patent Pooling</a>
					</li>
					<li style="width:260px;"><a href='/eabout/23.html' target='_self'>IP Management Trust</a>
					</li>
					<li style="width:260px;"><a href='/eabout/24.html' target='_self'>IP Financing</a>
					</li>
					<li style="width:260px;"><a href='/eabout/25.html' target='_self'>IP Transaction</a>
					</li>
					<li style="width:260px;"><a href='/eabout/26.html' target='_self'>Training & Events</a>
					</li>
					<li style="width:260px;"><a href='/eabout/27.html' target='_self'>Strategic Relationships</a>
					</li>
				</ul>
			</li>
			<li class="dao">
				<a href='/eabout/5.html' target='_self'>Contact Us</a>
			</li>

		</ul>
	</div>
	<div class="line">
		<div class="top after">
			<div class="lineleft"></div>
			<div class="lineright"></div>
			<div style="clear:both"></div>
		</div>
	</div>
	<div class="foot">
		<div class="fleft"><img src="/uploadfile/2017962239315797.png" style="width:150px" alt="China Smart Intellectual Property Ltd." title="China Smart Intellectual Property Ltd."/></div>
		<div class="fright">
			<p>
				<a href='/eabout/14.html' target='_self'>Privacy Policy</a>
				| <a href='/eabout/11.html' target='_self'>Terms Of Use</a>
				| <a href='/eabout/9.html' target='_self'>Service Policy</a>
				| <a href='/sitemap.xml' target='_blank'>Site Map</a>

				<Br />Beijing Hanzhijiacheng Intellectual Property Agency Ltd. All rights Reserved
				<br /> <a href="https://beian.miit.gov.cn" target="_blank">京ICP备18041328号</a>
			</p>
		</div>
		<div style="clear:both"></div>
	</div>
</div>
<?php $this->load->view('stats');?>

</body>
</html>
