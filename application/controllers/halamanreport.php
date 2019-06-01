<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class HalamanReport extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/halamanreport';
		$this->load->view('layout/main', $data);
	}

}
?>