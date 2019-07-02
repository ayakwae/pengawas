<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahCampuranDistribusiPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahcampurandistribusipengawas';
		$this->load->view('layout/main', $data);
	}

}
?>