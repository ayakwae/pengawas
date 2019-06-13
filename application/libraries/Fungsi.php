<?php 

Class Fungsi{
	protected $ci;

	function __construct(){
		$this->ci =& get_instance();
	}

	function user_login(){
		$this->ci->load->model('adminmodel');
		$id_admin = $this->ci->session->userdata('idadmin');
		$user_data = $this->ci->adminmodel->get($id_admin)->row();
		return $user_data;
	}


}

 ?>