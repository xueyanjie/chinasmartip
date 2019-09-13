<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminNews extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('catemodel');
		$this->load->model('newsmodel');
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
		$total = $this->newsmodel->get_list_count();
		$list = $this->newsmodel->get_list($pn, $pz, $total);
		$data['pn'] = $pn;
		$data['pz'] = $pz;
		$data['pm'] = ceil($total/$pz);
		$data['total'] = $total;
		$data['list'] = $list;
		$this->load->view('admin/admin_news', $data);
	}

	public function page_edit() {
		$id = $this->input->post_get("id");
		$inst = $this->newsmodel->get_single($id);
		$data["info"] = $inst;
		$data["id"] = empty($id) ? "" : $id;
		$data["has"] = !empty($inst);//是否有结果
		$cates = $this->catemodel->get_list_top(100);
		$data["cates"] = $cates;
		$this->load->view('admin/admin_news_edit', $data);
	}

	public function get() {
		header('Content-type: application/json');
		$id = $this->input->post_get("id");
		$result = array(
			'status' => 0, 'status_text' => 'success', 'data' => '',
		);
		if (empty($id) || !is_numeric($id)) {
			$result['status'] = -3;
			$result['status_text'] = 'The param id is illigle';
			echo json_encode($result);
			return;
		}
		//尝试从缓存获取
		$inst = $this->newsmodel->get_single($id);
		$result['data'] = $inst;
		echo json_encode($result);
		return;
	}

	public function set() {
		header('Content-type: application/json');
		$id = $this->input->post_get("id");
		$cat_id = $this->input->post_get("cat_id");
		$result = array(
			'status' => 0, 'status_text' => 'success', 'data' => '',
		);
		$now = date('Y-m-d H:i:s');
		$data = array(
			'cat_id' => $cat_id,
		);
		if (empty($id)) { //新增信息
			$data['insert_time'] = $now;
			$last_insert_id = $this->newsmodel->add($data);
			if (empty($last_insert_id)) {
				$result['status'] = -1;
				$result['status_text'] = 'failed';
			}
		} else { //修改信息
			$where = "id={$id}";
			$affected_rows = $this->newsmodel->update($data, $where);
			if (empty($affected_rows)) {
				$result['status'] = -1;
				$result['status_text'] = 'failed';
			}
		}
		echo json_encode($result);
	}

	public function del() {
		$result = array(
			'status' => 0, 'status_text' => 'success', 'data' => '',
		);
		header('Content-type: application/json');
		$id = $this->input->post_get("id");
		$affected_rows = $this->newsmodel->delete($id);
		if (empty($affected_rows)) {
			$result['status'] = -1;
			$result['status_text'] = 'failed';
		}
		echo json_encode($result);
	}

	public function test()
	{
		echo "hello";
	}
}
