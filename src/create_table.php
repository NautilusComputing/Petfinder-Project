<?php
echo "Hi there<br/>";
$options = array("Database"=>'PetfinderDatabase', "UID"=>"IT353F904", "PWD"=>"bell35");
$conn = sqlsrv_connect('itkmssql', $options);
if($conn===false)
{
	die(print_r(sqlsrv_errors(), true));
}
else
{
	echo "Connected Successfully. <br/>";
}

/* $tableName = "petTable";
$query = "ALTER TABLE $tableName
		  ALTER COLUMN petID varchar(255)";

$stmt = sqlsrv_query($conn, $query);
if($stmt===false)
{
	die(print_r(sqlsrv_errors(), true));
}
else
{
	echo "Table creation completed";
	
} */

$tableName = "petTable";
$query = "INSERT INTO $tableName VALUES('0001', 'Lilly', 'dog', 'mixed breed', 'senior', 'medium', 'female', 'kids', 'short', 'house-trained')";
$stmt = sqlsrv_query($conn, $query);
if($stmt===false)
{
	die(print_r(sqlsrv_errors(), true));
}
else
{
	echo "Insert completed";
	
}

?> 



	