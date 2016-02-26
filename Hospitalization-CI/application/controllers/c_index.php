<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


include('application/libraries/libs/simple_html_dom.php');


class C_index extends CI_Controller {

    public function index() {
    	
        $this->load->view('v_index');
    }
    
    public function getHospital(){
    	$url = "http://www.siloamhospitals.com/our-hospitals/read/siloam-hospitals-jambi.html";
		$html = file_get_html($url);
		$name = $html->find('div[class="col-md-offset-2 head-section"] h1');
		
		$this->db->select('*');
		$this->db->from('hospital');
		//$this->db->where('no', count($doctor_name));
		$query = $this->db->get();

  		if ($query->num_rows() > 0) {
		    	echo "<script>alert('Database up to date');</script>";
		 } else {
		 		foreach ($name as $name_list) {
		 		$name_list = $name_list->plaintext;
				$data = array(
						'name' => $name_list,
						'address' => 'Jl. Soekarno Hatta Paal Merah Jambi',
						'phone' => '(+62 741) 591 9000',
						'email' => 'siloamjambi.cs@siloamhospitals.com'
					);
			
				$this->db->insert('hospital', $data);
			}
				echo "<script>alert('Database updated');</script>";	
		}
	
		$data1 = $this->hospitalization_model->getdata_hospital();
		$this->load->view('v_page', array('list_hospital' => $data1));
    }
}

?>