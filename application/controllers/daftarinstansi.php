<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DaftarInstansi extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/daftarinstansi';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil39();
		$this->load->view('layout/main', $data);
	}

}
?>