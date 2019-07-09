<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumTabelKoordinatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumtabelkoordinatorutama';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil20();
		$this->load->view('layout/main', $data);
	}

}
?>