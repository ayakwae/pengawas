<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditPengawasSaintek extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editpengawassaintek';
		$this->load->view('layout/main', $data);
	}

}
?>