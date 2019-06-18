<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditRuanganUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editruanganujian';
		$this->load->view('layout/main', $data);
	}

}
?>