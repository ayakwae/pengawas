<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranTabelKoordinatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campurantabelkoordinatorutama';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil30();
		$this->load->view('layout/main', $data);
	}

}
?>