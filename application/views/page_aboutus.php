<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var pageName = 'AboutUs.shtml';
		var toPageName = 'ENAboutUs.shtml';
		var lang = 'CN';
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
							<img src="static/i/aboutUs.gif" style="float: right; vertical-align: top;display: inline; width: 350px;margin-left: 30px; margin-bottom:25px;"/>
							北京汉智嘉成知识产权代理有限公司，致力于为中国国内以及外国客户以合理价格提供全方位、专业、优质的知识产权法律服务。<br/><br/>
							我们的服务领域涵盖专利、商标、著作权、集成电路布图设计、域名、知识产权海关备案、商业秘密、不正当竞争、打假、行政执法、无形资产管理和其他与知识产权相关的事务。<br/><br/>
							汉智嘉成，植根中国，放眼世界，汇聚和培养了一批精通技术、深谙不同国家知识产权法律法规、熟练应用各国语言的高素质、高水准、高学历的国际化团队。技术领域包括：机械工程、冶金、汽车工程、电子工程、通讯、计算机、半导体、自动控制、化学、材料、生物技术、制药等。深厚的技术功底和宽泛的技术领域，赋予了我们为客户提供准确、高效、可靠的知识产权“一站式”服务能力。<br/><br/>
							我们始终如一地把客户利益置于首位，善于根据客户需求提供个性化、实用的解决方案，使客户的知识产权在全球范围内得到最佳的保护和发挥最优的作用。我们希望凭借多年积累的有价值的实践经验，成为客户在知识产权保护过程中值得信赖的合作伙伴；同时我们将竭尽努力，实现与客户共同、可持续地发展。</p>
						</div>
					</div>
				</div>
				<!--#include file="footer.html"-->
			</div>
			ß
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
