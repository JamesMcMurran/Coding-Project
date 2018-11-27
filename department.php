<?php include "header.php";?>
<!DOCTYPE html>
<html lang="en">
 
<head>
 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="style.css"/>

</head>
<body>
<?php



$servername = "localhost";
$username = "username";
$password = "password";
$db = "directorydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE  SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
//Reference lab 12//


// if ($result->num_rows> 0){
		
	
	while ($row=$result->fetch_assoc()){	
			echo "<br/>";
		echo "<tr>";
		echo "<td>";
		echo "<a href='update.php'?id=".$row["id"].">UPDATE</a> |";
		echo "<a href='delete.php'?id=".$row["id"].">DELETE</a> |";


	else {echo "no records";}
$conn->close();
?>
