<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahSoshumDaftarKoordinatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahsoshumdaftarkoordinatorutama';
		$this->load->view('layout/main', $data);
	}

}
?>