<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentifikasi extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function login()
    {
    
    }
    public function prosesregister()
	{
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[tb_user.username]');
		$this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->auth->register($username,$email,$password);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('home/login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('home/register');
		}
	}

}