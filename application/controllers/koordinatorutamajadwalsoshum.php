<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KoordinatorUtamaJadwalSoshum extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/koordinatorutamajadwalsoshum';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil64();
		$this->load->view('layout/main', $data);
	}

}
?>