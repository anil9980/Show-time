<html>
<head>
<title>Admin</title>
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
background-color:#495C70;
}
}
input[type=submit] {
padding:5px 15px;
background:#0f0f0f;
color:white;
border:2;
border-radius:10px;
}
fieldset {
background-color:#495C70;
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
 <li><a href="index.html"><b><font size="5">Home</b></a></font>
 </li>
</ul>
<br>
<marquee width="20%"><b><?php
session_start();
echo "Welcome admin &nbsp ";
echo $_SESSION['admin'];
?></b></marquee>
<hr>
<hr>
<h2 align="center" style="color:#000000;">MOVIES PRESENT IN THE DATABASE</h2>
<hr>
<hr>
<p align="center" >
<font size="5" color="black">
<b>
<?php
include "connect.php";
$query="select * from movies";
$result=$con->query($query);
while($row=mysqli_fetch_row($result))
{
echo $row[1];
echo"<br>";
}
?>
<b>
</font>
</p>
<br>
<hr>
<hr>
<h2 align="center" style="color:#000000;">What Would You Like To Do</h2>
<hr>
<hr>
<br>
<h3 align="center">
<form action="insert.php" method="post">
<input type="submit" value="INSERT">(INSERT A MOVIE )
</form>
<br>
<form action="update.php" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="UPDATE">(UPDATE A MOVIE DETAILS)
<br>
<br>
</form>
<form action="delete.php" method="post">
<input type="submit" value="DELETE">(DELETE A MOVIE)
<br>
<br>
</form>
<form action="view.php" method="post">
<input type="submit" value="View">(View Booking Details)
</h3><br>
<br>
</form>    
</body>
</html>