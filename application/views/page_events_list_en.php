<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var pageName = 'ENEventslist1.shtml'
		var toPageName = 'Eventslist1.shtml';
		var lang = 'EN';
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
				<div class="fl navright">
					<!--<div class="phold phold105"></div>-->
					<!--<img src="static/i/making.png" class="imgmap"/>-->
					<p class="p1624marleft"><span class="spand"></span><?php echo $item['title']; ?></p>
					<p class="p14l22 marginLeft30"><?php echo $item['content']; ?></p>
					<a class="ENa_back" href="<?php echo base_url();?>Main/events_en"></a>
				</div>
			</div>
		</div>
		<div class="footerwrap footerwrapll">
			<div class="line_box">
				<div class="line"></div>
			</div>
			<div class="cl">
				<div class="phold phold65"></div>
				<div class="footerlogo fl"></div>
				<div class="footlink fr">
					<p class="ptel cl"><span class="span1">86-10-65184418</span> <span class="fr"><a href="mailto:info@chinasmartip.com">info@chinasmartip.com</a></span></p>
					<p class="pEng">
						<span class="fr">CHINA SMART INTELLECTUAL PROPERTY LTD. <a href="https://beian.miit.gov.cn" target="_blank">京ICP备18041328号</a></span>
					</p>
				</div>

			</div>
		</div>
	</div>

</div>


<script>
	$(function(){
		isLoaded(function(){
			$('.wrapper').show();
		})
	})
</script>
<?php $this->load->view('stats');?>
</body>
</html>
