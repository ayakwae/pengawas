<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumTabelKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumtabelkoordinator';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil19();
		$this->load->view('layout/main', $data);
	}

}
?>