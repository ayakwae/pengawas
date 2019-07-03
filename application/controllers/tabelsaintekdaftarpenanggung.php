<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSaintekDaftarPenanggung extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsaintekdaftarpenanggung';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil();
		$this->load->view('layout/main', $data);
	}

}
?>