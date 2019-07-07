<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditSoshumDistribusiKoordinatorUtamaUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editsoshumdistribusikoordinatorutamaujian';
		$this->load->view('layout/main', $data);
	}

}
?>