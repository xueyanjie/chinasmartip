<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			var pageName = 'ENnavlist.shtml';
			var toPageName = 'navlist.shtml';
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
							<a href="ENAboutUs.shtml">
								<div class="navspan"></div>
								<div class="navcon" id="navAbouten">About Us</div>
							</a>
						</div>
						<div class="nav1 navli">
							<a href="ENPractices.shtml">
								<div class="navspan"></div>
								<div class="navcon" id="navPracticesen">Practices</div>
							</a>
						</div>
						<div class="nav1 navli">
							<a href="ENPartners.shtml">
								<div class="navspan"></div>
								<div class="navcon" id="navPartnersen">Professionals</div>
							</a>
						</div>
						<div class="nav1 navli">
							<a href="ENEvents.shtml">
								<div class="navspan"></div>
								<div class="navcon" id="navEventsen">Events</div>
							</a>
						</div>
						<div class="nav1 navli">
							<a href="ENContact.shtml">
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
								<span class="fr">CHINA SMART INTELLECTUAL PROPERTY LTD.</span>
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
