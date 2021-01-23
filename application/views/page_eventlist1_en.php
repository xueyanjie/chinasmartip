<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			var pageName = 'ENEventslist1.shtml'
			var toPageName = 'Eventslist1.shtml';
			var lang = 'EN';
		</script>
		<!--#include file="header.html"-->
	</head>
	<body>
		<div class="wrapper wrapperbg">
			<div class="mainWrap">
				<div class="headwrap cl">
					<!--#include file="CommonNavigation.html"-->
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
							<p class="p1624marleft"><span class="spand"></span>China Smart IP Obtained Patent and Trademark Agency Qualifications</p>
							<p class="p14l22 marginLeft30">In August 2017, China Smart IP passed the examination and became a recorded trademark agency before the Trademark Office of the State Administration for Industry & Commerce.  In the same month, China Smart IP received the notification of approving the establishment of patent agency  issued by the State Intellectual Property Office and obtained patent agency qualification.</p>
							<a class="ENa_back" href="<?php echo base_url();?>Main/events_en"></a>
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
								<span class="fr">CHINA SMART INTELLECTUAL PROPERTY LTD. 京ICP备18041328号-1</span>
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
