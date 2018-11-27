<?php include "header.php";?>
<!DOCTYPE html>
<html lang="en">
 
<head>
 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="finalproject.css"/>

</head>
<body>
		<form >
			
			
			
			
			<label class="FirstName">First Name:</label><br>
			<input type= "Text" id= "FirstName" name="first_name"/> <br/>
			
			
			<label class="LastName">Last Name:</label><br>
			<input type= "Text" id= "LastName" name="last_name"/><br/>
	
			<label class ="PhoneNumber">Phone Number :</label><br>
			<input type= "text" id= "phone_number" name="phone_number"/><br/>
			
			<label class="office_location">Office Location:</label><br>
			<input type= "Text" id= "Office_Location" name="office_location"/><br/>
		
			<label class="password">Password:</label><br>
			<input type= "Text" id= "password" name="password"> <br/>
			 <button type="submit">Login</button>
		<button type="submit" value="Send" name="butt"><input type="reset" value="Clear"> </button>
		<script>
		function init() {
			 var myForm= document.getElementById("myForm") 
			 myForm.onsubmit = function () {
				 
				 if (document.getElementById("myName").value===""){
					 document.getElementById(err1).innerhtml= "Try again";
					 isValid= false
					  }
				 if (isValid) {return true;} else {return false;}
				 
			 }
			 }
		window.onload.init
		</script>
		
		</form>	
			
		
		<br/>
</html>		
</body>
