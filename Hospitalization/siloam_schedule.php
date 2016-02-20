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
		$url = "http://www.siloamhospitals.com/doctors/find.html?hospital=22";
		$url2 = "http://www.siloamhospitals.com/doctors/find.html?hospital=17";
		$html2 = file_get_html($url2);
		$html = file_get_html($url);
		$indx = 0;

		foreach ($html->find('li[class="row"] div[class="row"] div[class="col-md-11"] a') as $table_list) {
			$data[] = $table_list->href;
		}

		while($indx <= count($data)){
			if($indx > count($data)){
				
			}
			else{
				if(!isset($data[$indx])) {
 		 			$data[$indx] = 0;
				}
			$list[]=$data[$indx];
			$indx = $indx + 3;
		}
	}
		foreach ($list as $list_data) {
			echo "<a href='" . $list_data . "'</a>";
			echo "<br>";
			print_r($list_data);
		}
		//print_r($data);
		die();
	?>
	
	</body>
</html>