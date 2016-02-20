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
		$url = "http://www.siloamhospitals.com/doctors/find.html?hospital=17";
		$url2 = "http://www.siloamhospitals.com/our-hospitals/read/siloam-hospitals-jambi.html";
		$html2 = file_get_html($url2);
		$html = file_get_html($url);
		$counter = 0;

		$con = mysql_connect("localhost", "root", "");
		mysql_select_db("hospitalization", $con);
		
		$sql1 = "SELECT name FROM doctor_siloam_jambi";
		$result1 = mysql_query($sql1);
		$rowz = mysql_num_rows($result1);
		$rows = array();
		while ($row = mysql_fetch_array($result1, MYSQL_NUM)) {
			$rows[] = $row;
		}

		if(!$con){
			die(mysql_error());
		}
		else
		{	
			if ($rows > 0){
			//echo "DB up to date";
			}
			else{
			$sql = "SHOW TABLES FROM hospitalization";
			$result = mysql_query($sql);
			if(!$result)
			{

			}
			else
			{
				$data = $html->find('li[class="row"] div h3', 0)->plaintext;
				$address = $html2->find('div[class="row"] div[class="col-md-8"]', 0)->plaintext;
				// foreach ($html->find('li[class="row"] div h3') as $spec_list) {
				// 	# code...
				// }
				foreach ($html->find('div[class="col-md-11] a h3') as $table_list) {
					if($rows = $table_list){

					}
					else{	
						$query = mysql_query("INSERT INTO `doctor_siloam_cikarang` (`name`,`hospital`,`address`) VALUES ('$table_list->plaintext', '$data', '$address')");
				if (!$query)
				{
				die(mysql_error());
				}
			}
		}
	}
	}
}
		?>
	

	</body>
</html>