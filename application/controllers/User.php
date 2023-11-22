<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $this->load->view('user/header');
        $this->load->view('user/topbar');
        $this->load->view('user/sidebar');
        $this->load->view('user/index');
    }
    function pendaftaran_paud()
    {
        $this->load->view('user/header');
        $this->load->view('user/topbar');
        $this->load->view('user/sidebar');
        $this->load->view('user/pendaftaran_paud');
        
    }
}