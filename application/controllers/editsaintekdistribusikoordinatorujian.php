<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditSaintekDistribusiKoordinatorUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editsaintekdistribusikoordinatorujian';
		$this->load->view('layout/main', $data);
	}

}
?>