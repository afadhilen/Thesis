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
	<table>
	<tr>
		<th>Doctor No-Entry</th>
		<th>Doctor Name</th>
		<th>Doctor Specialist</th>
		<th>Hospital Name</th>
		<th>Hospital Address</th>
	</tr>
	<?php foreach ($list_data as $data) { ?>
	<tr>
		<td><?php echo $data['no'];?></td>
		<td><?php echo $data['name'];?></td>
		<td><?php echo $data['specialist'];?></td>
		<td><?php echo $data['hospital'];?></td>
		<td><?php echo $data['address'];?></td>

	</tr>
		<?php } ?>
	</table>
		<a href = '<?php echo base_url() . 'c_doctor/' ?>' class="btn btn-primary btn-block btn-sm" size="15"> Back </a>
	</body>
</html>