<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var pageName = '<?php echo $pageName; ?>';
		var toPageName = '<?php echo $pageName2; ?>';
		var lang = 'CN';
	</script>
	<!--#include file="header.html"-->
	<?php $this->load->view('header');?>
	<meta charset="utf-8" />
<meta name="format-detection" content="telephone=no">

<script type="text/javascript">
	host = '<?php echo base_url();?>';
</script>
<style>
	.partenterDetail{padding-left: 17px;padding-top: 5px;}
	.partnerDetailTop{padding-bottom: 42px;}
	.partenterAva{position: relative;width: 173px;float: left}
	.partenterAva .imgava{
		display:block;width: 125px;height: 125px;border-radius: 50%;-webkit-border-radius: 50%;
		border:2px solid #e3cbab;overflow: hidden;position: relative;z-index: 2;
		margin:14px 0 0 13px;
	}
	.avabg{width: 139px;height: 142px;background: url(<?php echo base_url();?>static/i/avabg.png) no-repeat 50% 50%;position: absolute;top: 0px;left: 0;}
	.partinfo .p2224{font-size: 22px;height: 24px;color:#d2ac79;padding-top: 23px;padding-bottom: 13px; }
	.partinfo .p1624{font-size: 16px;line-height: 24px;}
	.color9{color: #999999}
	.partnerDetailLi{padding-left: 15px;position: relative;font-size: 16px;line-height: 30px;color: #999999;}
	.partnerDetailLi::before{content: "";width: 5px;height: 5px;border-radius: 50%;background: #999;position: absolute;top:10px;left: 5px;}
</style>
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
					<div class="partenterDetail cl">
						<div class="cl partnerDetailTop">
							<div class="partenterAva">
								<img src="<?php echo base_url();?>static/i/person/<?php echo $photo; ?>" class="imgava"/>
								<div class="avabg"></div>
							</div>
							<div class="partinfo fl">
								<p class="p2224"><?php echo isset($name) ? $name : ''; ?></p>
								<?php
								if (isset($tags)) {
									foreach ($tags as $t) {
										echo '<p class="p1624 color9">' . $t . '</p>';
									}
								}
								?>
<!--								<p class="p1624 color9">合伙人</p>-->
							</div>
						</div>

						<!-- detail information -->
						<div class="phold phold20"></div>
						<?php
						foreach ($titles as $k => $title) {
							$content = $contents[$k];
							echo '<p class="p_title">' . $title . '</p>';
							echo '<p class="p14l22">' . $content . '</p>';
						}
						?>
					</div>
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
