<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LihatJadwal extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/lihatjadwal';
		$this->load->view('layout/main', $data);
	}

}
?>