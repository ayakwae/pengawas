<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditRuanganPelatihan extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editruanganpelatihan';
		$this->load->view('layout/main', $data);
	}

}
?>