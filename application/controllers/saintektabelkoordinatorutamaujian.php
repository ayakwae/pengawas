<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekTabelKoordinatorUtamaUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintektabelkoordinatorutamaujian';
		$this->load->view('layout/main', $data);
	}

}
?>