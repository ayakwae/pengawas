<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSoshumDistribusiPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsoshumdistribusipengawas';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil23();
		$this->load->view('layout/main', $data);
	}

}
?>