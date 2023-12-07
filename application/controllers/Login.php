<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }

    function index()
    {
        $this->load->view('auth/login');
    }
    public function proseslogin()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run() == true) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($this->auth->login_user($username, $password)) {
                redirect('admin');
            } else {
                $this->session->set_flashdata('error', 'Username & Password salah');
                redirect('login');
            }
        }
        else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('login');
		}
    }
    
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('is_login');
		redirect('home');
	}
}
