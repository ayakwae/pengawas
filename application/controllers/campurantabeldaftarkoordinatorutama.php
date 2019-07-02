<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranTabelDaftarKoordinatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campurantabeldaftarkoordinatorutama';
		$this->load->view('layout/main', $data);
	}

}
?>