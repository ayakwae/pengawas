<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelCampuranDistribusiPengawasSiaga extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelcampurandistribusipengawassiaga';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil34();
		$this->load->view('layout/main', $data);
	}

}
?>