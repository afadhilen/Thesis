<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HTML Parser</title>
	</head>
	<body>
		<?php
		include('application/libraries/libs/simple_html_dom.php');

		$url = "http://mitrakeluarga.com/cikarang/jadwal-dokter/?wpvcategory=0&wpv_column_sort_id=post_title&wpv_column_sort_dir=asc&wpv_post_id=75&wpv_view_count=6175&wpv_paged=5";
		$html = file_get_html($url);
		$doctor_name = $html->find('div[class="js-wpv-view-layout js-wpv-layout-responsive wpv-pagination js-wpv-layout-has-pagination wpv-pagination-preload-images js-wpv-layout-preload-images wpv-pagination-preload-pages js-wpv-layout-preload-pages"] table tbody tr');
		
		// echo($doctor_name);
		// echo "<br/>";
		// print_r($doctor_name);

		foreach ($doctor_name as $title) {
			echo $title;
			echo "<hr><br/>";
	}
		?>

	</body>
</html>