<?php include 'login.php';
	
	if(isset($_SESSION['login_user'])){
	header("location: register.php");
}
?>
<!DOCTYPE html>
<html lang="en">


<head>

		<title>Login Page</title>
		<h1>Charles Goodling
		     Login Page</h1>
<!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
  <![endif]-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
   <link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
<body>	


</head>

<form action="/register.php">
  

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
</br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
</br>
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>
</br>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  <span> <?php echo $error;?> 
  
  
</form>
</body>
</html>


<?php
session_start();
// Store Session Data
$_SESSION['login_user']= $username;



?>

