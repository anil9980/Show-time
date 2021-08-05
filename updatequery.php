<html>
<head>
   <title>UPDATED</title>
<style type="text/css">
body {
     background:linear-gradient(#283c86,#45a247);
     font-family:serif;
}

ul { 
list-style-type:none;
      margin:0;
     padding:0;
    overflow:hidden;
    background-color:black;
 }

input {
   color:white;
   width:20%;
height:5%;
}
h1 {
background-color:#6e7b8b;
    color:#cccccc;
    text-align:center;
}
h2 {
color:#cccccc;
}
li  {
   display:inline;
   float:left;
}
li a {  
display:block;
color:#cccccc;
text-align:center;
padding:16px 35px;
text-decoration:none;
}
</style>
</head>
<body>
<h1 align="center"><font size="6"><b>ONLINE MOVIE TICKET BOOKING</b></font>
</h1>
<hr align="left" width="100%" size="1" color="black" />
<hr align="left" width="100%" size="1" color="white" />
<hr align="left" width="100%" size="1" color="white" />
<hr align="left" width="100%" size="2" color="black" />
<ul>
 <li><a href="admin.php"><b><font size="5">Back</b></a></font>
 </li>
</ul>
<br></br>
<br>
<br>
<br>
<br>
<h1 align="center">
<?php
$movie=$_POST['movie'];
$price=$_POST['price'];
include "connect.php";
$query="UPDATE movies SET movie_price=\"$price\" where movie_name=\"$movie\"";
$result=$con->query($query);
if($result)
echo "Movie Price Updated";
else
{
echo "Error Occured While Updating";
echo "<br>";
echo"<a href=\"delete.php\">Try Again</a>";
}
?>
</h1>
<h3 align="center">
<a href="admin.php">GO BACK</a>
</h3>
</body>
</html>