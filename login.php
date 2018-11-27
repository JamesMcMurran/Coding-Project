
<?php include "header.php";?>

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
 <form action="dashboard.php" method="return">

  
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br/>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br/>

    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me<br/>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button><br/>
    <span class="psw">Forgot <a href="#">password?</a></span>
  
   <button type="button" class="Userbtn"onclick="location.href='register.php' ">New User</button>
  </div>
</form>
 <?php
 
$servername = "localhost";
$username = "root";
$password = "Pass1234";
$dbname = "directorydb";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
//((select * from 'persons' INNER JOIN department on persDept=deptid))//
$sql= "Select * From ";
	/*if (isset ($_get["q"]."'"))
	{
		//$sql= "Select * From orders Where last_name LIKE "%".$_get["q"]."%'";
	}*/
	echo "<h2>".$sql."</h2>";
	//print _r <$results);
	if ($result->num_rows> 0){
		
	
	while ($row=$result->fetch_assoc()){	
			echo "<br/>";
		echo "<tr>";
		echo "<td>";
		echo "<a href='update.php'?id=".$row["id"].">UPDATE</a> |";
		echo "<a href='delete.php'?id=".$row["id"].">DELETE</a> |";
	}
	} 
	else {echo "no records";}
$conn->close();
?>
 
 
 
 
 
 
 
 
 




</body>
</html>
<?php include "footer.php"?> 
 
