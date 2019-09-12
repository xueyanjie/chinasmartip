<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			var pageName = 'ENAboutUs.shtml';
			var toPageName = 'AboutUs.shtml';
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
							<div class="phold phold20"></div>
							<p class="p14l22"  style="text-align: justify;">
								<img src="<?php echo base_url();?>static/i/aboutUsEn.gif" style="float: right; vertical-align: top;display: inline; width: 350px;margin-left: 25px; margin-bottom:25px;"/>
								CHINA SMART is a full-service intellectual property law firm in China.  Our firm has a group of highly experienced and dedicated attorneys, providing tailored services to clients globally in an efficient and cost-effective manner.<br/><br/>
								Our practice encompasses consultation, prosecution, administrative and judicial proceedings related to patents, trademarks, copyrights, domain names, trade secrets, unfair competition and other intellectual property-related matters.<br/><br/>
								We will make every effort to achieve the sustainable development together with our clients.
							</p>
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
								<span class="fr">CHINA SMART INTELLECTUAL PROPERTY LTD.</span>
							</p>
						</div>
						
					</div>
				</div>
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
