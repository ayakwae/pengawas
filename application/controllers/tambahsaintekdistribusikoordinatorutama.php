<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahSaintekDistribusiKoordinatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahsaintekdistribusikoordinatorutama';
		$this->load->view('layout/main', $data);
	}

}
?>