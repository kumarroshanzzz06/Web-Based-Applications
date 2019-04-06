<?php
//error_reporting(0);
if(isset($_POST['sub1']))
{
	$uname=strtoupper($_POST['op1']);
	$pwd="hstl".$_POST['op2']."ltsh";
	$pwd=md5(crc32($pwd));
	include_once "select_db.php";	
	$row=mysql_query("select * from hostel_login where hostel_name='$uname' and passwd='$pwd'");
	if(mysql_num_rows($row)==1)
	{
		session_start();
		$_SESSION['au']=$uname;
		if($uname=="ADMIN")
			echo "<script>location='admin1.php?$uname'</script>";
		else
			echo "<script>location='homeex1.php?$uname'</script>";
	}
	else
		echo "<script>alert('Invalid Password')</script>";
}
if(isset($_POST['ssubm']))
{
	$sname=mysql_real_escape_string(strtoupper(trim($_POST['fi1']," ")));
	$spaswd=mysql_real_escape_string(trim($_POST['fi2']," "));
	$spaswd=crc32($spaswd);
	include_once "select_db.php";	
	$row=mysql_query("select * from student_profile where uname='$sname' and passwd='$spaswd'");
	if(mysql_num_rows($row)==1)
	{
		session_start();
		$_SESSION['au']=$sname;
		echo "<script>location='studenthome.php?$sname'</script>";
	}
	else
		echo "<script>alert('Invalid Password')</script>";
}
?>




<html>
<head>
<title>hostel login</title>
<script language="javascript">
function fun1()
{
	document.getElementById('b1').style.background="transparent";
	document.getElementById('b2').style.background="white";
	document.getElementById('ltop1').style.background="transparent";
	document.getElementById('ltop2').style.background="blue";
	document.getElementById('login1').style.display="block";
	document.getElementById('login2').style.display="none";
}
function fun2()
{
	document.getElementById('login1').style.display="none";
	document.getElementById('login2').style.display="block";
	document.getElementById('b1').style.background="white";
	document.getElementById('b2').style.background="transparent";
	document.getElementById('ltop2').style.background="transparent";
	document.getElementById('ltop1').style.background="blue";
	
}
</script>
<style>

body
{
background:lightblue url("hypnotic_pattern.gif");
	background-size:100%;
     background-attachment:fixed;
}#title
{
	position:absolute;
	background:black;
	top:0%;
	height:20%;
	width:99%;
	text-align:center;
	
	color:midnightblue;
	font-family:algerian;
	font-size:22px;
}

#back
{
	display:block;
	z-index:6;
	position:absolute;
	top:11%;
	height:80%;
	left:5%;
	width:30%;
	background:lightblue url("images (6).jpg");
	background-size:100%;
}
	

#ltop1
{
	display:block;
	z-index:6;
	position:absolute;
	top:1%;
	left:0%;
	border-bottom-color:transparent;
	background-color:transparent;
	width:47%;
	height:12%;
	border-radius:5px;
	padding:5px;
}

#ltop2
{
	display:block;
	z-index:6;
	position:absolute;
	top:1%;
	left:49%;
	background-color:blue;
	width:46%;
	height:12%;
	border-radius:5px;
	padding:5px;
}

#login1,#login2
{
	display:block;
	z-index:5;
	position:absolute;
	top:14%;
	left:0%;
	
	background-color:transparent;
	
	border-top:transparent;
	width:95%;
	height:80%;
	border-radius:5px;
	padding:5px;
	text-align:center;
	color:red;
	font-style:bold;
                  font-size:17px;
}
#login2
{
	display:none;
}

.form-style-1 input[type=text],
.form-style-1 input[type=password],
select{
       width: 84%;
   margin:0 0  0 25;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid blue;
    padding: 7px;
   
    -webkit-transition: all 0.50s ease-in-out;
    -moz-transition: all 0.50s ease-in-out;
    -ms-transition: all 0.50s ease-in-out;
    -o-transition: all 0.50s ease-in-out;
    outline: none; 
}

.form-style-1 input[type=text]:focus,
.form-style-1 input[type=password]:focus,
.form-style-1 select:focus
{
   background:lightcyan; 
   -moz-box-shadow: 0 0 8px blue;
    -webkit-box-shadow: 0 0 8px blue;
        box-shadow: 0 0 8px blue;
     
}
.form-style-1 input[type=submit]
{
    background: indigo;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
    cursor:pointer;
   border-radius:5%;
  margin:0 0 0 25;
   left:5%;
   position:absolute;
   width:81%;
}

