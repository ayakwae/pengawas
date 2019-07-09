<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KoordinatorJadwalSaintek extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/koordinatorjadwalsaintek';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil57();
		$this->load->view('layout/main', $data);
	}

}
?>