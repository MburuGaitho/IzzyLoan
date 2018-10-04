<php>
 ?>
<html>
<head>
<title>Create account</title>
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
  <h2>Create account</h2>
</header>

<section>
  
  
  <article>
   <form action="/action_page.php">
  Username:<input type="text" name="Username" value="">
  <br>
  <br>
  Email:<input type="text" name="Email" value="">
  <br>
  <br>
  Password:<input type="text" name="Password" value="">
  <br>
  <br>
  Confirm Password:<input type="text" name="Password" value="">
  <br>
  <br>
  Country/State:<input type="text" name="Country/State" value="">
  <br>
  <br>
  National ID Number:<input type="text" name="NationalID" value="">
  <br>
  <br>
  Phone Number:<input type="text" name="PhoneNumber" value="">
  <br>
  <br>
  <input type="submit" value="Create account">
</form>  
<li><a href="log in.html">Already have an account?</a></li>
  </article>
</section>



</body>
</html>
