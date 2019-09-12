<!DOCTYPE html>
<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			var pageName = 'Events.shtml';
			var toPageName = 'ENEvents.shtml';
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
							<a class="a_event" href="Eventslist2.shtml"><p class="p1624marleft"><span class="spand"></span>以色列报纸刊发了由汉智嘉成知识产权与Perel Law Office合著的文章</p></a>
							<a class="a_event" href="Eventslist1.shtml"><p class="p1624marleft"><span class="spand"></span>汉智嘉成知识产权取得专利和商标代理资质</p></a>
						
							<!--<img src="static/i/making.png" class="imgmap"/>-->
						</div>
					</div>
				</div>
				<!--#include file="footer.html"-->
				<?php $this->load->view('footer');?>
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
