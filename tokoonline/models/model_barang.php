<?php

class Model_barang extends CI_Model{
    public function tampil_data(){
        return $this->db->get('toko_online');
    }
}