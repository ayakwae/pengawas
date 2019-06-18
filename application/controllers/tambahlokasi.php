<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahLokasi extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahlokasi';
		$this->load->view('layout/main', $data);
	}

}
?>