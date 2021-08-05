<html>
<head>
<title>MOVIES</title>
<style type="text/css">
h3 {
   border-style:double;
   border-width:5px;
   border-color:black;
   color:white;
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
body {
     background:linear-gradient(#45a247,#283c86);
     font-family:serif;
}
li a {  
display:block;
color:#cccccc;
text-align:center;
padding:16px 35px;
text-decoration:none;
}
img {
 float:left;
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
 <li><a href="index.html"><b><font size="5">Home</b></a></font>
 </li>
</ul>
<?php
session_start();
if($_SESSION['login']==0)
{ 
$user=$_SESSION['loginuser'];
echo"<script type='text/javascript'>alert('HELLO $user WELCOME TO ONLINE MOVIE TICKET BOOKING')</script>";
 $_SESSION['login']=1;
}
include "connect.php";
$query="select movie_image,movies.movie_name,movie_language,movie_actor,movie_actress,movie_director,movie_rating from movies,moviecast where movies.movie_name=moviecast.movie_name";
$result=$con->query($query);
while($row=mysqli_fetch_row($result))
{
  echo"<div style=\"background-color: rgba(0, 0, 0, 0.5);\">";
  echo " <form action=\"booking.php\" method=\"post\"> ";
   echo "<h3>";
   echo "<p>";
   echo "<img src=\"$row[0]\" border=\"8\" width=\"30%\" height=\"25%\"> ";
   echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
   echo " Movie Name &nbsp : &nbsp";
   echo $row[1];
   echo "<br>";
   echo "&nbsp";echo "&nbsp";echo "&nbsp";
   echo "Movie Language &nbsp:&nbsp";
    echo $row[2];
     echo "<br>";
   echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
   echo " Movie Actor &nbsp:&nbsp";
   echo $row[3];
   echo "<br>";
   echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
 echo "Movie Actress &nbsp:&nbsp";
   echo $row[4];
   echo "<br>";
   echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
echo " Director &nbsp:&nbsp";
   echo $row[5];
   echo "<br>";
 echo "&nbsp";echo "&nbsp";echo "&nbsp";
echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";  echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
echo " Rating  &nbsp:&nbsp";
   echo $row[6];
   echo "<br>";
   echo "<br>";
echo " <input type=\"hidden\" name=\"moviename\" value=\"$row[1]\" > ";
echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
echo " <input type=\"submit\" value=\"Book Now\" > ";
   echo "</p>";
   echo "</h3>";
echo "</form>";
echo "</div>";
}
?>
</body>
</html>