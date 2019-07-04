<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cetak extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/cetak';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil54();
	}

}
?>