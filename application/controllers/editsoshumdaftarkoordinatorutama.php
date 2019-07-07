<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditSoshumDaftarKoordinatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editsoshumdaftarkoordinatorutama';
		$this->load->view('layout/main', $data);
	}

}
?>