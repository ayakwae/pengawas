<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekTabelKoordinatorUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintektabelkoordinatorujian';
		$this->load->view('layout/main', $data);
	}

}
?>