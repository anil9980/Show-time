<html>
<head>
   <title> Sign up</title>
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
    color:black;
    text-align:center;
}
h2 {
color:white;
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
input[type=submit] {
padding:5px 15px;
    background:#0F0F0F;
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
<h1><b><font size="10">ONLINE MOVIE TICKET BOOKING</b></h1></font>
<ul>
 <li><a href="admin.php"><b><font size="5">BACK</b></a></font>
 </li>
</ul>
<br></br>
<br>
<br>
<br>
<br>
<h1 align="center">
<?php
$moviename=$_POST['moviename'];
$movielanguage=$_POST['movielanguage'];
$movieactor=$_POST['movieactor'];
$movieactress=$_POST['movieactress'];
$moviedirector=$_POST['moviedirector'];
$movierating=$_POST['movierating'];
$movielocation=$_POST['movielocation'];
$movieprice=$_POST['movieprice'];

include "connect.php";
$query="insert into movies values (\"$movielocation\",\"$moviename\",\"$movielanguage\",\"$moviedirector\",\"$movierating\",\"$movieprice\") ";
$result=$con->query($query);
$query1="insert into moviecast values (\"$movieactor\",\"$movieactress\",\"$moviename\") ";
$result1=$con->query($query1);
if($result && $result1)
echo "MOVIE ADDED";
else
echo "errror inserting";
?>
</h1>
<h3 align="center">
<a href="admin.php">GO BACK</a>
</h3>
</body>
</html>