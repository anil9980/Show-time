<html>
<head>
<title>View</title>
<style type="text/css">
h3 {
   border-style:double;
   border-width:5px;
   border-color:black;
   color:white;
}
table {
    border-spacing: 100px;
}
th {
    text-align:center;
    
}
th, td {
    padding: 15px;
    color:white;
}
table {
    border-spacing: 5px;
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
 <li><a href="admin.php"><b><font size="5">Back</b></a></font>
 </li>
</ul>
<?php
include "connect.php";
$query="call total";
$result=$con->query($query);
$row=mysqli_fetch_row($result);
$total=$row[0];
?>
<br>
<br>
      <table width="90%" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><font size="5" color="black">Payment Id</font></th>
          <td><font size="5" color="black">Payment Type</font></th>
          <td><font size="5" color="black">Movie Name</font></th>
          <td><font size="5" color="black">User Name</font></th>
          <td><font size="5" color="black">Payment Amount</font></th>
        </tr>
<?php
include "connect.php";
$query="select payment_id,payment_type,movie_name,user_name,payment_amount from payment,ticket where payment.ticket_id=ticket.ticket_id";
$result=$con->query($query);
while($row1=mysqli_fetch_row($result))
{ 
   echo"<tr>";
   echo"<td>";
   echo $row1[0];
   echo"</td>";
   echo"<td>";
   echo $row1[1];
   echo"</td>";
   echo"<td>";
   echo $row1[2];
   echo"</td>";
    echo"<td>";
   echo $row1[3];
   echo"</td>";
    echo"<td>";
   echo $row1[4];
   echo"</td>";
   echo "</tr>";
}
?>
      <tr>
          <td><font size="5" color="black"></font></th>
          <td><font size="5" color="black"></font></th>
          <td><font size="5" color="black"></font></th>
          <td><font size="5" color="black">Total=</font></th>
          <?php
            echo " <td><font size=\"5\" color=\"black\">$total</font></th>";
         ?>
        </tr>
</table>
</body>
</html>