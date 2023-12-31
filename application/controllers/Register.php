<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }

    function index()
    {
        $this->load->view('auth/register');
    }
    public function prosesregister()
	{
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]');
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