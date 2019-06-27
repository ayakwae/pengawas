<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LihatAlbum extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/lihatalbum';
		$this->load->view('layout/main', $data);
	}

}
?>