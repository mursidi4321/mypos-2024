<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('user_m');
	}

	public function index()
	{
        $data['rows'] =$this->user_m->get();
		$this->template->load('template', 'user/user_data', $data);
	}

    public function add(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullname', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('passconf', 'Confirm password', 'required|min_length[4]|matches[password]',[
			'matches' => 'Confirmasi password tidak sesuai'
		]);
		$this->form_validation->set_message(['required' => '%s tidak boleh kosong',
									'min_length' => '%s minimal 4 karakter', 'is_unique' => '%s  sudah digunakan']);
		$this->form_validation->set_rules('level', 'Level', 'required');

		if($this->form_validation->run() == false){
			$this->template->load('template', 'user/user_form_add');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->add($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Berhasil tambah data user');
				window.location='".site_url('user')."'
				 </script>";
			} else {
				echo "<script>window.location='".site_url('user')."'</script>";
			}
		}
    }
}