<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSaintekDistribusiPengawasSiagaUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsaintekdistribusipengawassiagaujian';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil17();
		$this->load->view('layout/main', $data);
	}

}
?>