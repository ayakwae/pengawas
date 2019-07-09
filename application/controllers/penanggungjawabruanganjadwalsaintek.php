<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PenanggungJawabRuanganJadwalSaintek extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/penanggungjawabruanganjadwalsaintek';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil59();
		$this->load->view('layout/main', $data);
	}

}
?>