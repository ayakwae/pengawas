<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranAlbum extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campuranalbum';
		$this->load->view('layout/main', $data);
	}

}
?>