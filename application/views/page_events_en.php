<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			var pageName = 'events_en'
			var toPageName = 'events';
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
							<!--<div class="phold phold105"></div>-->
							<!--<img src="static/i/making.png" class="imgmap"/>-->
							<?php
							if (!empty($news)) {
								foreach ($news as $item) {
									?>
									<a class="a_event" href="<?php echo base_url() . "Main/eventlist?id=" . $item['id']; ?>"><p class="p1624marleft"><span class="spand"></span><?php echo $item['title']; ?></p></a>
									<?php
								}
							}
							?>
<!--							<a class="a_event" href="ENEventslist2.shtml"><p class="p1624marleft"><span class="spand"></span>An Israeli Newspaper Published An Article Co-authored by Perel Law Office and China Smart IP</p></a>-->
<!--							<a class="a_event" href="ENEventslist1.shtml"><p class="p1624marleft"><span class="spand"></span>China Smart IP Obtained Patent and Trademark Agency Qualifications</p></a>-->
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
