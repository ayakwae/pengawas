<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PenanggungJawabRuanganJadwalCampuran extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/penanggungjawabruanganjadwalcampuran';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil67();
		$this->load->view('layout/main', $data);
	}

}
?>