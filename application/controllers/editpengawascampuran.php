<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditPengawasCampuran extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editpengawascampuran';
		$this->load->view('layout/main', $data);
	}

}
?>