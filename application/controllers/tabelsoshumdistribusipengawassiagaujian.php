<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSoshumDistribusiPengawasSiagaUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsoshumdistribusipengawassiagaujian';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil27();
		$this->load->view('layout/main', $data);
	}

}
?>