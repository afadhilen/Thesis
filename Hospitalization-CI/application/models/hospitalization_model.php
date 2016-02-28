<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hospitalization_model extends CI_Model {

    public function getdata_hospital(){
        $query = $this->db->query('SELECT * FROM hospital');
        return $query->result_array();
    }

    public function getdata_siloam_jambi() {
    	$query = $this->db->query('SELECT * FROM doctor_siloam_jambi');
    	return $query->result_array();
    }

    public function getdata_siloam_cikarang() {
    	$query = $this->db->query('SELECT * FROM doctor_siloam_cikarang');
    	return $query->result_array();
    }

    public function search_doctor($name){
        $this->db->like('name', $name);
        $query = $this->db->get('doctor_siloam_jambi');
        $output = "";
    
    if ($name == ""){
        return "Empty field-box!";
    }
    else{
        if ($query->num_rows() < 0) {
            return 'There was no search result!';
        } else {
            foreach ($query->result() as $data) {
                $output .= '<tr> <td>' .$data->no.'</td> <td>' .$data->name.'</td> <td>'.$data->specialist. '</td> <td>'.$data->hospital.'</td></tr>';
            }
            if ($output == ""){
                return "Empty field-box!";
            }
            else{
            return $output;
            }
        }   
    }
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