.form-style-1 input[type=submit]:hover
{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .field-divided{
    width: 84%;
   margin:0 0  0 25;
}


#id1
{
	position:absolute;
	top:25%;
	left:5%;
	width:88%;
	height:50%;

}

#register
{
	position:absolute;
	top:10%;
	left:80%;
	padding:10px;
	text-align:center;
}

#notice
{
	position:absolute;
	background:salmon;
	top:80%;
	left:20%;
	width:60%;
	height:50%;
	border:2px solid white;
	color:lavender;
}
#n1
{
	position:absolute;
	top:0%;
	height:10%;
	width:99.6%;
	background:papayawhip;
	text-align:center;
	font-size:22px;
	color:indigo;
	font-family:Imprint MT Shadow;
	border:2px solid red;
	-webkit-box-shadow:20px 20px 50px red;
	box-shadow:20px 20px 50px red;
}
#n2
{
	position:absolute;
	top:11%;
	height:88%;
	width:99%;
	border:2px solid white;
	text-align:center;
	font-size:18px;
}

span
{
color:crimson;
text-align:center;
font-size:25px;
}	

#foot
{
position:fixed;
top:94%;
left:0px;
width:100%;
background-color:black;
}

@-webkit-keyframes roll {
from { -webkit-transform: rotate(0deg) }
to   { -webkit-transform: rotate(360deg) }
}

@-moz-keyframes roll {
from { -moz-transform: rotate(0deg) }
to   { -moz-transform: rotate(360deg) }
}

@keyframes roll {
from { transform: rotate(0deg) }
to   { transform: rotate(360deg) }
}

body {
-moz-animation-name: roll;
-moz-animation-duration: 4s;
-moz-animation-iteration-count: 1;
-webkit-animation-name: roll;
-webkit-animation-duration: 4s;
-webkit-animation-iteration-count: 1;
}


</style>
</head>
<body>
<div id="title">
<img src="hosmgmt.png" style="width:80%;height:100%;"/>	
</div>
<div id="id1">
<div id="register">
<span style="color:white;font-weight: bold;font-size:20px;">NOT Registered Yet..!!!</span><br>
<a href="newform.php"><img src="register.gif" alt="register" height=80px width=220px style="border-radius:10%"/></a>
</div>
<div id="back">
<div id="ltop1">
	<button id="b1" onclick="fun1()" style="width:98%;height:98%;background:transparent;cursor:pointer">Student</button>
</div>
<div id="ltop2">
	<input type="button" onclick="fun2()" value="official" id="b2" style="width:98%;height:98%;cursor:pointer">
</div>
<div id="login1">
	<h3>Student Log_In</h3><hr>
	<form name="f1" method="post" class="form-style-1">
	<input type="text" name="fi1" placeholder="User_id" required><br><br>
	<input type="password" name="fi2" placeholder="Enter Password" required><br><br>
	<input type="submit" value="Log In" name='ssubm'>
	</form>
</div>

<div id="login2">
	<h3>Official Log_In</h3><hr>
	<form name="f2" method="post" class="form-style-1">
	<select name="op1" style="cursor:pointer">
	<option>ADMIN</option>
	<option>NC1</option>
	<option>NC2</option>
	<option>NC3</option>
	<option>NC4</option>
	<option>NC5</option>
	<option>NC6</option>
	<option>NC7</option>
	<option>NC8</option>
	<option>NC9</option>
	<option>NC10</option>
	<option>NC11</option>
	<option>NC12</option>
	<option>GAYATRI-1</option>
	<option>GAYATRI-2</option>
	<option>MM-1</option>
	<option>MM-2</option>
	<option>SS</option>
	<option>KRUPASINDHU</option>
	</select><br><br>
	<input type="password" name="op2" placeholder="Enter Password" required><br><br>
	<input type="submit" value="Log In" name="sub1">
	</form>
</div>
</div>
</div>
<div id="notice">
<div id="n1">
<b>NOTICE BOARD<b>
</div>
<div id="n2">
<marquee direction="up" style="cursor:pointer;height:100%" onmouseover="this.stop();style.fontSize='25px'" onmouseout="this.start();style.fontSize='20px'">
<span >SCIENCE & TECH. EXPO........</span><br/><br/>
# Most awaited S&T EXPO starts on 19th.<br>
# AMIT SANA will be entertaining and rejoicing us on 22nd FEB, 2K15.<br>
# Inaugration ceremony to be held at RANG MANCH on 20th, 8AM. Dont miss it!!!<br>
# A collection of 51 food stalls. UP!!! It's going to be fun..<br><br/>
<span>FOOD COURT.....................</span><br><br/>
# Todays food paneer tikka, tandoori roti,and chatni.<br>
# Food serving starts at 7am , 12pm and 8pm.<br><br/>
<span>BUS INFO..............................</span><br><br/>
# Buses at 2pm,3pm,4pm,5pm.<br>
# LASt entry into campus is at 6:30 pm. Students entering after that will not be allowed   and treated strictly.<br>
# First bus at 6am Bus no.-12<br> 
# Last bus at J square is at 6:15pm.<br><br/>
<span>OTHER NOTICES................................</span><br><br/>
# Mr. Arun Pandit, warden of NC-2 is at leave. For any help contact Mr.Senapati.<br>
# 7pm-9pm should be checked and followed as Studying hours.<br>   
</marquee>
</div>
</div>
<div id="foot">
<object type="text/html" data="footer.html" width="100%" height="100%"></object>
</div>
</body>
</html>
