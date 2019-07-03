<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelCampuranDistribusiPenanggungUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelcampurandistribusipenanggungujian';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil38();
		$this->load->view('layout/main', $data);
	}

}
?>