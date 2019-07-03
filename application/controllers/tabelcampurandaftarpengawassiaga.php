<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelCampuranDaftarPengawasSiaga extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelcampurandaftarpengawassiaga';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil2();
		$this->load->view('layout/main', $data);
	}

}
?>