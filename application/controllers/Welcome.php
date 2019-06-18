<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Data');
		$posts = $this->Data->getPosts();
		$this->load->view('welcome_message',['posts'=>$posts]);
	}
	public function create(){
		$this->load->view('create');
	}

	public function update($id_pengawas)
	{
		$this->load->model('Data');
		$post = $this->Data->getSinglePosts($id_pengawas);
		$this->load->view('update',['post'=>$post]);
	}

	public function save(){
		$this->form_validation->set_rules('no','no','required');
		$this->form_validation->set_rules('npu','npu','required');
		$this->form_validation->set_rules('nip','nip','required');
		$this->form_validation->set_rules('nama_pengawas','nama_pengawas','required');
		$this->form_validation->set_rules('gelar_depan','Gelar Depan','required');
		$this->form_validation->set_rules('gelar_belakang','Gelar Belakang','required');
		$this->form_validation->set_rules('kode_instansi','Kode Instansi','required');
		$this->form_validation->set_rules('golongan','Golongan','required');
		$this->form_validation->set_rules('npwp','NPWP','required');
		$this->form_validation->set_rules('telepon','Telepon','required');
		$this->form_validation->set_rules('jabatan','Jabatan','required');
		$this->form_validation->set_rules('status_pengawas','Status_Pengawas','required');
		$this->form_validation->set_rules('aksi','Aksi','required');
		if ($this->form_validation->run())
		{
			$data = $this->input->post();

			unset($data['submit']);
			$this->load->model('Data');
			if($this->Data->addPost($data)){
				$this->session->set_flashdata('msg','Data Saved Successfully');
			}
			else {
				$this->session->set_flashdata('msg','Failed to Save Data!');
			}
			return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}
	}

	public function change($id_pengawas){
		$this->form_validation->set_rules('no','no','required');
		$this->form_validation->set_rules('npu','npu','required');
		$this->form_validation->set_rules('nip','nip','required');
		$this->form_validation->set_rules('nama_pengawas','nama_pengawas','required');
		$this->form_validation->set_rules('gelar_depan','Gelar Depan','required');
		$this->form_validation->set_rules('gelar_belakang','Gelar Belakang','required');
		$this->form_validation->set_rules('kode_instansi','Kode Instansi','required');
		$this->form_validation->set_rules('golongan','Golongan','required');
		$this->form_validation->set_rules('npwp','NPWP','required');
		$this->form_validation->set_rules('telepon','Telepon','required');
		$this->form_validation->set_rules('jabatan','Jabatan','required');
		$this->form_validation->set_rules('status_pengawas','Status_Pengawas','required');
		$this->form_validation->set_rules('aksi','Aksi','required');
		if ($this->form_validation->run())
		{
			$data = $this->input->post();

			unset($data['submit']);
			$this->load->model('Data');
			if($this->Data->updatePost($data, $id_pengawas)){
				$this->session->set_flashdata('msg','Data Updated Successfully');
			}
			else {
				$this->session->set_flashdata('msg','Failed to Update Data!');
			}
			return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}
	} 

	public function view($id_pengawas){
		$this->load->model('Data');
		$post = $this->Data->getSinglePosts($id_pengawas);
		$this->load->view('view',['post'=>$post]);
	}

	public function delete($id_pengawas){
		$this->load->model('Data');
		if($this->Data->deletePosts($id_pengawas)){
			$this->session->set_flashdata('msg','Data Deleted Successfully');
		}
		else {
			$this->session->set_flashdata('msg','Failed to Delete Data!');
		}
		return redirect('welcome');
	}

}
