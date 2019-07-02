<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LihatDistribusiPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/lihatdistribusipengawas';
		$this->load->view('layout/main', $data);
	}

}
?>