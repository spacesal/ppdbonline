<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPaud extends CI_Model
{
    private $table = 'pendaftaran_paud';
    private $pk    = 'pk';

    public function hapusdata($id)
    {
        $this->db->delete('pendaftaran_paud' , ['id' => $id]);
    }
}
