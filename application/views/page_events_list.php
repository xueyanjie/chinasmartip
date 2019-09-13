<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var pageName = 'Eventslist1.shtml';
		var toPageName = 'ENEventslist1.shtml';
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
				<div class="fl navright">
					<!--<div class="phold phold105"></div>-->
					<p class="p1624marleft"><span class="spand"></span><?php echo $item['title']; ?></p>
					<p class="p14l22 marginLeft30"><?php echo $item['content']; ?></p>
					<!--<img src="static/i/making.png" class="imgmap"/>-->
					<a class="a_back" href="<?php echo base_url();?>Main/events"></a>
				</div>
			</div>
		</div>
		<!--#include file="footer.html"-->
	</div>

</div>
</body>

<script>
	$(function(){
		isLoaded(function(){
			$('.wrapper').show();
		})
	})
</script>
</html>
