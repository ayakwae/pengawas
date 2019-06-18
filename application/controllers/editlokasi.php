<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditLokasi extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editlokasi';
		$this->load->view('layout/main', $data);
	}

}
?>