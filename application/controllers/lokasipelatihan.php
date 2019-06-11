<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LokasiPelatihan extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/lokasipelatihan';
		$this->load->view('layout/main', $data);
	}

}
?>