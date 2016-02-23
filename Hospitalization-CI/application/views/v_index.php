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
		<h1>
			<center>Hospitalization</center>
		</h1>
			<table>
				<tr>
				<th>Siloam Hospital</th>
					<td><a href = '<?php echo base_url() . 'c_doctor/siloam_jambi/' ?>' class="btn btn-primary btn-sm"> Jambi </a></td>
			        <td><a href = '<?php echo base_url() . 'c_doctor/siloam_cikarang/' ?>' class="btn btn-default btn-sm"> Cikz </a></td>
	        	</tr>
	        	<tr>
	        	<th>Mitra Hospital </th>
	        		<td><a href='<?php echo base_url() . 'c_doctor_mitra/mitra_cikarang/' ?>' class="btn btn-primary btn-sm"> Show </a></td>
	        	</tr>
	        </table>
	        <br/>
	        <a href = '<?php echo base_url() . 'c_doctor/search_doctor' ?>' class = "btn btn-info btn-xs"> Find Your Doctor </a>
        </center>

	</body>
</html>