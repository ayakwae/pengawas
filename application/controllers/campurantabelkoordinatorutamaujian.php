<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranTabelKoordinatorUtamaUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campurantabelkoordinatorutamaujian';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil31();
		$this->load->view('layout/main', $data);
	}

}
?>