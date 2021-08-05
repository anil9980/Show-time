<html>
<head>
   <title>Payment</title>
<style type="text/css">
body {
     background:linear-gradient(#283c86,#45a247);
     font-family:serif;
}

input {
   color:white;
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

h1 {
color:white;
}
h2 {
color:black;
}
input[type=submit] {
padding:5px 15px;
    background:#0F0F0F;
border:1;
font-weight:bold;
border-radius:10px;
}
input[type=text]{
padding:5px 15px;
    background:#ccc;
border:1;
font-weight:bold;
border-radius:10px;
}
input[type=submit]:focus { 
border-color:white;
background:blue;
}
input[type=text]:focus { 
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
<br>

 
<fieldset>
<legend align="center"><h2><b>PAYMENT</h2> </b></legend>
<form action="confirm.php" method="post" >
<h2 align="center">
   <label> <b>Payment Mode :</b> 
    <?php
     $mode=$_POST["type"];
     echo"$mode";
     ?>
  </label>
</h2>
<h2 align="center">
   <label> <b>Enter CARD NUMBER number:</b> 
    <input type="text" name="cvv" required="required" />
  </label>
</h2>
<h2 align="center">
   <label> <b>Enter CVV number:</b> 
    <input type="text" name="cvv" required="required" />
  </label>
</h2>
<h2 align="center">
   <label> <b>Amount :</b> 
    <?php
     $num=$_POST["tickets"];
     $movie=$_POST["movie"];
     $price=$_POST["price"];
     $total=$num*$price;
    echo"$total";
echo " <input type=\"hidden\" name=\"price\" value=\"$total\"> ";
echo " <input type=\"hidden\" name=\"type\" value=\"$mode\"> ";
echo " <input type=\"hidden\" name=\"movie\" value=\"$movie\"> ";
echo " <input type=\"hidden\" name=\"tickets\" value=\"$num\"> ";
     ?>
  </label>
</h2>
</fieldset>
<h2 align="center">
   <label> 
   <input type ="submit" name="submit" value="Pay Now"  />
   
  </label>
</h2>
   </form>
<hr align="left" width="100%" size="1" color="black" />
<hr align="left" width="100%" size="1" color="white" />
<hr align="left" width="100%" size="1" color="black" />
<hr align="left" width="100%" size="1" color="white" />
<hr align="left" width="100%" size="1" color="black" />
<hr align="left" width="100%" size="1" color="white" />
</body>
</html>