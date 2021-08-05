<html>
<head>
<title>Confirm</title>
<style>
input {
color:black;
width:20%;
height:5%;
}
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
h2 {
color:black;
}
}
input[type=submit] {
padding:5px 15px;
background:#0f0f0f;
color:white;
border:2;
border-radius:10px;
}
select{
padding:5px 15px;
    background:#ccc;
border:1;
font-weight:bold;
border-radius:10px;
}
input[type=submit]:focus { 
border-color:#333;
background:blue;
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
 <li><a href="movie.php"><b><font size="5">Back</b></a></font>
 </li>
</ul>
<?php
$movie=$_POST['movie'];
session_start();
$user=$_SESSION['loginuser'];
$tickets=$_POST['tickets'];
$type=$_POST['type'];
$price=$_POST['price'];
include "connect.php";
$query1="insert into ticket values(\"\",\"$movie\",\"$user\",\"$tickets\")";
$result1=$con->query($query1);
$query3="select max(ticket_id) from ticket";
$result3=$con->query($query3);
$row1=mysqli_fetch_row($result3);
$ticketid=$row1[0];
$query2="insert into payment values(\"\",\"$type\",\"$price\",\"$ticketid\")";
$result2=$con->query($query2);
if($result1 && $result2)
{  
    echo "<h2 align=\"center\">";
    echo"  <fieldset> ";
     echo "Your Booking Reference Number is \"$ticketid \"";
echo "<br>";echo "<br>";
     echo " Movie Name : $movie";
     echo "<br>";echo "<br>";
     echo " Number Of Tickets :$tickets "; 
     echo "<br>";echo "<br>";
     echo " Amount : $price";
     echo "<br>";echo "<br>";
     echo "<br>";
     echo "<form action=\"movie.php\" method=\"post\">";
      echo "<input type=\"submit\" value=\"RETURN\">";
     echo "</form>";
     echo "</h2>";       
}
else{
echo" error booking tickets";
}
?>
</body>
</html>