<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KoordinatorJadwalCampuran extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/koordinatorjadwalcampuran';
		$this->load->view('layout/main', $data);
	}

}
?>