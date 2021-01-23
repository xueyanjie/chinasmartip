<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			var pageName = 'navlist_en';
			var toPageName = 'navlist';
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
							<a href="<?php echo base_url();?>Main/aboutus_en">
								<div class="navspan"></div>
								<div class="navcon" id="navAbouten">About Us</div>
							</a>
						</div>
						<div class="nav1 navli">
							<a href="<?php echo base_url();?>Main/practices_en">
								<div class="navspan"></div>
								<div class="navcon" id="navPracticesen">Practices</div>
							</a>
						</div>
						<div class="nav1 navli">
							<a href="<?php echo base_url();?>Main/partners_e ">
								<div class="navspan"></div>
								<div class="navcon" id="navPartnersen">Professionals</div>
							</a>
						</div>
						<div class="nav1 navli">
							<a href="<?php echo base_url();?>Main/events_en">
								<div class="navspan"></div>
								<div class="navcon" id="navEventsen">News & Events</div>
							</a>
						</div>
						<div class="nav1 navli">
							<a href="<?php echo base_url();?>Main/contact_en">
								<div class="navspan"></div>
								<div class="navcon" id="navContacten">Contact Us</div>
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
								<span class="fr">CHINA SMART INTELLECTUAL PROPERTY LTD. <a href="https://beian.miit.gov.cn" target="_blank">京ICP备18041328号-1</a></span>
							</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>

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
		<?php $this->load->view('stats');?>
	</body>
</html>
