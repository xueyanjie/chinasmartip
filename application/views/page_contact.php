<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var pageName = 'contact';
		var toPageName = 'contact_en';
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
			<?php $this->load->view('commonnavigation');?>
		</div>
		<div class="conWrap conWrapbg">
			<div class="phold phold40"></div>
			<div class="cl">
				<div class="fl navleft">
					<!--#include file="CommonMenu.html"-->
					<?php $this->load->view('commonmenu');?>
				</div>
				<div class="fl navright" id="navright">
					<img src="<?php echo base_url();?>static/i/map.jpg" class="imgmap"/>
					<div class="phold phold20"></div>
					<div id="copy_target">
						<p class="p16">北京汉智嘉成知识产权代理有限公司</p>
						<div class="phold phold5"></div>
						<!-- <p class="p14">地址：中国北京市东城区建国门内大街18号恒基中心办一14层1412 <span class="marginl10">邮政编码：100005</span></p>
						<p class="p14"><span class="connectSpanLeft">电话：86-10-65184418</span><span>传真：86-10-65184417</span></p>
						<p class="p14"><span class="connectSpanLeft">电子邮件：info@chinasmartip.com</span><span>网址：http://www.chinasmartip.com</span></p> -->
						<p class="p14">地址：中国北京市海淀区友谊宾馆颐园写字楼 <span class="marginl10">100873</span></p>
						<p class="p14"><span class="connectSpanLeft">电话：86-10-65184418</span><span>传真：86-10-65184417</span></p>
						<p class="p14"><span class="connectSpanLeft">电子邮件：info@chinasmartip.com</span><span>网址：http://www.chinasmartip.com</span></p>
					</div>
					<div class="btn_copy" id="btn_copy">复制联系方式</div>
				</div>
			</div>
		</div>

		<!--#include file="footer.html"-->
		<?php $this->load->view('footer');?>
	</div>

</div>


<script>
	$(function(){
		isLoaded(function(){
			$('.wrapper').show();
		});
		$('#btn_copy').click(function(){
			var node = document.getElementById('copy_target');
			oCopy(node);
			alert('已经复制到剪切板');
		});
	});


</script>
<?php $this->load->view('stats');?>
</body>
</html>

