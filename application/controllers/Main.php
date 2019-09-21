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
				'谷惠敏拥有21年的专利实践经验，至今处理专利案件近3000件。在加入汉智嘉成之前，曾就职于国内知名的知识产权法律服务事务所。
						<br/><br/>谷惠敏主要参与和负责客户在电子、计算机应用等相关领域的国内、外专利案件在申请和审查阶段的各项工作，以及授权后的权利行使。此外，她熟悉美国、日本和欧洲等国家和地区的专利实践，协助客户在外国获得专利权保护。
						<br/><br/>在办案过程中，谷惠敏始终注重对案件技术的理解和与客户的沟通，为客户争取最大的利益。',
				'<span class="ft_year">1990-1994</span><span class="ft_school">东南大学自动化工程</span><span class="ft_degree">学士学位</span>',
			),
			'pageName' => 'guhuimin',
			'pageName2' => 'guhuimin_en',
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
				'Ms. Gu has 21 years of experience in patent practice.  She has handled nearly 3,000 patent cases so far.  Before she joined China Smart IP, she worked as a senior patent attorney at a well-known IP law firm in China.
						<br/><br/>
						Ms. Gu is mainly involved in patent prosecution, re-examination and invalidation in the fields of electronic and computer technologies.  She is also familiar with patent practice overseas and has assisted clients in obtaining patent rights in many countries.
						<br/><br/>
						Mr. Gu always pays attention to the understanding of technology and the communication with client, in order to protect the best interests of clients.',
				'B.S., Automatic Engineering, Southeast University,1994.',
			),
			'pageName' => 'guhuimin_en',
			'pageName2' => 'guhuimin',
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
				'郇春艳拥有13年的专利实践经验，至今处理专利案件2000余件。主要参与和负责客户在化学特别是材料学领域的国内、外专利案件在申请和审查阶段的各项工作，并为其它国内、外客户进行专利挖掘、专利布局等方面提供专业而具体的帮助。<br/><br/>郇春艳对于化学领域的专利案件有着丰富的经验，在办案过程中运用自身全面而深厚的化学知识对案件进行深入分析和把握，并且追求稳定、合理的专利权，切实做到为专利申请人的利益考虑，一直以来深受客户好评。',
				'<span class="ft_year">1997-2001</span><span class="ft_school" style="width:116px;">东北电力大学</span><span class="ft_major" style="width:86px;">分析化学</span><span class="ft_degree">学士学位</span><br/><span class="ft_year">2001-2004</span><span class="ft_school" style="width:116px;">清华大学</span><span class="ft_major" style="width:86px;">材料学</span><span class="ft_degree">硕士学位</span>',
			),
			'pageName' => 'huanchunyan',
			'pageName2' => 'huanchunyan_en',
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
				'Ms. Huan has 13 years of experience in patent practice.  She has handled about 2,000 patent cases so far on behalf of domestic and foreign clients.<br/><br/>
						Ms. Huan is mainly involved in patent prosecution, re-examination and invalidation in the fields of chemistry, chemical engineering and materials.  
						She also provides professional advises on patent infringement and validity.<br/><br/>
						Thanks to her comprehensive and profound knowledge in both technologies and patent practice, she has helped many clients obtain stable patent rights in China.
				',
				'M.S., Chemical Engineering, Tsinghua University, 2004.<br/>B.S., Chemistry, Northeast Electrical Institute, 2001.',
			),
			'pageName' => 'huanchunyan_en',
			'pageName2' => 'huanchunyan',
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
				'姜劲拥有10年的专利实践经验，至今处理专利案件超过2000件。在加入汉智嘉成之前，曾就职于国内知名的知识产权法律服务事务所。
					<br/><br/>姜劲擅长电子、电力、通信、计算机、机械等相关领域的国内专利案件在撰写、申请和审查阶段的各项工作，并为其它国内客户在专利挖掘、专利检索分析、专利布局、无效侵权等方面提供专业而详细的建议。
					<br/><br/>另外，凭借他丰富的撰写经验，使客户在“中国专利奖”的评选中屡获“中国专利金奖”、“中国专利优秀奖”等殊荣。',
				'<span class="ft_year">1997-2001</span><span class="ft_school" style="width:86px;">浙江大学</span><span class="ft_major" style="width:166px;">电气工程及其自动化</span><span class="ft_degree" style="width:86px;">学士学位</span>
				    <br/><span class="ft_year">2003-2006</span><span class="ft_school" style="width:86px;">浙江大学</span><span class="ft_major" style="width:166px;">控制理论与控制工程</span><span class="ft_degree" style="width:86px;">硕士学位</span>',
			),
			'pageName' => 'jiangjin',
			'pageName2' => 'jiangjin_en',
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
				'Mr. Jiang has 10 years of patent practice experience.  So far he has handled more than 2,000 patent cases.  Before he joined China Smart IP, he worked for a leading IP law firm in China.
						<br/><br/>
						Mr. Jiang is good at patent drafting, prosecution and invalidation in the fields of electronics, electric power, communications, computer and machinery.  He also provides professional advises on patent infringement and validity.
						<br/><br/>
						In addition, thanks to his rich experience in patent drafting, his clients have received several awards of Chinese Outstanding Patented Invention.',
				'M.S., Control Theory and Control Engineering, Zhejiang University, 2006.<br/>
						B.S., Electrical Engineering Automation, Zhejiang University, 2001.',
			),
			'pageName' => 'jiangjin_en',
			'pageName2' => 'jiangjin',
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
				'蒋宇星曾就职于中国国内知名的知识产权法律服务事务所，拥有11年知识产权实践经验；并曾在加拿大有过系统工程师的工作经验。
								<br/><br/>蒋宇星主要参与和负责客户在机械、通信、计算机应用等相关领域的国内、外专利案件在申请和审查阶段的各项工作，并为其他国内、外客户在专利挖掘、专利检索分析、专利布局、无效侵权等方面提供详细建议。他对美国、欧洲、日本等国家/地区的专利实践十分熟悉。
								<br/><br/>此外，他经常参加国内、外知识产权组织举办的各种行业会议，与世界各地的同行保持良好的合作关系。',
				'<span class="ft_year">1997-2001</span><span class="ft_school" style="width: 172px;">加拿大麦柯玛斯特大学</span><span class="ft_major" style="width:86px;">电子工程</span><span class="ft_degree" style="width:86px;">学士学位</span><br/>
								<span class="ft_year">2002-2005</span><span class="ft_school" style="width: 172px;">加拿大贾纳里大学</span><span class="ft_major" style="width:86px;">系统工程</span><span class="ft_degree" style="width:86px;">硕士学位</span>',
			),
			'pageName' => 'jiangyuxing',
			'pageName2' => 'jiangyuxing_en',
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
				'Mr. Jiang used to work at a well-known IP law firm and has over 11 years of experience in patent practice and other IP matters. Utilizing his expertise in mechanical, telecommunications and computer, Mr. Jiang provides services including: patent protection strategy consultation; application drafting; prosecution and patent analysis. Mr. Jiang is experienced in dealing with complex cases, and familiar with US, European and Japanese patent practices.
								<br/><br/>
								In addition, he is a regular attendee in various intellectual property conferences and maintains good cooperation relationshipswith domestic and foreign associates.
								<br/><br/>
								Mr. Jiang also worked as a System Engineer at the Hydro one in Canada (a power line network company) before he participated in IP practice.',
				'Bachelor of Engineering, Electrical Engineering, McMaster University (Canada), 2001.<br/>
								Master of Engineering, System Design, University of Regina (Canada), 2005.',
			),
			'pageName' => 'jiangyuxing_en',
			'pageName2' => 'jiangyuxing',
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
				'金洁自大学毕业后开始从事知识产权行业至今已有12年经验，专注于知识产权代理及咨询。
								<br/><br/>作为代理人，她凭借精湛的专业能力以及丰富的实践经验，为国内、外客户提供知识产权申请、保护等法律服务，并为客户在全球范围内知识产权的获得、管理等方面提供咨询；同时，擅长与客户的沟通和关系维护、洞悉和分析客户的需求并为之定制行之有效的知识产权保护方案。
								<br/><br/>此外，她经常参加国内、外知识产权组织举办的各种行业会议，与世界各地的同行保持稳定良好的合作关系。',
				'<span class="ft_year">2000-2004</span><span class="ft_school" style="width:116px;">中国农业大学</span><span class="ft_major" style="width:146px;">计算机科学与技术</span><span class="ft_degree">学士学位</span>',
			),
			'pageName' => 'jinjie',
			'pageName2' => 'jinjie_en',
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
				'Ms. Jin has been engaged in intellectual property practice for 12 years since her graduation from university, specializing in patent practice and IP consulting.
						<br/><br/>
						As an attorney, she provides opinions on IP prosecution and protection for domestic and foreign clients by her excellent professional abilities and rich practice experience.  At the same time, she is good at communication and analyzation, which can help her tailor-made effective IP protection solutions for clients.
						<br/><br/>
						In addition, she is a regular attendee in various intellectual property conferences and maintains good cooperation relationship with associates around the world.',
				'B.S., Computer Science, China Agriculture University, 2004.',
			),
			'pageName' => 'jinjie_en',
			'pageName2' => 'jinjie',
		);
		$this->load->view("partnerdetail", $data);
	}


	public function demo()
	{
		$data = array(
			'name' => '郇春艳',
			'photo' => 'huanchunyan.jpg',
			'tags' => array('合伙人', '专利代理人'),
			'titles' => array('执业范围', '专业领域', '执业经验', '教育背景'),
			'contents' => array(
				'',
				'',
				'',
				'',
			),
			'pageName' => 'huanchunyan',
			'pageName2' => 'huanchunyan_en',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function demo_en()
	{
		$data = array(
			'name' => 'Ms. Chunyan Huan',
			'photo' => 'huanchunyan.jpg',
			'tags' => array('Partner', 'Patent Attorney'),
			'titles' => array('Practice Areas', 'Technical Fields', 'Professional Experience', 'Education'),
			'contents' => array(
				'',
				'',
				'',
				'',
			),
			'pageName' => 'huanchunyan_en',
			'pageName2' => 'huanchunyan',
		);
		$this->load->view("partnerdetail", $data);
	}


}
