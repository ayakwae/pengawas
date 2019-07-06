<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditSoshumDistribusiKoordinatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editsoshumdistribusikoordinatorutama';
		$this->load->view('layout/main', $data);
	}

}
?>