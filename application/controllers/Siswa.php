<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function pendaftaran_paud()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('pendaftaran/pendaftaran_paud');
        $this->load->view('admin/footer');
    }
    function hapusdatapaud($id){
        $this->ModelPaud->hapusdata($id);
        redirect('pendaftaran/pendaftaran_paud');
    }
    function tambahdatapaud()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('pendaftaran/addpendaftaran_paud');
        $this->load->view('admin/footer');
        
    }
    function pendaftaran_sd()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('pendaftaran/pendaftaran_sd');
        $this->load->view('admin/footer');
    }

}