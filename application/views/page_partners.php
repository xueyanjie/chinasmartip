<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			var pageName = 'partners';
			var toPageName = 'partners_en';
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
							<div class="cl partentcimg">
								<div class="partentleft fl" style="width:310px;">
									<p class="p14l22">我们具有一支经验丰富、恪尽职守的代理人队伍。他们均毕业于国内、外顶尖高等学府，大部分具有硕士或博士学位；并曾就职于中国领先、富有盛誉的知识产权法律服务事务所，平均拥有十年以上的执业经历。</p>
									<p class="p14l22">我们的专利代理人凭借精湛的专业能力以及丰富的实践经验，使客户的专利在“中国专利奖”的评选中屡获“中国专利金奖”、“中国专利优秀奖”等殊荣。</p>
								</div>
								<div class="partentright fr">
									<img src="<?php echo base_url();?>static/i/partner.gif" />
								</div>
							</div>
							<div class="">
								<ul class="partnerul cl">
									<li  class="li_partners" page="<?php echo base_url()?>Main/guhuimin">
										<span class="circle"></span>
										<p class="p_partenter">谷惠敏</p>
										<div class="phold phold8"></div>
										<p class="p14">21年实践经验</p>
										<p class="p14">电子、计算机</p>
									</li>
									<li id="p_jyx" class="li_partners" page="<?php echo base_url()?>Main/jiangyuxing">
										<span class="circle"></span>
										<p class="p_partenter">蒋宇星</p>
										<div class="phold phold8"></div>
										<p class="p14">11年实践经验</p>
										<p class="p14">机械、电子</p>
									</li>
									<li class="li_partners" page="<?php echo base_url()?>Main/jiangjin">
										<span class="circle"></span>
										<p class="p_partenter">姜劲</p>
										<div class="phold phold8"></div>
										<p class="p14">10年实践经验</p>
										<p class="p14">电子、电力、机械、通信</p>
									</li>
									<li class="li_partners" page="<?php echo base_url()?>Main/suyan">
										<span class="circle"></span>
										<p class="p_partenter">苏琰 博士</p>
										<div class="phold phold8"></div>
										<p class="p14">10年实践经验</p>
										<p class="p14">化学、化工</p>
									</li>
									<li class="li_partners" page="<?php echo base_url()?>Main/huanchunyan">
										<span class="circle"></span>
										<p class="p_partenter">郇春艳</p>
										<div class="phold phold8"></div>
										<p class="p14">13 年实践经验</p>
										<p class="p14">化学、化工、材料学</p>
									</li>
									<li class="li_partners" page="<?php echo base_url()?>Main/jinjie">
										<span class="circle"></span>
										<p class="p_partenter">金洁</p>
										<div class="phold phold8"></div>
										<p class="p14">12年实践经验</p>
										<p class="p14">计算机、通信</p>
									</li>
									<!-- add -->
									<li class="li_partners" page="<?php echo base_url()?>Main/gongyongmei">
										<span class="circle"></span>
										<p class="p_partenter">龚泳梅 博士</p>
										<div class="phold phold8"></div>
										<p class="p14">15年实践经验</p>
										<p class="p14">专利文件撰写、专利申请、复审和无效</p>
									</li>
									<li class="li_partners" page="<?php echo base_url()?>Main/zhangyongzhe">
										<span class="circle"></span>
										<p class="p_partenter">张永喆</p>
										<div class="phold phold8"></div>
										<p class="p14">8年实践经验</p>
										<p class="p14">专利文件撰写、专利申请、复审和无效</p>
									</li>
									<li class="li_partners" page="<?php echo base_url()?>Main/sangtao">
										<span class="circle"></span>
										<p class="p_partenter">桑涛</p>
										<div class="phold phold8"></div>
										<p class="p14">12年实践经验</p>
										<p class="p14">业务发展、经营策略、管理咨询</p>
									</li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
				<!--#include file="footer.html"-->
				<?php $this->load->view('footer');?>
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
