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
}
?>