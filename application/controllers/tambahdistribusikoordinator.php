<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahDistribusiKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahdistribusikoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>