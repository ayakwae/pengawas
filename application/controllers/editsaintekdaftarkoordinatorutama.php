<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditSaintekDaftarKoordinatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editsaintekdaftarkoordinatorutama';
		$this->load->view('layout/main', $data);
	}

}
?>