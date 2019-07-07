<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahCampuranDaftarKoordinatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahcampurandaftarkoordinatorutama';
		$this->load->view('layout/main', $data);
	}

}
?>