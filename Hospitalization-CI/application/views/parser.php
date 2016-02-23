<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HTML Parser</title>
	</head>
	<body>
		<?php
		//include('application/libraries/libs/simple_html_dom.php');

		$url = "http://www.siloamhospitals.com/doctors/find.html?hospital=22";
		$url2 = "http://www.siloamhospitals.com/our-hospitals/read/siloam-hospitals-jambi.html";
		$html2 = file_get_html($url2);
		$html = file_get_html($url);
		$doctor_name = $html->find('div[class="col-md-11] a h3');

		foreach ($doctor_name as $title) {
			echo $title->plaintext;
			echo "<hr><br/>";
	}
		?>

	</body>
</html>