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

	public function aboutus() {
		$this->load->view('page_aboutus');
	}

}
