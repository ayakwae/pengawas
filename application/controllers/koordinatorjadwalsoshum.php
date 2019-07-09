<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KoordinatorJadwalSoshum extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/koordinatorjadwalsoshum';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil63();
		$this->load->view('layout/main', $data);
	}

}
?>