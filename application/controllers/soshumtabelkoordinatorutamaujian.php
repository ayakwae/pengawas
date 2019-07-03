<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumTabelKoordinatorUtamaUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumtabelkoordinatorutamaujian';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil21();
		$this->load->view('layout/main', $data);
	}

}
?>