<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class HonorBersih extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/honorbersih';
		$this->load->view('layout/main', $data);
	}

}
?>