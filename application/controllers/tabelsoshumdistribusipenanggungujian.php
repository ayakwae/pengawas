<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSoshumDistribusiPenanggungUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsoshumdistribusipenanggungujian';
		$this->load->view('layout/main', $data);
	}

}
?>