<?php
/**
 * Created by IntelliJ IDEA.
 * User: xueyanjie
 * Date: 2019/9/12
 * Time: 9:54 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('catemodel');
		$this->load->model('newsmodel');
	}
//	public function header() {
//		$this->load->view("");
//	}

	public function index() {
		$this->load->view('page_index');
	}

	public function index_en() {
		$this->load->view('page_index_en');
	}

	public function navlist() {
		$this->load->view('page_navlist');
	}

	public function navlist_en() {
		$this->load->view('page_navlist_en');
	}

	public function aboutus() {
		$this->load->view('page_aboutus');
	}

	public function aboutus_en() {
		$this->load->view('page_aboutus_en');
	}

	public function contact() {
		$this->load->view("page_contact");
	}

	public function contact_en() {
		$this->load->view("page_contact_en");
	}

	public function partners() {
		$this->load->view("page_partners");
	}

	public function partners_en() {
		$this->load->view("page_partners_en");
	}

	public function practices() {
		$this->load->view("page_practices");
	}

	public function practices_en() {
		$this->load->view("page_practices_en");
	}

	public function events() {
		$list = $this->newsmodel->get_list_by_cate(1);//培训与活动
		$data['news'] = $list;
		$this->load->view("page_events", $data);
	}

	public function events_en() {
		$list = $this->newsmodel->get_list_by_cate(2);//培训与活动-英文
		$data['news'] = $list;
		$this->load->view("page_events_en", $data);
	}

	public function eventlist() {
		$id = $this->input->get('id');
		$item = $this->newsmodel->get_single($id);
		$data['item'] = $item;
		$this->load->view("page_events_list", $data);
	}

	public function eventlist_en() {
		$id = $this->input->get('id');
		$item = $this->newsmodel->get_single($id);
		$data['item'] = $item;
		$this->load->view("page_events_list_en", $data);
	}

	public function partnerdetail() {
		$this->load->view("partnerdetail");
	}

	public function partnerdetail_en() {
		$this->load->view("partnerdetail_en");
	}

	/***********************人物详情********************/
	public function guhuimin() {
		$data = array(
			'name' => '谷惠敏',
 			'photo' => 'guhuimin.jpg',
			'title' => array('合伙人', '专利代理人'),
			'exp1' => array('21年实践经验','21年实践经验'),
			'exp2' => array('电子、计算机','测试'),
			'pageName' => 'guhuimin',
			'pageName2' => 'guhuimin_en',
		);
		$this->load->view("partnerdetail", $data);
	}

	public function guhuimin_en() {
		$data = array(
			'name' => 'Ms. Huimin Gu',
			'photo' => 'guhuimin.jpg',
			'title' => array('Partner', 'atent agent'),
			'exp1' => array('21 years of experience'),
			'exp2' => array('Electronic & computer technologies'),
			'pageName' => 'guhuimin_en',
			'pageName2' => 'guhuimin',
		);
		$this->load->view("partnerdetail", $data);
	}

}
