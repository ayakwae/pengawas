<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelCampuranDaftarPenanggung extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelcampurandaftarpenanggung';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil42();
		$this->load->view('layout/main', $data);
	}

}
?>