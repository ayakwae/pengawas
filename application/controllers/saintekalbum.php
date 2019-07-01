<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekAlbum extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintekalbum';
		$this->load->view('layout/main', $data);
	}

}
?>