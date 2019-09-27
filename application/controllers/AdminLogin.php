<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("admin/admin_login");
	}

	public function check()
	{
		$user = $this->input->post('username');
		$pwd = $this->input->post('password');
		$code = $this->input->post('code');
		$month = intval(date('m'));
		$date = intval(date('d'));
		$checked = true;
		var_dump($user, $pwd, $code, $month, $date);die;
		if ($code != $month + $date) {
			$checked = false;
		} else if ($user != 'hzjc') {
			$checked = false;
		} else if ($pwd != 'Hzjc417!') {
			$checked = false;
		}
		if ($checked === false) {
			$this->load->view('admin/admin_login_fail');
		} else {
			$this->load->view('admin/admin_cate');
		}
	}
}
