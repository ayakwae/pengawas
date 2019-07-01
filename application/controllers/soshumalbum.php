<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumAlbum extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumalbum';
		$this->load->view('layout/main', $data);
	}

}
?>