<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSoshumDistribusiPengawasSiaga extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsoshumdistribusipengawassiaga';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil24();
		$this->load->view('layout/main', $data);
	}

}
?>