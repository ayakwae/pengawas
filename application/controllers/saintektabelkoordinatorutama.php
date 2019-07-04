<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekTabelKoordinatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintektabelkoordinatorutama';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil46();
		$this->load->view('layout/main', $data);
	}

}
?>