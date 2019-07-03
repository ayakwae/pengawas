<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSoshumDistribusiPengawasUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsoshumdistribusipengawasujian';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil26();
		$this->load->view('layout/main', $data);
	}

}
?>