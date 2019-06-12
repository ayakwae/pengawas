<?php defined('BASEPATH') OR exits ('No direct script access allowed');

/**
 * 
 */
class Auth extends CI_Controller
{
	
	public function loginadmin()
	{
		$this->load->view->userview('loginadmin');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE );
		if (isset($post['login'])) {
			$this->load->model('Adminmodel');
			$query = $this->Adminmodel->loginadmin($post);
			if ($query->num_rows()>0) {
				$row = $query->row();
				$params = array('id_admin' => $row->id_admin);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, login berhasil');
					window.location='".site_url('home')."'
				</script>";
			}else{
				echo "<script>
					alert('Login gagal, nama pengguna / kata sandi salah');
					window.location='".site_url('loginadmin')."'
				</script>";
			}
		}

		function logout(){
			session_destroy();
			redirect('auth/loginadmin', location);
		}
	}
}


?>