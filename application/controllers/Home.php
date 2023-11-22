<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {
    $this->load->view('homepage/header');
    $this->load->view('homepage/index');
    $this->load->view('homepage/footer');
    }

    function login() 
    {
        $this->load->view('auth/login');
    }

    function register()
    {
        $this->load->view('auth/register');
    }
    function about()
    {
        $this->load->view('homepage/about');
        $this->load->view('homepage/footer');
    }
    function contact()
    {
        $this->load->view('homepage/contact');
        $this->load->view('homepage/footer');
    }
}