<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hospitalization_model extends CI_Model {

    public function getdata_siloam_jambi() {
    	$query = $this->db->query('SELECT * FROM doctor_siloam_jambi');
    	return $query->result_array();
    }

    public function getdata_siloam_cikarang() {
    	$query = $this->db->query('SELECT * FROM doctor_siloam_cikarang');
    	return $query->result_array();
    }

    public function checkdata($name){
    	$this->db->select('*');
        $this->db->from('doctor');
        $this->db->where('name', $name);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }
}

?>