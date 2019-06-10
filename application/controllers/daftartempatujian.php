<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DaftarTempatUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/daftartempatujian';
		$this->load->view('layout/main', $data);
	}

}
?>