<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PengawasJadwalSoshum extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/pengawasjadwalsoshum';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil60();
		$this->load->view('layout/main', $data);
	}

}
?>