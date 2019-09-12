<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			var pageName = 'ENPartnerslist.shtml';
			var toPageName = 'Partnerslist.shtml';
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
							<p class="p_partenter">Mr. Daniel Jiang</p>
							<ul class="partenter_pop">
								<li>Partner</li>
								<li>Patent Attorney</li>
								<li>Attorney at Law</li>
							</ul>
							<p class="p14l22">
								Practice Areas<br />Patent prosecution & re-examination<br />Patent invalidation & litigation<br />Trademark, Copyright, Licensing
							</p>
							<p class="p14l22">
								Technical Fields<br />Mechanical & electrical engineering
							</p>
							<p class="p14l22">
								Professional Experience<br />Mr. Jiang used to work at a well-known IP law firm and has over 11 years of experience in patent practice and other IP matters. Utilizing his expertise in mechanical, telecommunications and computer, Mr. Jiang provides services including: patent protection strategy consultation; application drafting; prosecution and patent analysis. Mr. Jiang is experienced in dealing with complex cases, and familiar with US, European and Japanese patent practices.
							</p>
							<a class="ENa_back"></a>
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
