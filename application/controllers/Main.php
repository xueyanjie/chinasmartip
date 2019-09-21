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
			'tags' => array('tag1', 'tag2'),
			'titles' => array('test1', 'test2'),
			'contents' => array('1111', '2222'),
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
			'tags' => array('tag1', 'tag2'),
			'titles' => array('test1', 'test2'),
			'contents' => array('1111', '2222'),
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
			'contents' => array('1111', '2222'),
			'pageName' => 'huanchunyan_en',
			'pageName2' => 'huanchunyan',
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
			'contents' => array('1111', '2222'),
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
			'contents' => array('1111', '2222'),
			'pageName' => 'huanchunyan_en',
			'pageName2' => 'huanchunyan',
		);
		$this->load->view("partnerdetail", $data);
	}


}
