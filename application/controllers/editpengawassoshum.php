<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditPengawasSoshum extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editpengawassoshum';
		$this->load->view('layout/main', $data);
	}

}
?>