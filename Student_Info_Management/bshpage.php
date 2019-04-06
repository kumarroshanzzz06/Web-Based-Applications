<?php
session_start();
?>

<html>
<head>
<title>BSH Page</title>
<script language="javascript">
function fun5()
{
document.getElementById('more').style.display="block";
document.getElementById('im1').style.display="none";
document.getElementById('im2').style.display="block";
}
function fun6()
{
document.getElementById('more').style.display="none";
document.getElementById('im1').style.display="block";
document.getElementById('im2').style.display="none";
}
function funcall(s)
{
location='homebsh.php?'+s
}
</script>
<style>
.menu-wrap {
                   position:absolute;
	left:4%;
	width:15%; 
                     top:25%;
	box-shadow:0px 1px 3px rgba(0,0,0,0.2);
	background:#3e3436;
	border-radius:10%;
}

.menu {
	margin:0px auto;
}

.menu li {
	margin:0px;
	
	font-family:'Ek Mukta';
	font-size:20px;
	padding:20px 0px 0px 0px;
}

.menu a {
	transition:all linear 0.15s;
	color:green;
	text-decoration:none;
	
}

.menu li:hover > a {
	text-decoration:none;
	color:#be5b70;
	display:inline-block;
	font-size:25px;
	
}

#foot
{
position:fixed;
top:90%;
left:0px;
width:100%;
background-color:MINTCREAM;
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
#moptn
{
position:absolute;
top:20%;
left:75%;
width:20%;
border-radius:10%;
background-color:black;
}
#div1,#div2,#div3
{
display:none;
z-index:5;
position:fixed;
top:11%;
left:1%;
font-size:20px;
border:1px solid black;
background-color:PaleTurquoise;
color:DarkViolet;
width:96%;
height:75%;
border-radius:5px;
box-shadow:5px 5px 5px black;
padding:10px;
overflow:auto;
}
.imgpos
{
cursor:pointer;
position:fixed;
top:11%;
left:97.6%;
background-color:black;
border-radius:50%;
}
#last
{
position:absolute;
top:80%;
left:70%;
}
</style>
</head>
<body style="background:url('p2.jpg') no-repeat fixed">
<img src="logo.jpg" alt="Image Not Found" height="100" width="100" align="left"><span style="font-size:30px"><center><b>GANDHI INSTITUTE OF ENGINEERING & TECHNOLOGY<br>GUNUPUR</b></center></span>
<font color="blue" size="5">
<h1 align="center"><u>WELCOME DEPT. OF BSH</u></h1>
<h2 align="left"><u>Please Select Branch To Proceed</u></h2>
</font>
<input type="button" value="CSE" onclick="funcall('CSE')">
<input type="button" value="EE" onclick="funcall('EE')"><br><br>
<input type="button" value="EEE" onclick="funcall('EEE')">
<input type="button" value="ECE" onclick="funcall('ECE')"><br><br>
<input type="button" value="MECH" onclick="funcall('MECH')">
<input type="button" value="CIVIL" onclick="funcall('CIVIL')"><br><br>
<input type="button" value="BT" onclick="funcall('BT')">
<input type="button" value="METALLURGY" onclick="funcall('METALLURGY')"><br><br>
<input type="button" value="CHEMICAL" onclick="funcall('CHEMICAL')">
<input type="button" value="AEI" onclick="funcall('AEI')"><br><br>
<div id="foot">
<object type="text/html" data="footer.html" width="100%" height="100%"></object>
</div>

<div id="last"><h2><a href="logout.php" style="color:red;">Log Out</a>&nbsp&nbsp|&nbsp&nbsp<a href="password.php?<?php echo $_SERVER['QUERY_STRING'] ?>" style="color:red;">Change Password</a></h2></div>
</body>
</html>