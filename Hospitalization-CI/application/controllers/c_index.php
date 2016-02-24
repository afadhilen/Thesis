<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


//session_start();

class C_index extends CI_Controller {

    public function index() {
        $this->load->view('v_index');
    }
}

?>