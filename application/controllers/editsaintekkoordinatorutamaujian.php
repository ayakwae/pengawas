<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditSaintekKoordinatorUtamaUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editsaintekkoordinatorutamaujian';
		$this->load->view('layout/main', $data);
	}

}
?>