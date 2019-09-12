<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			var pageName = 'Practices.shtml';
			var toPageName = 'ENPractices.shtml';
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
						</div>
						<div class="fl navright">
							<!--<div class="phold phold105"></div>-->
							<!--<img src="static/i/making.png" class="imgmap"/>-->
							<div class="phold phold10"></div>
							<img src="<?php echo base_url();?>static/i/practices.gif" class="imgmap"/>
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