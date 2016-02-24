<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

include('application/libraries/libs/simple_html_dom.php');

class C_annisa extends CI_Controller {

    public function index() {
    	$url = "http://rsannisa-cikarang.com/index.php/2015-09-29";
		$html = file_get_html($url);

		$h_name = $html->find('div[class="entry clearfix"] p strong', 0);
		$specialist = $html->find('div[class="entry clearfix"] ul');

		$data = array(
				'name' => $h_name,
				'spec' => $specialist
				);
        $this->load->view('v_annisa', $data);
    }
}

?>