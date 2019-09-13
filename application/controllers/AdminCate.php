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

	public function get() {
		header('Content-type: application/json');
		$id = $this->input->post_get("cat_id");
		$result = array(
			'status' => STATUS_SUCCESS, 'status_text' => 'success', 'data' => '',
		);
		if (empty($id) || !is_numeric($id)) {
			$result['status'] = STATUS_ILLIGLE;
			$result['status_text'] = 'The param id is illigle';
			echo json_encode($result);
			return;
		}
		//尝试从缓存获取
		$inst = $this->catemodel->get_single($id);
		$result['data'] = $inst;
		echo json_encode($result);
		return;
	}

	public function set() {
		header('Content-type: application/json');
		$id = $this->input->post_get("cat_id");
		$name = $this->input->post_get("cat_name");
		$result = array(
			'status' => STATUS_SUCCESS, 'status_text' => 'success', 'data' => '',
		);
		$now = date('Y-m-d H:i:s');
		$data = array(
			'cat_name' => $name,
		);
		if (empty($id)) { //新增信息
			$data['insert_time'] = $now;
			$last_insert_id = $this->catemodel->add($data);
			if (empty($last_insert_id)) {
				$result['status'] = STATUS_FAILED;
				$result['status_text'] = 'failed';
			}
		} else { //修改信息
			$where = "cat_id={$id}";
			$affected_rows = $this->catemodel->update($data, $where);
			if (empty($affected_rows)) {
				$result['status'] = STATUS_FAILED;
				$result['status_text'] = 'failed';
			}
		}
		echo json_encode($result);
	}

	public function test()
	{
		echo "hello";
	}
}
