<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditTambahPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/edittambahpengawas';
		$this->load->view('layout/main', $data);
	}

}
?>