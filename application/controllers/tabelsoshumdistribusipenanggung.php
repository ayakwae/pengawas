<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSoshumDistribusiPenanggung extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsoshumdistribusipenanggung';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil25();
		$this->load->view('layout/main', $data);
	}

}
?>