<?php
/**
 * Created by IntelliJ IDEA.
 * User: xueyanjie
 * Date: 2019/9/12
 * Time: 9:54 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {
		$this->load->view('page_index');
	}

}
