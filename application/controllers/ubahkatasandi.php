<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UbahKataSandi extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/ubahkatasandi';
		$this->load->view('layout/main', $data);
	}

}
?>