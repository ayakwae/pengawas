<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranTabelKoordinatorUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campurantabelkoordinatorujian';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil32();
		$this->load->view('layout/main', $data);
	}

}
?>