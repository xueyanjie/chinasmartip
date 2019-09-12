<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			var pageName = 'ENPartners.shtml';
			var toPageName = 'Partners.shtml';
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
							<div class="cl partentcimg">
								<div class="partentleft fl" style="width:340px;">
									<p class="p14l22">
										We have a group of highly experienced and dedicated attorneys, providing with practical IP solutions according to clients’ demands.
										<br/><br/>They have help clients receive several awards of Chinese Outstanding Patented Invention.
									</p>
								</div>
								<div class="partentright fr">
									<img src="<?php echo base_url();?>static/i/partnerEN.gif" />
								</div>
							</div>
							<div class="">
								<ul class="partnerul cl">
									<li class="li_partners" page="p_guhuimin_en.shtml">
										<span class="circle"></span>
										<p class="p_partenter">Ms. Huimin Gu</p>
										<div class="phold phold8"></div>
										<p class="p14 p14ex">21 years of experience</p>
										<p class="p14 p14ex">Electronic & computer technologies</p>
									</li>
									<li id="p_jyx_en" class="li_partners" page="p_jiangyuxing_en.shtml">
										<span class="circle"></span>
										<p class="p_partenter">Mr. Daniel Jiang</p>
										<div class="phold phold8"></div>
										<p class="p14 p14ex">11 years of experience</p>
										<p class="p14 p14ex">Mechanical & electrical engineering</p>
									</li>
									<li class="li_partners" page="p_jiangjin_en.shtml">
										<span class="circle"></span>
										<p class="p_partenter">Mr. Jin Jiang</p>
										<div class="phold phold8"></div>
										<p class="p14 p14ex">10 years of experience</p>
										<p class="p14 p14ex">Electrical automation & engineering</p>
									</li>
								</ul>
								<ul class="partnerul cl">
									<li class="li_partners" page="p_suyan_en.shtml">
										<span class="circle"></span>
										<p class="p_partenter">Dr. Yan Su</p>
										<div class="phold phold8"></div>
										<p class="p14 p14ex">10 years of experience</p>
										<p class="p14 p14ex">Chemistry, chemical engineering</p>
									</li>
									<li class="li_partners" page="p_huanchunyan_en.shtml">
										<span class="circle"></span>
										<p class="p_partenter">Ms. Chunyan Huan</p>
										<div class="phold phold8"></div>
										<p class="p14 p14ex">13 years of experience</p>
										<p class="p14 p14ex">Chemistry, chemical engineering, materials</p>
									</li>
									<li class="li_partners" page="p_jinjie_en.shtml">
										<span class="circle"></span>
										<p class="p_partenter">Ms. Jie Jin</p>
										<div class="phold phold8"></div>
										<p class="p14 p14ex">12 years of experience</p>
										<p class="p14 p14ex">Computer technology, telecommunication</p>
									</li>
									<!-- ADD 2018-03-22 -->
									<li class="li_partners" page="p_jinjie_en.shtml">
										<span class="circle"></span>
										<p class="p_partenter">Mr. Simon Cai</p>
										<div class="phold phold8"></div>
										<p class="p14 p14ex">14 years of experience</p>
										<p class="p14 p14ex">Mechanic engineering</p>
									</li>
									<li class="li_partners" page="p_jinjie_en.shtml">
										<span class="circle"></span>
										<p class="p_partenter">Mr. Jun Liu</p>
										<div class="phold phold8"></div>
										<p class="p14 p14ex">19 years of experience</p>
										<p class="p14 p14ex">Mechanical & electrical engineering</p>
									</li>

								</ul>
							</div>
							
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
