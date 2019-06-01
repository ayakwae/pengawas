<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class HalamanProfil extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/halamanprofil';
		$this->load->view('layout/main', $data);
	}

}
?>