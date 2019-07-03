<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSaintekDistribusiPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsaintekdistribusipengawas';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil13();
		$this->load->view('layout/main', $data);
	}

}
?>