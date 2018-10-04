<?php
 
include 'connection.php';
 error_reporting(0);
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $pass = $_POST['Pass'];
  
if(!$_POST['submit']){
	// you can remove this echo code and add alert using JS or use required tag in your input feilds.
	
  echo "All fields must be filled";
  
}

else {
 // insert into tableName (fields) values (variables) If still you cant understand please check videos on my youtube channel NOSGENE or comment there so i can help you
 
$sql = "INSERT INTO tenants (name,email,pass)
VALUES ('$name', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>New record created successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<html>
<head>
<title>Loan</title>
</head>

<body>
   
	<h2>Apply for loan</h2>
		<form action="add.php" method="POST">
			Name: <input type="text" name="Name" value="" required><br><br>
			Email: <input type="email" name="Email" value="" required><br><br>
			Password: <input type="Password" name="Pass" value="" required><br>
	<br>
			<input type="submit" name="submit" value="add"/></center>
</body>

<!--
	Similarly you can make delete and updates pages with little changes in sql query and here and there. If you need to learn those too
	please check my youtube channel NOSGENE as i am running a full stack web development course there right now.
 -->
</html>