<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSaintekDistribusiPenanggung extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsaintekdistribusipenanggung';
		$this->load->view('layout/main', $data);
	}

}
?>