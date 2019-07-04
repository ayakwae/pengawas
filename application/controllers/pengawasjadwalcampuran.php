<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PengawasJadwalCampuran extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/pengawasjadwalcampuran';
		$this->load->view('layout/main', $data);
	}

}
?>