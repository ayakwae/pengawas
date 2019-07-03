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
		$query = $this->db->get('daftar_pengawassiaga');
		return $query->result();
	}

	public function ambil4()
	{
		$query = $this->db->get('daftar_pengawassiaga_soshum');
		return $query->result();
	}

	public function ambil5()
	{
		$query = $this->db->get('daftar_pengawassiaga_campuran');
		return $query->result();
	}

	public function ambil6()
	{
		$query = $this->db->get('daftar_lokasi_saintek');
		return $query->result();
	}

	public function ambil7()
	{
		$query = $this->db->get('daftar_lokasi_soshum');
		return $query->result();
	}

	public function ambil8()
	{
		$query = $this->db->get('daftar_lokasi_campuran');
		return $query->result();
	}

	public function ambil9()
	{
		$query = $this->db->get('daftar_distribusi_koordinator_saintek');
		return $query->result();
	}

	public function ambil10()
	{
		$query = $this->db->get('daftar_distribusi_koordinator_utama_saintek');
		return $query->result();
	}

	public function ambil11()
	{
		$query = $this->db->get('daftar_distribusi_koordinator_utama_ujian_saintek');
		return $query->result();
	}

	public function ambil12()
	{
		$query = $this->db->get('daftar_distribusi_koordinator_ujian_saintek');
		return $query->result();
	}

	public function ambil13()
	{
		$query = $this->db->get('daftar_distribusi_pengawas_saintek');
		return $query->result();
	}

	public function ambil14()
	{
		$query = $this->db->get('daftar_distribusi_pengawas_siaga_saintek');
		return $query->result();
	}

	public function ambil15()
	{
		$query = $this->db->get('daftar_distribusi_pj_ruang_saintek');
		return $query->result();
	}

	public function ambil16()
	{
		$query = $this->db->get('daftar_distribusi_pengawas_ujian_saintek');
		return $query->result();
	}

	public function ambil17()
	{
		$query = $this->db->get('daftar_distribusi_pengawas_siaga_ujian_saintek');
		return $query->result();
	}

	public function ambil18()
	{
		$query = $this->db->get('daftar_distribusi_pj_ruang_ujian_saintek');
		return $query->result();
	}
	public function ambil19()
	{
		$query = $this->db->get('daftar_distribusi_koordinator_soshum');
		return $query->result();
	}

	public function ambil20()
	{
		$query = $this->db->get('daftar_distribusi_koordinator_utama_soshum');
		return $query->result();
	}

	public function ambil21()
	{
		$query = $this->db->get('daftar_distribusi_koordinator_utama_ujian_soshum');
		return $query->result();
	}

	public function ambil22()
	{
		$query = $this->db->get('daftar_distribusi_koordinator_ujian_soshum');
		return $query->result();
	}

	public function ambil23()
	{
		$query = $this->db->get('daftar_distribusi_pengawas_soshum');
		return $query->result();
	}

	public function ambil24()
	{
		$query = $this->db->get('daftar_distribusi_pengawas_siaga_soshum');
		return $query->result();
	}

	public function ambil25()
	{
		$query = $this->db->get('daftar_distribusi_pj_ruang_soshum');
		return $query->result();
	}

	public function ambil26()
	{
		$query = $this->db->get('daftar_distribusi_pengawas_ujian_soshum');
		return $query->result();
	}

	public function ambil27()
	{
		$query = $this->db->get('daftar_distribusi_pengawas_siaga_ujian_soshum');
		return $query->result();
	}

	public function ambil28()
	{
		$query = $this->db->get('daftar_distribusi_pj_ruang_ujian_soshum');
		return $query->result();
	}
	public function ambi29()
	{
		$query = $this->db->get('daftar_distribusi_koordinator_campuran');
		return $query->result();
	}

	public function ambil30()
	{
		$query = $this->db->get('daftar_distribusi_koordinator_utama_campuran');
		return $query->result();
	}

	public function ambil31()
	{
		$query = $this->db->get('daftar_distribusi_koordinator_utama_ujian_campuran');
		return $query->result();
	}

	public function ambil32()
	{
		$query = $this->db->get('daftar_distribusi_koordinator_ujian_campuran');
		return $query->result();
	}

	public function ambil33()
	{
		$query = $this->db->get('daftar_distribusi_pengawas_campuran');
		return $query->result();
	}

	public function ambil34()
	{
		$query = $this->db->get('daftar_distribusi_pengawas_siaga_campuran');
		return $query->result();
	}

	public function ambil35()
	{
		$query = $this->db->get('daftar_distribusi_pj_ruang_campuran');
		return $query->result();
	}

	public function ambil36()
	{
		$query = $this->db->get('daftar_distribusi_pengawas_ujian_campuran');
		return $query->result();
	}

	public function ambil37()
	{
		$query = $this->db->get('daftar_distribusi_pengawas_siaga_ujian_campuran');
		return $query->result();
	}

	public function ambil38()
	{
		$query = $this->db->get('daftar_distribusi_pj_ruang_ujian_campuran');
		return $query->result();
	}

	public function ambil39()
	{
		$query = $this->db->get('daftar_instansi');
		return $query->result();
	}


}
?>