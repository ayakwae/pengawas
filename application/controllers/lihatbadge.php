<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LihatBadge extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/lihatbadge';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil54();
		$this->load->view('layout/main', $data);
	}

}
?>