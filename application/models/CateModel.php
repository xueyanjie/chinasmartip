<?php
/**
 * Created by PhpStorm.
 * User: xueyanjie
 * Date: 2017/4/18
 * Time: 15:55
 */
class CateModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	/**
	 * 插入新数据
	 * @param unknown $data
	 */
	public function add($data)
	{
		//$data = array('name' => $name, 'email' => $email, 'url' => $url);
		$sql = $this->db->insert_string('cs_cate', $data);
		$this->db->query($sql);
		return $this->db->insert_id();
	}

	/**
	 * 更新数据
	 * @param unknown $data
	 * @param unknown $where
	 */
	public function update($data, $where)
	{
//         $data = array('name' => $name, 'email' => $email, 'url' => $url);
//         $where = "author_id = 1 AND status = 'active'";
		$sql = $this->db->update_string('cs_cate', $data, $where);
		$this->db->query($sql);
		return $this->db->affected_rows();
	}




	/**
	 * 根据主键删除数据
	 * @param unknown $id
	 */
	public function delete($id)
	{
		$sql = "DELETE FROM cs_cate WHERE id=?";
		$this->db->query($sql, array($id));
		return $this->db->affected_rows();
	}

	/**
	 * 获取主题数据条目数
	 * @param unknown $userid  用户名
	 * @return number|unknown
	 */
	public function get_list_count()
	{
		$sql = "select count(*) as total from cs_cate";
		$query = $this->db->query($sql);
		$row = $query->row_array();
		if (empty($row) || !isset($row['total'])) {
			return 0;
		}
		return $row['total'];
	}

	/**
	 * 分页获取主题列表信息
	 * @param string $userid  用户名
	 * @param int $pn      页码
	 * @param int $pz      页大小
	 * @param int $total   可选参数：如果已知总数，则不用再算，直接传参
	 */
	public function get_list($pn, $pz, $total = 0)
	{
		if (empty($total)) {
			$total = $this->get_list_count();
		}
		if (empty($pn)||$pn < 1) {
			$pn = 1;
		}
		$pz = intval($pz);
		$offset = ($pn - 1) * $pz;
		$sql = 'select *'
			. " from cs_cate order by id desc limit ?,?";
		$query = $this->db->query($sql, array($offset, $pz));
		return $query->result_array();
	}

	//倒序获得最新的N个活动信息
	public function get_list_top($top = 10)
	{
		$top = intval($top);
		$sql = 'select *'
			. " from cs_cate order by id desc limit ?";
		$query = $this->db->query($sql, array($top));
		return $query->result_array();
	}

	/**
	 * 根据主题id和user_id获取单条主题信息
	 * @param unknown $theme_id
	 * @param unknown $userid
	 * @return Ambigous <boolean, unknown>
	 */
	public function get_single($id)
	{
		if (empty($id) || !is_numeric($id)) {
			return false;
		}
		//$sql = "SELECT * FROM some_table WHERE id IN ? AND status = ? AND author = ?";
		//$this->db->query($sql, array(array(3, 6), 'live', 'Rick'));
		//SELECT * FROM some_table WHERE id IN (3,6) AND status = 'live' AND author = 'Rick'
		$sql = 'SELECT * FROM cs_cate WHERE id=? limit 1';
		$query = $this->db->query($sql, array($id));
		$result = $query->result_array();
		return !empty($result)&&isset($result[0]) ? $result[0] : false;
	}
}
