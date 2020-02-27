<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			var pageName = 'contact_en';
			var toPageName = 'contact';
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
							<img src="<?php echo base_url();?>static/i/ENmap.jpg" class="imgmap"/>
							<div class="phold phold20"></div>
							<div id="copy_target">
								<p class="p16">CHINA SMART INTELLECTUAL PROPERTY LTD.</p>
								<div class="phold phold5"></div>
								<p class="p14">1412,14FL-1st Office Building Henderson Center, No. 18 Jianguomennei Ave.</p>
								<p class="p14">Dongcheng District, Beijing, PRC, 100005</p>
								<p class="p14"><span class="connectSpanLeft_en">Tel.: 86-10-65184418 </span><span>Fax:  86-10-65184417</span></p>
								<p class="p14"><span class="connectSpanLeft_en">Email: info@chinasmartip.com</span><span>Website: http://www.chinasmartip.com</span></p>
							</div>
							<div class="btn_copy" id="btn_copy">Copy</div>
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
							<p class="ptel cl"><span class="span1">86-10-65184418</span> <span class="fr">info@chinasmartip.com</span></p>
							<p class="pEng">
								<span class="fr">CHINA SMART INTELLECTUAL PROPERTY LTD. 京ICP备18041328号</span>
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
			});
			$('#btn_copy').click(function(){
				var node = document.getElementById('copy_target');
				oCopy(node);
				alert('Copied to the clipboard');
			});
		})
	</script>
		<?php $this->load->view('stats');?>
	</body>
</html>
