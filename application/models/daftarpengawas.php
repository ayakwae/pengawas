<?php
	class DaftarPengawas extends CI_Model{
		public function getPosts(){
			$query = $this->db->get('pengawas');
			if ($query->num_rows() > 0){
				return $query->result();
			}
		}

		public function addPost($data){
			return $this->db->insert('pengawas', $data);
		}

		public function getSinglePosts($id_pengawas){
			$query = $this->db->get_where('pengawas', array('id_pengawas'=>$id_pengawas));
			if ($query->num_rows() > 0){
				return $query->row();
			}
		}

		public function updatePost($data, $id_pengawas){
			return $this->db->where('id_pengawas', $id_pasien)
						->update('pengawas', $data);
		}

		public function deletePosts($id_pengawas){
			return $this->db->delete('pengawas',['id_pengawas'=>$id_pengawas]);
		}
	}
?>