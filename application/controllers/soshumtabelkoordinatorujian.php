<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumTabelKoordinatorUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumtabelkoordinatorujian';
		$this->load->view('layout/main', $data);
	}

}
?>