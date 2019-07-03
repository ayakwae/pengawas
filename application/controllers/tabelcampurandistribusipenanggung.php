<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelCampuranDistribusiPenanggung extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelcampurandistribusipenanggung';
		$this->load->view('layout/main', $data);
	}

}
?>