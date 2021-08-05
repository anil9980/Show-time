<html>
<head>
   <title> Insert</title>
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
border-color:#333;
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
 <li><a href="admin.php"><b><font size="5">Back</b></a></font>
 </li>
</ul>
<br></br>

<fieldset>
<legend align="center"><h2><b></h2> </b></legend>
   <h2 align="center" >
   <form action="insertquery.php" method="post" >
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label> <b>Movie Name :</b> 
    <input type="text" name ="moviename" required="required" /> <br />
   </label>
   </h2>
   <h2 align="center">
   &nbsp;&nbsp;<label> <b>Movie Language :</b> 
    <input type="text" name="movielanguage" required="required" /><br>
  </label>
</h2>
<h2 align="center">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label> <b>Movie Actor :</b> 
    <input type="text" name="movieactor" required="required" /><br>
  </label>
</h2>
<h2 align="center">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label> <b>Movie Actress :</b> 
    <input type="text" name="movieactress" required="required" /><br>
  </label>
</h2>
<h2 align="center">
   &nbsp;&nbsp;&nbsp;&nbsp;<label> <b>Movie Director :</b> 
    <input type="text" name="moviedirector" required="required" />
  </label>
</h2>
<h2 align="center">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label> <b>Movie Rating :</b> 
    <input type="text" name="movierating" required="required" />
  </label>
</h2>
<h2 align="center">
   <label> <b>Movie Ticket Price :</b> 
    <input type="text" name="movieprice" required="required" />
  </label>
</h2>
<h2 align="center">
   <label> <b>Movie Image Location :</b> 
    <input type="text" name="movielocation" required="required" />
  </label>
</h2>
</fieldset>
<h2 align="center">
   <label> 
   <input type ="submit" name="submit" value="INSERT"  />
  </label>
</h2>
</form>
</body>
</html>