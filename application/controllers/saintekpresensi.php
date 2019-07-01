<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekPresensi extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintekpresensi';
		$this->load->view('layout/main', $data);
	}

}
?>