<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function process(){
		$post = $this->input->post(null, true);
		if(isset($post['login'])){
			$this->load->model('User_m');
			$query = $this->User_m->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				$params = [
					'userid' => $row->user_id,
					'level' => $row->level
				];
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, login berhasil');
					window.location='".site_url('dashboard')."';
				</script>";
			} else {
				echo "<script>
					alert('Login Gagal, password / username salah');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		} 
	}

	public function logout(){
		$params = array('level', 'userid');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
