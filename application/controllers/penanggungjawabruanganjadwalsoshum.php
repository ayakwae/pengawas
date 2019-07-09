<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PenanggungJawabRuanganJadwalSoshum extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/penanggungjawabruanganjadwalsoshum';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil62();
		$this->load->view('layout/main', $data);
	}

}
?>