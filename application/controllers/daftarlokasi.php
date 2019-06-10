<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DaftarLokasi extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/daftarlokasi';
		$this->load->view('layout/main', $data);
	}

}
?>