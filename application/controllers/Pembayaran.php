<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function pembayaran_paud()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('pembayaran/pembayaran_paud');
        $this->load->view('admin/footer');
    }
    function pembayaran_sd()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('pembayaran/pembayaran_sd');
        $this->load->view('admin/footer');
    }
}