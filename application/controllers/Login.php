<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }



    function index()
    {
        $this->load->view('auth/login');
    }

    }

