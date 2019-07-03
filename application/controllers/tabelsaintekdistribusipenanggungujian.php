<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSaintekDistribusiPenanggungUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsaintekdistribusipenanggungujian';
		$this->load->view('layout/main', $data);
	}

}
?>