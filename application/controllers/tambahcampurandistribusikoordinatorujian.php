<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahCampuranDistribusiKoordinatorUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahcampurandistribusikoordinatorujian';
		$this->load->view('layout/main', $data);
	}

}
?>