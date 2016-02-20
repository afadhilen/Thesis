<?php

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("hospitalization") or die(mysql_error());

$output = '';
$table = '';
$table_end = '';

if (isset($_POST['search'])){
	$search_q = $_POST['search'];
	$search_q = preg_replace("#[^0-9a-z]#i", "", $search_q);

	$query = mysql_query("SELECT * FROM doctor_siloam_jambi WHERE name LIKE '%$search_q%' OR specialist LIKE '%$search_q'") or die (mysql_error());
	$query2 = mysql_query("SELECT * FROM doctor_siloam_cikarang WHERE name LIKE '%$search_q%' OR specialist LIKE '%$search_q'") or die (mysql_error());
	$count =  mysql_num_rows($query);
	$count2 =  mysql_num_rows($query2);


	if($count == 0 && $count2 == 0){
		$output = 'There was no search result!';
	}
	else{
		
		while(($row = mysql_fetch_array($query)) || ($row = mysql_fetch_array($query2))){
			$id = $row['no'];
			$name = $row['name'];
			$spec = $row['specialist'];
			$hosp = $row['hospital'];
			$addr = $row['address'];

			$table = '<table border="1"> 
						<th> Doctor Entry Number </th>
						<th> Doctor Name </th> 
						<th> Specialist </th>
						<th> Hospital </th>
						<th> Address </th>';

			$output .= '<tr> <td>' .$id.'</td> <td>' .$name.'</td> <td>'.$spec. '</td> <td>'.$hosp.'</td> <td>'.$addr.'</tr>';
			$table_end = '</table>';

			// echo "<tr>";
			// echo "<td>" .  $name . "</td>";
			// echo "<td>" .  $spec . "</td>";
			// echo "</tr>";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search : Siloam Hospital Jambi</title>
</head>
<body>
<p>Search</p>
	<form name = "form-search" method="post" action="search_doctor.php">
		<input name="search" type="text" size="40" maxlength="50"/>
		<input name="submit" type="submit" value="Search"/>
	</form>
	<?php
	echo "<br>";
	print("$table");
	print("$output");
	print("$table_end");
	?>
</body>
</html>