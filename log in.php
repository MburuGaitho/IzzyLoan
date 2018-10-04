<html>
<head>
<title>Log in</title>
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
nav {
    float: left;
    width: 20%;
    height: 300px; 
    background: #ccc;
    padding: 20px;
}
nav ul {
    list-style-type: none;
    padding: 0;
}
article {
    text-align:center
    border: 1px solid black;
    float: right;
    padding: 20px;
    width: 80%;
    background-color: #f1f1f1;
    height: 300px; 
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
  <h2>Log in</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="Create account.html">Create account</a></li>
      <br>
      <li><a href="#">FAQ</a></li>
    </ul>
  </nav>
  
  <article>
   <form action="/action_page.php">
  Username:<input type="text" name="Username" value="">
  <br>
  <br>
  Password:<input type="text" name="Password" value="">
  <br>
  <br>
  <input type="submit" value="Log in">
</form> 

  </article>
</section>


</body>
</html>
