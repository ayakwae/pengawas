<?php defined('BASEPATH') OR exits ('No direct script access allowed');

/**
 * 
 */
class Auth extends CI_Controller
{
	
	public function loginadmin()
	{
		$data['border']='transparent';
		$data['page']='userview/loginadmin';
		$this->load->view('layout/main', $data);
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
					window.location='".site_url('home')."'
				</script>";
			}else{
				echo "<script type='text/javascript'>
        alert('Username & Password Anda Salah!');
        history.back(self);
        </script>";
			}
		}
	}
	public function logout(){ 

		$params = array('idadmin');
		$this->session->unset_userdata($params);
		redirect('auth/loginadmin');
	}

		// function logout(){
		// 	$this->session->sess_destroy();
	 //        setcookie('username','', 0, "/");
	 //        setcookie('password','', 0, "/");
	 //        $url=base_url('');
	 //        redirect($url);
		// }
}


?>