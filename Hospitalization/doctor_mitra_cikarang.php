<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HTML Parser</title>
	</head>
	<body>
		<?php
		//require 'libs/simple_html_dom.php';
		include('libs/simple_html_dom.php');
		//$html = new simple_html_dom();

		for($indx = 0; $indx < count($test); $indx++){
			$page = 0;	

		}
		$url = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpvcategory=0&wpv_column_sort_id=post_title&wpv_column_sort_dir=asc&wpv_post_id=75&wpv_view_count=6175&wpv_paged=1";
		$html = file_get_html($url);
		

		$con = mysql_connect("localhost", "root", "");
		mysql_select_db("hospitalization", $con);



		foreach ($html->find('div[class="hidden-desktop widget widget_ultimatumwysiwyg inner-container"] table tbody tr') as $table_data) {
			$data[] = $table_data->outertext;	
		}

		print_r($data);
		// foreach ($data as $datadata) {
		// 	print_r($datadata);
		// 	echo "<br>";
		// }
?>
	
	</body>
</html>