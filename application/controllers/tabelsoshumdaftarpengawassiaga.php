<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSoshumDaftarPengawasSiaga extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsoshumdaftarpengawassiaga';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil4();
		$this->load->view('layout/main', $data);
	}

}
?>