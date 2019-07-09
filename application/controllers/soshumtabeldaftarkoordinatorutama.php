<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumTabelDaftarKoordinatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumtabeldaftarkoordinatorutama';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil48();
		$this->load->view('layout/main', $data);
	}

}
?>