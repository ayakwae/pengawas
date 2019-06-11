<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LokasiUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/lokasiujian';
		$this->load->view('layout/main', $data);
	}

}
?>