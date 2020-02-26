<?php

	$contact=mysqli_connect("localhost","root","", "form");
	if(mysqli_connect_errno()){
		die("no connection".mysqli_connect_error());
	}

	if (isset($_POST['submit'])){
	 $connect=mysqli_connect("localhost","root","","form");
 	   if(mysqli_connect_errno()){
 	   	die("Error".mysqli_connect_error());
 	  }
 	  $name = $_POST['username'];
 	  $email = $_POST['email'];
 	  $message = $_POST['message'];
   	  $query = "INSERT INTO contacts (user_name,email, message) VALUES ('$name','$email','$message')";
     
      
      $result=mysqli_query($contact,$query);
    
   	}  



?>
<html>
<head>
	<title>contact form</title>
	<link rel="stylesheet" type="text/css" href="css/styl.css">
</head>
<body> 
	<div class="continer">
		<form action="" method="POST">
			<label> username:</label>
			<input type="text" name="username" placeholder="type your name"><br>

			<label> Email:</label>
			<input type="text" name="email" placeholder="type your email"><br> 

			<label> your message:</label>
			<textarea name="message" placeholder="type your owne message"></textarea><br>

			<button type="submit" name="submit">submit</button>
		</form>
	</div>
</body>
</html>