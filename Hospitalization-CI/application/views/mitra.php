<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HTML Parser</title>
	</head>
	<body>
	<?php
		include('application/libraries/libs/simple_html_dom.php');
		
		$url_1 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpv_view_count=6175&wpv_paged=1";
		$url_2 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpv_view_count=6175&wpv_paged=2";
		$url_3 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpv_view_count=6175&wpv_paged=3";
		$url_4 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpv_view_count=6175&wpv_paged=4";
		$url_5 = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpv_view_count=6175&wpv_paged=5";
		$html_1 = file_get_html($url_1);
		$html_2 = file_get_html($url_2);
		$html_3 = file_get_html($url_3);
		$html_4 = file_get_html($url_4);
		$html_5 = file_get_html($url_5);
		$doc_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
		$doc_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
		$doc_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
		$doc_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');
		$doc_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h4');

		$spec_name_1 = $html_1->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
		// $spec_name_2 = $html_2->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
		// $spec_name_3 = $html_3->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
		// $spec_name_4 = $html_4->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');
		// $spec_name_5 = $html_5->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr h5');

		$indx1 = 0;
		$indx2 = 0;
		$indx3 = 0;
		$indx4 = 0;
		$indx5 = 0;

		foreach ($doc_name_1 as $table_list) {
			$data[] = $table_list->plaintext;
		}
		while($indx1 <= 9){
			$list[]=$data[$indx1];
			$indx1 = $indx1 + 1;
		}
		foreach ($list as $list_data) {
			echo $list_data;
			echo "<br>";
			//print_r($list_data);
		}
		echo "<hr/>";

		foreach ($doc_name_2 as $table_list2) {
			$data2[] = $table_list2->plaintext;
		}
		while($indx2 <= 9){
			if(!isset($data2[$indx2])) {
 		 		$data2[$indx2] = 0;
			}
			$list2[]=$data2[$indx2];
			$indx2 = $indx2 + 1;
		}	
		foreach ($list2 as $list_data2) {
			echo $list_data2;
			echo "<br>";
			//print_r($list_data);
		}
		echo "<hr/>";

		foreach ($doc_name_3 as $table_list3) {
			$data3[] = $table_list3->plaintext;
		}
		while($indx3 <= 9){
			if(!isset($data3[$indx3])) {
 		 		$data3[$indx3] = 0;
			}
			$list3[]=$data3[$indx3];
			$indx3 = $indx3 + 1;
		}	
		foreach ($list3 as $list_data3) {
			echo $list_data3;
			echo "<br>";
			//print_r($list_data);
		}
		echo "<hr/>";

		foreach ($doc_name_4 as $table_list4) {
			$data4[] = $table_list4->plaintext;
		}
		while($indx4 <= 9){
			if(!isset($data4[$indx4])) {
 		 		$data4[$indx4] = 0;
			}
			$list4[]=$data4[$indx4];
			$indx4 = $indx4 + 1;
		}	
		foreach ($list4 as $list_data4) {
			echo $list_data4;
			echo "<br>";
			//print_r($list_data);
		}
		echo "<hr/>";

		foreach ($doc_name_5 as $table_list5) {
			$data5[] = $table_list5->plaintext;
		}
		while($indx5 <= 1){
			if(!isset($data5[$indx5])) {
 		 		$data4[$indx5] = 0;
			}
			$list5[]=$data5[$indx5];
			$indx5 = $indx5 + 1;
		}	
		foreach ($list5 as $list_data5) {
			echo $list_data5;
			echo "<br>";
			//print_r($list_data);
		}
		echo "<hr/>";



		foreach ($spec_name_1 as $table_list) {
			$data1[] = $table_list->plaintext;
		}
		while($indx1 <= 9){
			if(!isset($data[$indx1])) {
 		 		$data[$indx1] = 0;
			}
			$list[]=$data[$indx1];
			$indx1 = $indx1 + 1;
		}
		foreach ($list as $list_data) {
			echo $list_data;
			echo "<br>";
			//print_r($list_data);
		}
		echo "<hr/>";

	?>
	</body>
</html>