<?php
/**
 * Created by IntelliJ IDEA.
 * User: xueyanjie
 * Date: 2019/9/12
 * Time: 9:54 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

//	public function header() {
//		$this->load->view("");
//	}

	public function index() {
		$this->load->view('page_index');
	}

	public function en() {
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

}
