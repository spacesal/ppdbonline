<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{
private $table = 'login';
private $pk    = 'pk';

    public function cek_login ($table,$where)
    {
       return $this->db->get_where($table,$where);
    }

}