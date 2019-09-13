<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('catemodel');
	}

	public function index()
	{
		$pn = $this->input->get('pn');
		if (empty($pn) || !is_numeric($pn) || $pn < 0) {
			$pn = 1;
		}
		$pz = $this->input->get('pz');
		if (empty($pz) || !is_numeric($pz) || $pz < 0 || $pz > 100) {
			$pz = 15;
		}
		$data = array();
		$total = $this->catemodel->get_list_count();
		$list = $this->catemodel->get_list($pn, $pz, $total);
		$data['pn'] = $pn;
		$data['pz'] = $pz;
		$data['pm'] = ceil($total/$pz);
		$data['total'] = $total;
		$data['list'] = $list;
		$this->load->view('admin/admin_cate', $data);
	}

	public function test()
	{
		echo "hello";
	}
}
