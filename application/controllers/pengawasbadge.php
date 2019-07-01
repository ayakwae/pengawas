<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PengawasBadge extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/pengawasbadge';
		$this->load->view('layout/main', $data);
	}

}
?>