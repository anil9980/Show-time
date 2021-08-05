<html>
<head>
   <title>Sign Up </title>
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
h1 {
color:white;
}
h2 {
color:black;
}
input[type=password]{
padding:5px 15px;
    background:#ccc;
border:1;
font-weight:bold;
border-radius:10px;
}
input[type=submit] {
padding:5px 15px;
    background:#0F0F0F;
border:1;
font-weight:bold;
border-radius:10px;

}
input[type=date] {
padding:5px 15px;
    background:#ccc;
border:1;
border-radius:10px;
}
input[type=text]{
padding:5px 15px;
    background:#ccc;
border:1;
font-weight:bold;
border-radius:10px;
}
input[type=email] {
padding:5px 15px;
    background:#ccc;
border:1;
font-weight:bold;
border-radius:10px;
}
input[type=password]:focus { 
border-color:#333;
background:blue;
}
input[type=submit]:focus { 
border-color:#333;
background:blue;
}
input[type=date]:focus { 
border-color:#333;
background:blue;
}
input[type=text]:focus { 
border-color:#333;
background:blue;
}
input[type=email]:focus { 
border-color:#333;
background:blue;
}
</style>
</head>
<body>
<fieldset>
<legend align="center"><h2><b>LOGIN DETAILS</h2> </b></legend>
   <h2 align="center" >
   <form action="signup_query.php" method="post" >
   &nbsp;&nbsp;<label> <b>USER NAME :</b> 
    <input type="text" name ="username" required="required" /> <br />
   </label>
   </h2>
   <h2 align="center">
   &nbsp;&nbsp;<label> <b>PASSWORD :</b> 
    <input type="password" name="password" required="required" /><br>
  </label>
</h2>
<h2> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <label> <b>RE-ENTER PASSWORD :</b> 
    <input type="password" name="rpassword" required="required" /><br>
  </label>
</h2>
</fieldset>
<fieldset>
<legend align="center"><h2><b>Personal Details</h2></b></legend>
<h2 align="center">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label> <b>D.O.B :</b> 
    <input type="date" name="dob" required="required" /><br>
  </label>
</h2>
<h2 align="center">
   &nbsp;&nbsp;&nbsp;&nbsp;<label> <b>E-MAIL :</b> 
    <input type="email" name="email" required="required" /><br>
  </label>
</h2>
<h2 align="center">
   &nbsp;&nbsp;&nbsp;<label> <b>PHONE :</b> 
    <input type="text" name="phone" required="required" /><br>
  </label>
</h2>
<h2 align="center">
   <label> <b>ADDRESS :</b> 
    <input type="text" name="address" required="required" />
  </label>
</h2>
</fieldset>
<h2 align="center">
   <label> 
   <input type ="submit" name="submit" value="SIGN UP"  />
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