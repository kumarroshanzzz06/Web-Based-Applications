<html>
<head>
<title>Student Information</title>
<style>
#foot
{
position:fixed;
top:90%;
left:0px;
width:100%;
background-color:MintCream;
}
input
{
width:20%;
height:5%;
cursor:pointer;
border-color:blue;
border-radius:2px;
font-size:20px;
background:blue;
color:white;
}
input:hover
{
width:20%;
height:5%;
border-radius:5px;
font-size:21px;
background:white;
color:blue;
}
</style>
</head>
<body background="p2.jpg">
<img src="logo.jpg" alt="Image Not Found" height="100" width="100" align="left">
<span style="font-size:35px;font-family:Algerian" ><center>GIET , GUNUPUR</center></span>
<font color="blue" size="5" face="Old English Text MT"><h1 align="center"><u>Student Information System</u></h1></font>
<form method="post" action="login_form.php">
<center><input type="submit" class="but" value="Login"></center><br>
</form>
<form method="post" action="newform.php">
<center><input type="submit" class="but" value="New Student Registration"></center>
</form>
<div id="foot">
<object type="text/html" data="footer.html" width="100%" height="100%"></object>
</div>
</body>
</html>