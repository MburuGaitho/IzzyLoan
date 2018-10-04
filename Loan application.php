<?php
include 'connection.php';
 error_reporting(0);
  $address = $_POST['Address'];
  $employer = $_POST['Employer'];
  $waddress = $_POST['WAddress'];
  $choice = $_POST['Choice'];
  $amount = $_POST['Amount'];

if(!$_POST['submit']){
  // you can remove this echo code and add alert using JS or use required tag in your input feilds.
  
  echo "All fields must be filled";
  
}

else {
 // insert into tableName (fields) values (variables) If still you cant understand please check videos on my youtube channel NOSGENE or comment there so i can help you
 
$sql = "INSERT INTO loan (HomeAddress,Employer,WorkAddress,DueLoans,Amount)
VALUES ('$address', '$employer', '$waddress', '$choice', '$amount')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>Loan applied successfully</center></h1>";
} 
else {echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
<html>
<head>
<title>Loan application</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}
body {
    font-family: Arial, Helvetica, sans-serif;
}
header {
    background-color:  blue;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}
article {
    list-style-type: none;
    text-align:center;
    float: left;
    padding: 20px;
    width: 100%;
    background-color: #f1f1f1;
    height: 350px; 
}


section:after {
    content: "";
    display: table;
    clear: both;
}

footer {
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
    color: blue;
}


@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>


<header>
  <h2>Fill in the details below</h2>
</header>

<section>
  
  
  <article>
   <form action="/action_page.php">
  Home address:<input type="text" name="Address" value="">
  <br>
  <br>
  Employer:<input type="text" name="Employer" value="">
  <br>
  <br>
  Work Address:<input type="text" name="Waddress" value="">
  <br>
  <br>
  Do you have any due loans?(Type YES or NO):<input type="text" name="Choice" value="">
  <br>
  <br>
  Amount:<input type="text" name="Amount" value="">
  <br>
  <br>

  <input type="submit" value="Apply">
</form>  



</body>
</html>
