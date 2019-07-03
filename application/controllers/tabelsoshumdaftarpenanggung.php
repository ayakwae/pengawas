<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSoshumDaftarPenanggung extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsoshumdaftarpenanggung';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil1();
		$this->load->view('layout/main', $data);
	}

}
?>