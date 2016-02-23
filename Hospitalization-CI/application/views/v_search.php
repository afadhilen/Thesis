<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
	    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>">
		<title>Find Your Doctor</title>
	</head>
	<body>
		<p>Find Your Doctor Here</p>
		<form name = "form-search" method="post" action="search_doctor.php">
			<input name="search" type="text" size="40" maxlength="50"/>
			<input name="submit" type="submit" value="Search" class="btn btn-info btn-xs"/>
		</form>
	</body>
</html>