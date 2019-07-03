<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {
	
	public function loginadmin($post){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $post['username']);
		$this->db->where('password', $post['password']);
		$query = $this->db->get();
		return $query;
	}

	public function get($id = null){
		$this->db->from('admin');
		if ($id != null) {
			$this->db->where('id_admin', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function ambil()
	{
		$query = $this->db->get('daftar_pengawas_saintek');
		return $query->result();
	}

	public function ambil1()
	{
		$query = $this->db->get('daftar_pengawas_soshum');
		return $query->result();
	}

	public function ambil2()
	{
		$query = $this->db->get('daftar_pengawas_campuran');
		return $query->result();
	}

	public function ambil3()
	{
		$query = $this->db->get('daftar_pengawas_siaga');
		return $query->result();
	}

	public function ambil4()
	{
		$query = $this->db->get('daftar_pengawas_siaga_soshum');
		return $query->result();
	}

	public function ambil5()
	{
		$query = $this->db->get('daftar_pengawas_siaga_campuran');
		return $query->result();
	}
}
?>