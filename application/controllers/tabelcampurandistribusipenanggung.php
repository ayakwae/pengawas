<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelCampuranDistribusiPenanggung extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelcampurandistribusipenanggung';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil35();
		$this->load->view('layout/main', $data);
	}

}
?>