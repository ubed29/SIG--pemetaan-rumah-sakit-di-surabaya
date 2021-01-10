<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_rs extends CI_Model {

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_rs');
        return $this->db->get()->result();
    }
}