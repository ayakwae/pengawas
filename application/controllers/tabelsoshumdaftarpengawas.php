<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSoshumDaftarPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsoshumdaftarpengawas';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil1();
		$this->load->view('layout/main', $data);
	}

}
?>