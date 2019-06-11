<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class RuanganPelatihan extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/ruanganpelatihan';
		$this->load->view('layout/main', $data);
	}

}
?>