<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekTabelDaftarKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintektabeldaftarkoordinator';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil44();
		$this->load->view('layout/main', $data);
	}

}
?>