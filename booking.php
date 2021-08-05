<html>
<head>
<title>Booking</title>
<style>
input {
color:black;
width:20%;
height:5%;
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
body {
     background:linear-gradient(#283c86,#45a247);
     font-family:serif;
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
$name=$_POST['moviename'] ;
?>
<br>
<br>
<form action="payment.php" method="post">
<fieldset>
<fieldset>
<fieldset>
<fieldset align="center">
<legend align="center"><b><h2>Booking</h2></b></legend>
<label><h2 align="center">Movie Name : <?php echo"$name"; ?>
</h2></label>

<label><h2 align="center">Number Of Tickets : 
<select name="tickets">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</h2></label>
<label>
<h2 align="center">
<?php
include "connect.php";
$query="select movie_price from movies where movie_name=\"$name\"";
$result=$con->query($query);
$row=mysqli_fetch_row($result);
echo "Price/Ticket : $row[0] ";
echo " <input type=\"hidden\" name=\"movie\" value=\"$name\"> ";
echo " <input type=\"hidden\" name=\"price\" value=\"$row[0]\"> ";
?>
</h2>
</label>
<label>
<h2 align="center">Payment Type :
<select name="type">
<option>Debit Card</option>
<option>Credit Card</option>
</select>
</h2>
</label>
</fieldset>
</fieldset>
</fieldset>
</fieldset>
<label>
<h2 align="center">
<input type="submit" value="Proceed To Pay">
</h2>
</label>
</form>
</body>
</html>