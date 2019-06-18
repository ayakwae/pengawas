<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahRuanganPelatihan extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahruanganpelatihan';
		$this->load->view('layout/main', $data);
	}

}
?>