<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
		<title>Doctors Data</title>
	</head>
	<body>
	<h1>Siloam-Jambi Hospital Schedule</h1>
		<?php
			$indx = 0;

			while($indx <= count($link_doctor)){
				if($indx > count($link_doctor)){
					die();
				}
				else{
					if(!isset($link_doctor[$indx])) {
 		 				$link_doctor[$indx] = 0;
					}
					else{
						$list[]=$link_doctor[$indx];	
					}
				}
						$indx = $indx + 3;
			}
				
			foreach ($list as $links) {
				echo $links;
			}

		?>
		<br/>
	<h1>Siloam-Cikarang Hospital Schedule</h1>
		<?php
			$indx_2 = 0;

			while($indx_2 <= count($link_doctor_2)){
				if($indx_2 > count($link_doctor_2)){
					die();
				}
				else{
					if(!isset($link_doctor_2[$indx_2])) {
 		 				$link_doctor_2[$indx_2] = 0;
					}
					else{
						$list_2[]=$link_doctor_2[$indx_2];	
					}
				}
						$indx_2 = $indx_2 + 3;
			}
				
			foreach ($list_2 as $links_2) {
				echo $links_2;
			}

		?>

	</body>
</html>