<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			var pageName = 'aboutus_en';
			var toPageName = 'aboutus';
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
								CHINA SMART is a full-service intellectual property law firm in China. Our practice encompasses,
								inter alia, consultation, prosecution, administrative and judicial proceedings related to patent,
								trademark, copyright, domain names, trade secrets and unfair competition.
								<br/>
								<br/>
								The partners and associates, together with the consultants at CHINA SMART possess high scientific and legal qualifications.
								Many of them have been practiced in the IP area over a decade. They were once senior attorneys in top-ranked IP law firms
								in China and gathered here with an ambition to be a vibrant part on the stage of IP in China. The professionals in CHINA
								SMART are registered patent attorneys and/or lawyers with advanced degrees in various majors, including Computer Science,
								Electronic Engineering, Chemistry, Biochemistry, and Communication Science and are fully capable of understanding the client’s needs.
								<br/>
								<br/>
								We represent domestic and foreign clients around the world, majorly in the US, EP and Japan. We are committed to provide
								the best possible services to our clients in an efficient and cost-effective manner. Our service can be tailored to
								specifically meet the client’s needs, no matter it is a start-up or medium- or large-sized company. With the expertise
								and flexibility, we can be your best IP partner in China.
								<br/>
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
								<span class="fr">CHINA SMART INTELLECTUAL PROPERTY LTD. <a href="https://beian.miit.gov.cn" target="_blank">京ICP备18041328号-1</a></span>
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
