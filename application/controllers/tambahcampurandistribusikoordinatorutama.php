<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahCampuranDistribusiKoordinatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahcampurandistribusikoordinatorutama';
		$this->load->view('layout/main', $data);
	}

}
?>