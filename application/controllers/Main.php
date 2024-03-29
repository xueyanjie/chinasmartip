<?php
/**
 * Created by IntelliJ IDEA.
 * User: xueyanjie
 * Date: 2019/9/12
 * Time: 9:54 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('catemodel');
		$this->load->model('newsmodel');
	}
//	public function header() {
//		$this->load->view("");
//	}

	public function index()
	{
		$this->load->view('page_index');
	}

	public function index_en()
	{
		$this->load->view('page_index_en');
	}

	public function navlist()
	{
		$this->load->view('page_navlist');
	}

	public function navlist_en()
	{
		$this->load->view('page_navlist_en');
	}

	public function aboutus()
	{
		$this->load->view('page_aboutus');
	}

	public function aboutus_en()
	{
		$this->load->view('page_aboutus_en');
	}

	public function contact()
	{
		$this->load->view("page_contact");
	}

	public function contact_en()
	{
		$this->load->view("page_contact_en");
	}

	public function partners()
	{
		$this->load->view("page_partners");
	}

	public function partners_en()
	{
		$this->load->view("page_partners_en");
	}

	public function practices()
	{
		$this->load->view("page_practices");
	}

	public function practices_en()
	{
		$this->load->view("page_practices_en");
	}

	public function events()
	{
		$list = $this->newsmodel->get_list_by_cate(1);//培训与活动
		$data['news'] = $list;
		$this->load->view("page_events", $data);
	}

	public function events_en()
	{
		$list = $this->newsmodel->get_list_by_cate(2);//培训与活动-英文
		$data['news'] = $list;
		$this->load->view("page_events_en", $data);
	}

	public function eventlist()
	{
		$id = $this->input->get('id');
		$item = $this->newsmodel->get_single($id);
		$data['item'] = $item;
		$this->load->view("page_events_list", $data);
	}

	public function eventlist_en()
	{
		$id = $this->input->get('id');
		$item = $this->newsmodel->get_single($id);
		$data['item'] = $item;
		$this->load->view("page_events_list_en", $data);
	}

	public function partnerdetail()
	{
		$this->load->view("partnerdetail");
	}

	public function partnerdetail_en()
	{
		$this->load->view("partnerdetail_en");
	}

	/***********************人物详情********************/
	public function guhuimin()
	{
		$data = array(
			'name' => '谷惠敏',
			'photo' => 'guhuimin.jpg',
			'tags' => array('合伙人', '专利代理人'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'专利申请和复审<br/>专利无效和诉讼',
				'计算机、电子',
				'谷惠敏拥有26年的专利实践经验，至今处理专利案件近3000件。在加入汉智嘉成之前，曾就职于国内知名的知识产权法律服务事务所。
						<br/><br/>谷惠敏主要参与和负责客户在电子、计算机应用等相关领域的国内、外专利案件在申请和审查阶段的各项工作，以及授权后的权利行使。此外，她熟悉美国、日本和欧洲等国家和地区的专利实践，协助客户在外国获得专利权保护。
						<br/><br/>在办案过程中，谷惠敏始终注重对案件技术的理解和与客户的沟通，为客户争取最大的利益。',
				'<span class="ft_year">1990-1994</span><span class="ft_school">东南大学自动化工程</span><span class="ft_degree">学士学位</span>',
			),
			'pageName' => 'guhuimin',
			'pageName2' => 'guhuimin_en',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function guhuimin_en()
	{
		$data = array(
			'name' => 'Ms. Huimin Gu',
			'photo' => 'guhuimin.jpg',
			'tags' => array('Partner', 'Patent Attorney'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Patent prosecution & re-examination<br/>Patent invalidation & litigation',
				'Electronic & computer technologies',
				'Ms. Gu has 26 years of experience in patent practice.  She has handled nearly 3,000 patent cases so far.  Before she joined China Smart IP, she worked as a senior patent attorney at a well-known IP law firm in China.
						<br/><br/>
						Ms. Gu is mainly involved in patent prosecution, re-examination and invalidation in the fields of electronic and computer technologies.  She is also familiar with patent practice overseas and has assisted clients in obtaining patent rights in many countries.
						<br/><br/>
						Mr. Gu always pays attention to the understanding of technology and the communication with client, in order to protect the best interests of clients.',
				'B.S., Automatic Engineering, Southeast University,1994.',
			),
			'pageName' => 'guhuimin_en',
			'pageName2' => 'guhuimin',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function huanchunyan()
	{
		$data = array(
			'name' => '郇春艳',
			'photo' => 'huanchunyan.jpg',
			'tags' => array('合伙人', '专利代理人'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'专利申请和复审<br/>专利无效和诉讼',
				'化学、材料学',
				'郇春艳拥有18年的专利实践经验，至今处理专利案件2000余件。主要参与和负责客户在化学特别是材料学领域的国内、外专利案件在申请和审查阶段的各项工作，并为其它国内、外客户进行专利挖掘、专利布局等方面提供专业而具体的帮助。<br/><br/>郇春艳对于化学领域的专利案件有着丰富的经验，在办案过程中运用自身全面而深厚的化学知识对案件进行深入分析和把握，并且追求稳定、合理的专利权，切实做到为专利申请人的利益考虑，一直以来深受客户好评。',
				'<span class="ft_year">1997-2001</span><span class="ft_school" style="width:116px;">东北电力大学</span><span class="ft_major" style="width:86px;">分析化学</span><span class="ft_degree">学士学位</span><br/><span class="ft_year">2001-2004</span><span class="ft_school" style="width:116px;">清华大学</span><span class="ft_major" style="width:86px;">材料学</span><span class="ft_degree">硕士学位</span>',
			),
			'pageName' => 'huanchunyan',
			'pageName2' => 'huanchunyan_en',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function huanchunyan_en()
	{
		$data = array(
			'name' => 'Ms. Chunyan Huan',
			'photo' => 'huanchunyan.jpg',
			'tags' => array('Partner', 'Patent Attorney'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Patent prosecution & re-examination<br/>Patent invalidation & litigation',
				'Chemistry, chemical engineering, materials',
				'Ms. Huan has 18 years of experience in patent practice.  She has handled about 2,000 patent cases so far on behalf of domestic and foreign clients.<br/><br/>
						Ms. Huan is mainly involved in patent prosecution, re-examination and invalidation in the fields of chemistry, chemical engineering and materials.  
						She also provides professional advises on patent infringement and validity.<br/><br/>
						Thanks to her comprehensive and profound knowledge in both technologies and patent practice, she has helped many clients obtain stable patent rights in China.
				',
				'M.S., Chemical Engineering, Tsinghua University, 2004.<br/>B.S., Chemistry, Northeast Electrical Institute, 2001.',
			),
			'pageName' => 'huanchunyan_en',
			'pageName2' => 'huanchunyan',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function jiangjin()
	{
		$data = array(
			'name' => '姜劲',
			'photo' => 'jiangjin.jpg',
			'tags' => array('合伙人', '专利代理人'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'专利申请和复审<br/>专利无效和诉讼',
				'电子、电力、通信、计算机、机械',
				'姜劲拥有15年的专利实践经验，至今处理专利案件超过2000件。在加入汉智嘉成之前，曾就职于国内知名的知识产权法律服务事务所。
					<br/><br/>姜劲擅长电子、电力、通信、计算机、机械等相关领域的国内专利案件在撰写、申请和审查阶段的各项工作，并为其它国内客户在专利挖掘、专利检索分析、专利布局、无效侵权等方面提供专业而详细的建议。
					<br/><br/>另外，凭借他丰富的撰写经验，使客户在“中国专利奖”的评选中屡获“中国专利金奖”、“中国专利优秀奖”等殊荣。',
				'<span class="ft_year">1997-2001</span><span class="ft_school" style="width:86px;">浙江大学</span><span class="ft_major" style="width:166px;">电气工程及其自动化</span><span class="ft_degree" style="width:86px;">学士学位</span>
				    <br/><span class="ft_year">2003-2006</span><span class="ft_school" style="width:86px;">浙江大学</span><span class="ft_major" style="width:166px;">控制理论与控制工程</span><span class="ft_degree" style="width:86px;">硕士学位</span>',
			),
			'pageName' => 'jiangjin',
			'pageName2' => 'jiangjin_en',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function jiangjin_en()
	{
		$data = array(
			'name' => 'Mr. Jin Jiang',
			'photo' => 'jiangjin.jpg',
			'tags' => array('Partner', 'Patent Attorney'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Patent application documents drafting<br/>Patent prosecution & re-examination<br/>Patent invalidation',
				'Automation of electric power systems<br/>Mechanical & electrical automation<br/>
						Electronic technology<br/>Computer engineering & communication engineering',
				'Mr. Jiang has 15 years of patent practice experience.  So far he has handled more than 2,000 patent cases.  Before he joined China Smart IP, he worked for a leading IP law firm in China.
						<br/><br/>
						Mr. Jiang is good at patent drafting, prosecution and invalidation in the fields of electronics, electric power, communications, computer and machinery.  He also provides professional advises on patent infringement and validity.
						<br/><br/>
						In addition, thanks to his rich experience in patent drafting, his clients have received several awards of Chinese Outstanding Patented Invention.',
				'M.S., Control Theory and Control Engineering, Zhejiang University, 2006.<br/>
						B.S., Electrical Engineering Automation, Zhejiang University, 2001.',
			),
			'pageName' => 'jiangjin_en',
			'pageName2' => 'jiangjin',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function jiangyuxing()
	{
		$data = array(
			'name' => '蒋宇星',
			'photo' => 'jiangyuxing.jpg',
			'tags' => array('合伙人', '专利代理人', '律师'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'专利申请和复审<br/>专利无效和诉讼<br/>商标、著作权、许可',
				'机械、电子',
				'蒋宇星曾就职于中国国内知名的知识产权法律服务事务所，拥有18年知识产权实践经验；并曾在加拿大有过系统工程师的工作经验。
								<br/><br/>蒋宇星主要参与和负责客户在机械、通信、计算机应用等相关领域的国内、外专利案件在申请和审查阶段的各项工作，并为其他国内、外客户在专利挖掘、专利检索分析、专利布局、无效侵权等方面提供详细建议。他对美国、欧洲、日本等国家/地区的专利实践十分熟悉。
								<br/><br/>此外，他经常参加国内、外知识产权组织举办的各种行业会议，与世界各地的同行保持良好的合作关系。',
				'<span class="ft_year">1997-2001</span><span class="ft_school" style="width: 172px;">加拿大麦柯玛斯特大学</span><span class="ft_major" style="width:86px;">电子工程</span><span class="ft_degree" style="width:86px;">学士学位</span><br/>
								<span class="ft_year">2002-2005</span><span class="ft_school" style="width: 172px;">加拿大贾纳里大学</span><span class="ft_major" style="width:86px;">系统工程</span><span class="ft_degree" style="width:86px;">硕士学位</span>',
			),
			'pageName' => 'jiangyuxing',
			'pageName2' => 'jiangyuxing_en',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function jiangyuxing_en()
	{
		$data = array(
			'name' => 'Mr. Daniel Jiang',
			'photo' => 'jiangyuxing.jpg',
			'tags' => array('Partner', 'Patent Attorney', 'Attorney at Law'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Patent prosecution & re-examination<br/>Patent invalidation & litigation<br/>Trademark, Copyright, Licensing',
				'Mechanical & electrical engineering',
				'Mr. Jiang used to work at a well-known IP law firm and has over 18 years of experience in patent practice and other IP matters. Utilizing his expertise in mechanical, telecommunications and computer, Mr. Jiang provides services including: patent protection strategy consultation; application drafting; prosecution and patent analysis. Mr. Jiang is experienced in dealing with complex cases, and familiar with US, European and Japanese patent practices.
								<br/><br/>
								In addition, he is a regular attendee in various intellectual property conferences and maintains good cooperation relationshipswith domestic and foreign associates.
								<br/><br/>
								Mr. Jiang also worked as a System Engineer at the Hydro one in Canada (a power line network company) before he participated in IP practice.',
				'Bachelor of Engineering, Electrical Engineering, McMaster University (Canada), 2001.<br/>
								Master of Engineering, System Design, University of Regina (Canada), 2005.',
			),
			'pageName' => 'jiangyuxing_en',
			'pageName2' => 'jiangyuxing',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function jinjie()
	{
		$data = array(
			'name' => '金洁',
			'photo' => 'jinjie.jpg',
			'tags' => array('合伙人', '专利代理人'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'专利申请和复审<br/>专利无效<br/>咨询<br/>',
				'计算机、通信',
				'金洁自大学毕业后开始从事知识产权行业至今已有17年经验，专注于知识产权代理及咨询。
								<br/><br/>作为代理人，她凭借精湛的专业能力以及丰富的实践经验，为国内、外客户提供知识产权申请、保护等法律服务，并为客户在全球范围内知识产权的获得、管理等方面提供咨询；同时，擅长与客户的沟通和关系维护、洞悉和分析客户的需求并为之定制行之有效的知识产权保护方案。
								<br/><br/>此外，她经常参加国内、外知识产权组织举办的各种行业会议，与世界各地的同行保持稳定良好的合作关系。',
				'<span class="ft_year">2000-2004</span><span class="ft_school" style="width:116px;">中国农业大学</span><span class="ft_major" style="width:146px;">计算机科学与技术</span><span class="ft_degree">学士学位</span>',
			),
			'pageName' => 'jinjie',
			'pageName2' => 'jinjie_en',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function jinjie_en()
	{
		$data = array(
			'name' => 'Ms. Jie Jin',
			'photo' => 'jinjie.jpg',
			'tags' => array('Partner', 'Patent Attorney'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Patent prosecution & re-examination<br/>Patent invalidation<br/>Consultation',
				'Computer technology, telecommunication',
				'Ms. Jin has been engaged in intellectual property practice for 17 years since her graduation from university, specializing in patent practice and IP consulting.
						<br/><br/>
						As an attorney, she provides opinions on IP prosecution and protection for domestic and foreign clients by her excellent professional abilities and rich practice experience.  At the same time, she is good at communication and analyzation, which can help her tailor-made effective IP protection solutions for clients.
						<br/><br/>
						In addition, she is a regular attendee in various intellectual property conferences and maintains good cooperation relationship with associates around the world.',
				'B.S., Computer Science, China Agriculture University, 2004.',
			),
			'pageName' => 'jinjie_en',
			'pageName2' => 'jinjie',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function suyan()
	{
		$data = array(
			'name' => '苏琰 博士',
			'photo' => 'suyan.jpg',
			'tags' => array('合伙人', '专利代理人', '律师'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'专利申请和复审<br/>专利无效和诉讼<br/>知识产权商业化、专利运营',
				'化学、化工',
				'苏琰博士主要为客户建立和获得知识产权提供帮助，给予客户针对知识产权有效性的分析意见，参与知识产权诉讼，协助客户维护其知识产权的合法权益。
								<br/><br/>苏琰博士是《专利池的运营与法律规制》一书的作者，是知识产权及无形资产运营领域的专业人士，也致力于知识产权商业化以及无形资产运营平台的开发和推广。服务的客户包括国内外中、小企业，高等院校以及大型跨国公司。',
				'<span class="ft_year">1997-2001</span><span class="ft_school" style="width:145px;">北京化工大学</span><span class="ft_major" style="width:101px;">高分子材料</span><span class="ft_degree">学士学位</span>
								<br/><span class="ft_year">2002-2007</span><span class="ft_school" style="width:145px;">英国曼彻斯特大学</span><span class="ft_major" style="width:101px;">高分子材料</span><span class="ft_degree">博士学位</span>
								<br/><span class="ft_year">2009-2011</span><span class="ft_school" style="width:145px;">英国伦敦大学学院</span><span class="ft_major" style="width:101px;">知识产权法</span><span class="ft_degree">硕士学位</span>',
			),
			'pageName' => 'suayn',
			'pageName2' => 'suyan_en',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function suyan_en()
	{
		$data = array(
			'name' => 'Dr. Yan Su',
			'photo' => 'suyan.jpg',
			'tags' => array('Partner', 'Patent Attorney', 'Attorney at Law'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Patent prosecution & re-examination<br/>Patent invalidation & litigation<br/>IP commercialization<br/>Patent operation',
				'Chemistry, chemical engineering',
				'Dr. Su is devoted to training and building a dedicated team and developing strong relationships with clients.  Dr. Su has helped a wide variety of clients, including small enterprises, universities and multinational enterprises, obtain, protect and enforce IP rights in China.  She also provides validity, infringement and enforcement opinions to clients, and advises clients on the creation, management and leverage of their IP portfolios.
						<br/><br/>
						In addition, Dr. Su is the author of “The management and Legal Regulation of Patent Pools” and is a professional IP and intangible assets manager.  She is also devoted to the commercialization of IP and the development of an intangible asset operation platform.',
				'LLM, Intellectual Property Law, University of London (UK), 2011.<br/>
						Ph.D., Polymer Materials, University of Manchester (UK), 2007.<br/>
						B.S., Polymer Materials, Beijing University of Chemical Technology, 2001.',
			),
			'pageName' => 'suyan_en',
			'pageName2' => 'suyan',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}


	public function gongyongmei()
	{
		$data = array(
			'name' => '龚泳梅 博士',
			'photo' => 'gongyongmei.jpg',
			'tags' => array('合伙人', '专利顾问'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'专利文件撰写<br/>专利申请<br/>复审和无效',
				'化学和生物化学<br/>生命科学、生物材料、医药、医疗器械、食品、化妆品和普通化学',
				'<span class="ft_base col1">合伙人</span>	<span class="ft_base col2">北京汉智嘉成知识产权代理有限公司</span> <span class="ft_base col3">2019至今</span>
					<br/><span class="ft_base col1">专利顾问</span>	<span class="ft_base col2">睿盟希资本</span>	<span class="ft_base col3">2019至今</span>
					<br/><span class="ft_base col1">专利顾问</span>	<span class="ft_base col2">中原信达知识产权代理有限责任公司</span>	<span class="ft_base col3">2012-2018</span>
					<br/><span class="ft_base col1">项目经理</span>	<span class="ft_base col2">北京华方科泰医药有限公司</span>	<span class="ft_base col3">2010-2012</span>',
				'<span class="ft_year">2009-2010</span><span class="ft_school" style="width:305px;">Washington University, Seattle, WA USA</span><span class="ft_major" style="width:101px;">生物化学</span><span class="ft_degree">博士后</span>
					<br/><span class="ft_year">2003-2009</span><span class="ft_school" style="width:306px;">Simon 
					Fraser University, Burnaby BC Canada</span><span class="ft_major" 
						style="width:101px;">生物化学</span><span class="ft_degree">博士</span>
					<br/><span class="ft_year">1999-2003</span><span class="ft_school" style="width:307px;">北京大学
					</span><span class="ft_major" 
						style="width:101px;">化学</span><span class="ft_degree">本科</span>',
			),
			'pageName' => 'gongyongmei',
			'pageName2' => 'gongyongmei_en',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function gongyongmei_en()
	{
		$data = array(
			'name' => 'Dr. Yongmei Gong',
			'photo' => 'gongyongmei.jpg',
			'tags' => array('Partner', 'Patent Consultant'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Patent Preparation &Prosecution<br/>Patent Re-examination & Invalidation',
				'Biochemistry & Chemistry<br/>Life Science, Biomaterials, Pharmaceuticals, Medical Device, Food, Cosmetics and General Chemistry',
				'Dr. Gong worked in one of the Chinese leading IP firms, China Sinda, for many years before she joined China Smart as a partner. 
				She represented domestic and foreign clients in all aspects of patent practice including drafting, prosecution, reexamination, invalidation, providing FTO and consultation. 
				She specializes in dealing with complex issues in the biotech area.',
				'Postdoctoral in Biochemistry, University of Washington, Seattle, WA USA, 2009-2010.
				<br/>PhD in Biochemistry, Simon Fraser University, Burnaby, BC Canada, 2003-2009
				<br/>BS in Chemistry, Peking University, Beijing China, 1999-2003',
			),
			'pageName' => 'gongyongmei_en',
			'pageName2' => 'gongyongmei',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function zhangyongzhe()
	{
		$data = array(
			'name' => '张永喆',
			'photo' => 'zhangyongzhe.jpg',
			'tags' => array('专利工程师'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'专利文件撰写<br/>专利申请<br/>复审和无效',
				'机械、电子',
				'2011年至今一直从事专利代理方面的工作，熟悉专利文件撰写、审查意见答复；专利复审、无效；专利侵权分析；知识产权咨询、检索业务等，积累了丰富的专利代理经验。',
				'<span class="ft_year">2007-2011</span><span class="ft_school" style="width:145px;">北京印刷学院
					</span><span class="ft_major" 
						style="width:101px;">自动化</span><span class="ft_degree">本科</span>',
			),
			'pageName' => 'zhangyongzhe',
			'pageName2' => 'zhangyongzhe_en',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function zhangyongzhe_en()
	{
		$data = array(
			'name' => 'Mr. Yongzhe Zhang',
			'photo' => 'zhangyongzhe.jpg',
			'tags' => array('Patent Engineer'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Patent Drafting & Prosecution<br/>Patent Re-examination & Invalidation',
				'Mechanical & electrical engineering',
				'Mr. Zhang has worked as a patent engineer since 2011. He is experienced in patent drafting and prosecution, 
				including pre-filing search and opinions and responding to Office Actions. 
				Mr. Zhang is heavily involved in patent mining and deployment for small-size companies and has also accumulated experience 
				in patent invalidation and providing FTOs. ',
				'BS in Automation, Beijing Institute of Graphic Communication, 2007-2011',
			),
			'pageName' => 'zhangyongzhe_en',
			'pageName2' => 'zhangyongzhe',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}



	public function sangtao()
	{
		$data = array(
			'name' => '桑涛',
			'photo' => 'sangtao.jpg',
			'tags' => array('北美业务主管'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'业务发展<br/>经营策略<br/>管理咨询',
				'机器智能、视觉机器人、自动化、项目管理、产品设计',
				'桑涛先生有超过十八年为中大型国际科技公司工作的经验。其中有五年，他作为加拿大公司外派经理人常驻亚洲管理亚洲业务。桑先生对企业国际化的路程有深度的了解。他也是多元企业文化管理方面的资深管理人。
				现常驻加拿大，作为汉智嘉诚在北美的重要布局，桑先生通过他多年在企业的管理经验，为客户提供商务及知识产权战略方面的咨询。',
				'<span class="ft_year">2015-2017</span><span class="ft_school" style="width:270px;">University of Fredericton, Canada
					</span><span class="ft_major" 
						style="width:200px;">Global Leadership</span><span class="ft_degree">MBA</span><br/>
						<span class="ft_year">2002-2005</span><span class="ft_school" style="width:270px;">University
						 of British Columbia, Canada
					</span><span class="ft_major" 
						style="width:200px;">Vision Robotics</span><span class="ft_degree">M.S.</span><br/>
						<span class="ft_year">1997-2002</span><span class="ft_school" style="width:270px;">University
						 of Waterloo, Canada
					</span><span class="ft_major" 
						style="width:200px;">Systems Design Engineering</span><span class="ft_degree">B.S.</span>',
			),
			'pageName' => 'sangtao',
			'pageName2' => 'sangtao_en',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function sangtao_en()
	{
		$data = array(
			'name' => 'Mr. Tao Sang',
			'photo' => 'sangtao.jpg',
			'tags' => array('Head of North American Operations'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Business Development <br/>Business Strategy<br/>Management Consulting',
				'Machine Intelligence<br/>Vision Robotics<br/>Automation<br/>Project Management<br/>Product Design',
				'Mr. Sang has over 18 years of management experience with international tech companies. 
				Based in Canada, he started as a product design engineer then moved into management roles dealing with international projects in Asia. 
				Mr. Sang also has worked for Canadian company living in Asia as an EXPAT in management roles such as regional operations manager and genera manager. 
				Mr. Sang has strong technical background combined with international management experience in the industry. 
				His experience and expertise help the clients to align their IP strategy with business strategy and achieve overall business success.',
				'MBA, Global Leadership, University of Fredericton, Canada, 2015-2017
					<br/>M.S., Vision Robotics, University of British Columbia, Canada, 2002-2005
					<br/>B.S., Systems Design Engineering, University of Waterloo, Canada, 1997-2002',
			),
			'pageName' => 'sangtao_en',
			'pageName2' => 'sangtao',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function gaofenfang() {
		$data = array(
			'name' => '高芬芳',
			'photo' => 'gaofenfang.jpg',
			'tags' => array('专利代理人'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'专利文件撰写、专利申请、复审和无效<br/>植物新品种文件撰写、申请',
				'生物、农业<br/>生命科学、生物材料、医药、医疗器械、食品、农业技术、植物新品种',
				'<span class="ft_base col1">专利代理人</span><span class="ft_base col2">北京汉智嘉成知识产权代理有限公司</span><span class="ft_base col3">2019至今</span>
				<br/><span class="ft_base col1">专利代理人</span><span class="ft_base col2">北京海虹嘉诚知识产权代理有限公司</span><span class="ft_base col3">2011-2018</span>
				<br/><span class="ft_base col1">专利代理人助理</span><span class="ft_base col2">北京纪凯知识产权代理有限公司</span><span class="ft_base col3">2010-2011</span>
				<br/><span class="ft_base col1">产品经理</span><span class="ft_base col2">北京诺农生物技术有限公司</span><span class="ft_base col3">2009-2010</span>
				<br/><span class="ft_base col1">科研助理</span><span class="ft_base col2">中国农业科学院作物研究所</span><span class="ft_base col3">2008-2009</span>',
				'<span class="ft_year">2005-2008</span><span class="ft_school" style="width:170px;">中国科学院植物研究所</span>
					<span class="ft_major" style="width:166px;">细胞生物学</span><span class="ft_degree" style="width:86px;">硕士</span>
				<br/><span class="ft_year">2000-2004</span><span class="ft_school" style="width:170px;">中国农业大学</span>
					<span class="ft_major" style="width:166px;">农学</span><span class="ft_degree" style="width:86px;">本科</span>',
			),
			'pageName' => 'gaofenfang',
			'pageName2' => 'gaofenfang_en',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function gaofenfang_en() {
		$data = array(
			'name' => 'Ms. Fenfang Gao',
			'photo' => 'gaofenfang.jpg',
			'tags' => array('Patent Attorney'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Patent Preparation & Prosecution<br/>Patent Re-examination & InvalidationPlant Variety Right Applications<br/>',
				'Biological & Agriculture<br/>Life Science, Biomaterials, Pharmaceuticals, Medical Device, Food, Agricultural Technology and Plant Variety',
				'Ms. Gao represented domestic and foreign clients in all aspects of patent practice including drafting, prosecution, reexamination, invalidation. 
				She is very knowledgeable of the Chinese Patent Laws and Regulations. 
				Ms. Gao has helped clients prosecute hundreds of patent applications before the Chinese Patent Office.',
				'MS in Cell Biology, Institute of Botany, the Chinese Academy of Sciences, 2005-2008
				<br/>BS in Agronomy, China Agriculture University, 2000-2004',
			),
			'pageName' => 'gaofenfang_en',
			'pageName2' => 'gaofenfang',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}
	// 2023年新加
	public function guodan() {
		$data = array(
			'name' => '郭丹',
			'photo' => 'guodan.jpg',
			'tags' => array('专利代理人','律师'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'专利文件撰写<br/>专利挖掘、检索<br/>专利申请、复审和无效<br/>',
				'化学、材料、医药、机械<br/>',
				'郭丹自2016年加入知识产权代理行业，曾就职于国内知名知识产权服务公司，主要负责客户在化学等领域的国内、外专利案件的各项工作，并为客户在专利挖掘、专利检索等方面提供专业服务。
				<br/><br/>郭丹对于化学领域的专利案件有着丰富的经验，她在办案过程中从客户的角度出发，运用自身全面而深厚的技术功底对案件进行深入分析和把握，一直以来深受客户好评。
				<br/>',


				'<span class="ft_year">2012-2015</span><span class="ft_school" style="width:135px;">中国石油大学(华东)</span><span class="ft_major" style="width:101px;">化学工程与技术</span><span style="text-align:right;width:100px;" class="ft_degree">硕士学位</span>
				<br/><span class="ft_year">2008-2012</span><span class="ft_school" style="width:135px;">中国海洋大学</span><span class="ft_major" style="width:101px;">化学工程与工艺</span><span style="text-align:right;width:100px;" class="ft_degree">学士学位</span>',
			),
			'pageName' => 'guodan',
			'pageName2' => 'guodan_en',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}
	public function guodan_en() {
		$data = array(
			'name' => 'Ms. Dan Guo',
			'photo' => 'guodan.jpg',
			'tags' => array('Patent Attorney','Attorney at Law'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Patent Drafting &Prosecution<br/>Patent Re-examination & Invalidation<br/>',
				'Biochemistry & Chemistry<br/>Life Science, Biomaterials, Pharmaceuticals, Medical Device, Food, Cosmetics',
				'Ms. Guo worked in one of the Chinese leading IP firms for many years before she joined China Smart. She represented domestic and foreign clients in all aspects of patent practice including drafting, prosecution, reexamination, invalidation, providing FTO and consultation. She specializes in dealing with complex issues in biochemistry & chemistry areas.',
				'Master of Engineering, China University of Petroleum (East China), 2012-2015<br/>
				Bachelor of Engineering, Ocean University of China, 2008-2012
				',
			),
			'pageName' => 'guodan_en',
			'pageName2' => 'guodan',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function chenyingjuan() {
		$data = array(
			'name' => '陈莹娟',
			'photo' => 'chenyingjuan.jpg',
			'tags' => array('专利代理人'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'专利文件撰写<br/>专利挖掘、检索<br/>专利申请、复审和无效<br/>',
				'机械、电子、计算机、化工、材料<br/>',
				'陈莹娟拥有12 年的专利实践经验，兼有甲方和乙方的工作经历。曾就职于国内知名知识产权代理公司、AI医疗创业公司和通讯行业上市公司。擅长多个领域的国内专利案件在撰写、申请和审查阶段的各项工作，并为其他国内客户在专利挖掘、专利检索分析、专利布局、专利审查加速、企业知识产权管理、项目申报等方面提供专业而详细的建议。
				<br/><br/>曾经服务的主要客户包括：首都医科大学附属北京同仁医院、北京市眼科研究所、京东集团、东土科技、清华大学、天津大学、华北电力大学等。<br/>',

				'<span class="ft_year">2008-2011</span><span class="ft_school" style="width:115px;">浙江大学</span><span class="ft_major" style="width:101px;">材料科学与工程</span><span style="text-align:right;width:100px;" class="ft_degree">硕士学位</span>
				<br/><span class="ft_year">2004-2008</span><span class="ft_school" style="width:115px;">湖南大学</span><span class="ft_major" style="width:101px;">化学工程与工艺</span><span style="text-align:right;width:127px;" class="ft_degree">工科学士学位</span>',
			),
			'pageName' => 'chenyingjuan',
			'pageName2' => 'chenyingjuan_en',
			"otherStyle" => 'height:auto;margin: -10px 0 0 10px;',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function chenyingjuan_en() {
		$data = array(
			'name' => 'Ms. YingJuan Chen',
			'photo' => 'chenyingjuan.jpg',
			'tags' => array('Patent Attorney'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Patent Drafting &Prosecution<br/>Patent Re-examination & Invalidation<br/>',
				'Machinery, electronics, computer, chemical engineering, materials<br/>',
				'Chen Yingjuan has 12 years of practical experience in patents, with both upstream and downstream work experience. She has worked for a well-known intellectual property agency in China, an AI medical startup company, and a listed company in the telecommunications industry. She is proficient in various fields related to domestic patent cases in the writing, application, and review stages, and provides professional and detailed advice to other domestic clients regarding patent mining, patent search and analysis, patent layout, patent review acceleration, enterprise intellectual property management, project reporting, and other related areas.
				<br/><br/>Some of the major clients she has served include: Beijing Tongren Hospital Affiliated to Capital Medical University, Beijing Eye Institute, JD.com Group, Beijing East Technology Co., Ltd., Tsinghua University, Tianjin University, North China Electric Power University, etc.<br/>',
				'Master\'s Degree in Materials Science and Engineering from Zhejiang University, 2012-2015<br/>
				Bachelor\'s Degree in Chemical Engineering and Technology from Hunan University, 2008-2012',
			),
			'pageName' => 'chenyingjuan_en',
			'pageName2' => 'chenyingjuan',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}


	public function fangmin_en() {
		$data = array(
			'name' => 'Mr. Min Fang',
			'photo' => 'fangmin.jpg',
			'tags' => array('Partner','Patent Attorney'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'Patent Drafting & Prosecution<br/>Patent Re-examination & Invalidation<br/>',
				'Mechanical & electrical engineering',
				'Mr. Fang worked in one of the Chinese leading IP firms for many years before he joined China Smart as a Partner. He represented domestic and foreign clients in all aspects of patent practice including drafting, prosecution, reexamination, invalidation, providing FTO and consultation. He is skilled in patent drafting in both Chinese and English and he is experienced in overseas patent deployment.',
				'Ph.D. (Quit) in Precision Instrument and Mechanism, Shanghai Jiaotong University, 1997-2000<br/>Master in Automobile Design and Manufacturing, Jiangsu University of Science and Technology, 1994-1997<br/>Bachelor in Automobile Design and Manufacturing, Jiangsu University of Science and Technology, 1990-1994',
			),
			'pageName' => 'fangmin_en',
			'pageName2' => 'fangmin',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}
	public function liujun_en() {
		$data = array(
			'name' => 'Mr. Jun Liu',
			'photo' => 'liujun.jpg',
			'tags' => array('Founding Partner / Junzhiquan Law Firm','Patent Attorney, Attorney at Law'),
			'titles' => array('Practice Areas', 'Professional Experience'),
			'contents' => array(
				'Patents, trademarks, copyrights, trade secrets, integrated circuit layout design and other litigation cases;<br/>Corporate intellectual Property legal adviser – help to improve or construct IP management system;<br/>IP negotiations.<br/>',
				'Since 2000, he has been engaged in intellectual property work. He is a director of the "Intellectual Property" Council, a legal expert specially appointed by the Guangdong Intellectual Property Office and legal advisers of several high-tech enterprises.<br/><br/>Represented a considerable number of nationally significant intellectual property cases involving patents, trademarks, copyrights, trade secrets, integrated circuit layout designs, etc.  Wining cases including but not limited to:<br/><b>Huawei Vs Samsung</b> SEP/NSEP infringement litigations against Samsung (The first one in China);<br/><b>Huawei Vs Solar Edge</b> for patent infringement –settlement;<br/><b>Huawei Vs Mr. Jianhui Jiang</b> in second instance for stolen trade secrets (criminal preceding);<br/><b>Measada Vs Didihu</b> for Trade secret litigation;<br/>Pre-trial injunction for <b>Huiding Vs Jihao</b>;<br/>Re-trial of <b>Staples</b> Patent invalidation administrative litigation (2017 IP guiding case).<br/>Participated in the study of corporate intellectual property management standards sponsored by the Guangdong Provincial Intellectual Property Office and review work.<br/>Author of "Collection of Evidence in Patent Litigation", "Practical Guide to Intellectual Property Work" and other works.',
			),
			'pageName' => 'liujun_en',
			'pageName2' => 'liujun',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}
	public function linye_en() {
		$data = array(
			'name' => 'Ms. Ye Lin',
			'photo' => 'linye.jpg',
			'tags' => array('Attorney at Law / Junzhiquan Law Firm','Litigation coordinator'),
			'titles' => array('Practice Areas', 'Professional Experience'),
			'contents' => array(
				'Patents, trademarks, copyrights, trade secrets, integrated circuit layout design and other litigation cases;<br/>Corporate intellectual Property legal adviser – help to improve or construct IP management system;<br/>IP negotiations. <br/>',
				'Ms. Lin has a Master degree in Law from Shandon University.<br/><br/>Actively involved in litigations for over 10 years and worked closely with Mr. Liu in his high-profile cases.  Wining cases including but not limited to:<br/><b>Huawei Vs Samsung SEP/NSEP </b>infringement litigations against Samsung (The first one in China);<br/><b>Huawei Vs Solar Edge</b> for patent infringement –settlement;<br/><b>Huawei Vs Mr. Jianhui Jiang</b> in second instance for stolen trade secrets (criminal preceding);<br/><b>Measada Vs Didihu</b> for Trade secret litigation;<br/>Pre-trial injunction for <b>Huiding Vs Jihao</b>;<br/>Re-trial of <b>Staples</b> Patent invalidation administrative litigation (2017 IP guiding case).',
			),
			'pageName' => 'linye_en',
			'pageName2' => 'linye',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}
	public function lyuzhanzhu_en() {
		$data = array(
			'name' => 'Dr. Zhanzhu Lyu',
			'photo' => 'lyuzhanzhu.jpg',
			'tags' => array('General Manager of Beijing Office / Junzhiquan Law Firm','Patent Attorney'),
			'titles' => array('Practice Areas','Technical field', 'Professional Experience'),
			'contents' => array(
				'Patent application, patent mining, patent mapping, patent reexamination, patent invalidation, patent litigations. <br/>',
				'Mechanical and Electrical',
				'Dr. Lyu obtained his Ph.D. in Electrical Engineering at Dalian University of Technology.  He also taught in China university of Geology (Beijing).  Before he joined us, Dr. Lyu was an examiner at Chinese Patent office Reexamination Board.  <br/><br/>Dr. Lyu is mainly involved in patent prosecution, re-examination and invalidation, his client including both domestic as well as oversea enterprises, as well as research institutions and universities.  <br/> ',
			),
			'pageName' => 'lyuzhanzhu_en',
			'pageName2' => 'lyuzhanzhu',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}
	public function yanghonglong_en() {
		$data = array(
			'name' => 'Mr. Honglong Yang',
			'photo' => 'yanghonglong.jpg',
			'tags' => array('Attorney at Law / Junzhiquan Law Firm','Patent Attorney'),
			'titles' => array('Professional Experience'),
			'contents' => array(
				'Mr. Yang started doing professional patent work in 2010. He specializes in patent retrieval, application, invalidation and litigation in the fields of communication, electronic circuit, software and machinery.<br/><br/>Mr. Yang was key members in the following high profile litigation cases:<br/>
				-  Huawei v. SolarEdge: bus voltage patent invalidation and infringement litigation.<br/>   Representing Huawei and successfully maintain the patent validity (infringement litigation is in progress);<br/>-	Iucco v. Xuanji: Information U Disk basic patent invalidation and infringement litigation.<br/>   Representing Iucco and successfully maintaining the patent validity (infringement litigation is in progress);<br/>-	Huiding Technology v. Siliwei: Representing Huiding and successfully invalidated all patents involved around ESD circuit patents, forcing Siliwei to withdraw the infringement lawsuit;<br/>-	Honghe Technology v. Shirui: Succeeded in forcing Shirui to settle and withdraw the infringement lawsuit, which cleared the way for a successful Honghe Technology IPO.',
			),
			'pageName' => 'yanghonglong_en',
			'pageName2' => 'yanghonglong',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}
	public function sunshumei_en() {
		$data = array(
			'name' => 'Ms. Shumei Sun',
			'photo' => 'sunshumei.jpg',
			'tags' => array('Lawyer / Junzhiquan Law Firm','Patent Attorney'),
			'titles' => array('Practice Area','Professional Experience'),
			'contents' => array(
				'Patent infringement disputes, patent administrative litigation, patent reexamination and invalidation.<br/>Acting as an enterprise intellectual property legal adviser, patent prosecutor, and IP consultant.<br/>',
				'Ms. Sun began her career in intellectual property in 2010. She has been engaged in patent substantive examination in the patent examination cooperation center of the State Intellectual Property Office for 7 years.<br/><br/>After that, Ms. Sun has represented a variety of patent related cases, including infringement disputes, administrative litigation, reexamination and invalidation, patent application processing, etc. Her specialty areas include but are not limited to mechanical, electrical, communications, and materials.<br/>',
			),
			'pageName' => 'sunshumei_en',
			'pageName2' => 'sunshumei',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}
	public function zhengyu_en() {
		$data = array(
			'name' => 'Ms. Yu Zheng',
			'photo' => 'zhengyu.jpg',
			'tags' => array('Senior Patent Attorney / Junzhiquan Law Firm'),
			'titles' => array('Practice Area','Professional Experience'),
			'contents' => array(
				'Litigations in areas of patent, trade secret, integrated circuit layout design and more. <br/>Legal expert in the setup and improvement of enterprise intellectual property management system.<br/>',
				'Ms. Zheng obtained her Master’s degree in Automation from Northeastern University of China. She has nearly 10 years of software development and intellectual property experience.<br/><br/>Ms. Zheng specializes in patent mining, application, and reexamination. She is an expert in invalidation and litigation in electronic, communication and the software fields.<br/><br/>Ms. Zheng is also experienced in business management and project management which is a huge value-add to our clients in the area of enterprise R & D and IP management.<br/>',
			),
			'pageName' => 'zhengyu_en',
			'pageName2' => 'zhengyu',
			"otherStyle" => '',
		);
		$this->load->view("partnerdetail", $data);
	}

}
