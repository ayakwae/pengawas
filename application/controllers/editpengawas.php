<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editpengawas';
		$this->load->view('layout/main', $data);
	}

}
?>