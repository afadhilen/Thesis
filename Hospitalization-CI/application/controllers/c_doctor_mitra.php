<?php
	if (!defined('BASEPATH'))
	    exit('No direct script access allowed');


	include('application/libraries/libs/simple_html_dom.php');
	class C_doctor_mitra extends CI_Controller {
		
	    public function index() {
	    	$this->load->view('v_index');
	    }

	    public function mitra_cikarang(){
	    	$this->load->model('hospitalization_model');

			$url = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpvcategory=0&wpv_column_sort_id=post_title&wpv_column_sort_dir=asc&wpv_post_id=75&wpv_view_count=6175&wpv_paged=5";
			// $url_2 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpvcategory=0&wpv_column_sort_id=post_title&wpv_column_sort_dir=asc&wpv_post_id=75&wpv_view_count=6175&wpv_paged=2";
			// $url_3 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpvcategory=0&wpv_column_sort_id=post_title&wpv_column_sort_dir=asc&wpv_post_id=75&wpv_view_count=6175&wpv_paged=3";
			$html = file_get_html($url);
			// $html_2 = file_get_html($url_2);
			// $html_3 = file_get_html($url_3);

			$doc_name = $html->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			// $doc_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			// $doc_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
			
			$data = array(
							'name' => $doc_name,
							// 'name_2' => $doc_name_2,
							// 'name_3' => $doc_name_3
						);
			$this->load->view('v_doctor_mitra_cikarang', $data);
	    }
	}
?>