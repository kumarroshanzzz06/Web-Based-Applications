<?php
session_start();
//error_reporting(0);
$qs=$_SERVER['QUERY_STRING'];
if(isset($_SESSION['au'])&&$_SESSION['au']!=$qs)
	echo "<script>location='index.php'</script>";
if(isset($_POST['sub1']))
{
include_once "select_db.php";
$opwd=$_POST['op'];
$opwd=crc32($opwd);
$npwd=$_POST['np1'];
$npwd=crc32($npwd);
$data=mysql_query("select * from student_profile where uname='$qs' and passwd='$opwd' ");
if(mysql_num_rows($data)==1)
{
	mysql_query("update student_profile set passwd='$npwd' where uname='$qs' and passwd='$opwd'");
	ini_set("date.timezone","Asia/Calcutta");
	$fp=fopen("log/logfile1.log","a");
	$dt=date('Y-m-d h:i:sa');
	$dt=$qs." Changed His Password On ".$dt."<br>\n";
	fwrite($fp,$dt);
	echo "<script>alert('Password is Changed Successfully');location='studenthome.php?$qs'</script>";
}
else
{
echo "<script>alert('Old Password does not matches')</script>";
}
}
?>
<html>
<head>
<title>
Change Password
</title>
<link href="./css/style.css" rel="stylesheet"/>
<style>
#id4
{
z-index:5;
border:1px solid black;
background-color:lightskyblue;
width:28%;
height:56%;
border-radius:5px;
box-shadow:0px 0px 20px black;
padding:10px;
}
</style>
<script>
function fun1()
{
var s="<?php echo $_SERVER['QUERY_STRING'] ?>";
	location.href='studenthome.php?'+s;
}
function check()
{
 var x1= document.forms["myform"]["np1"].value;
 var x2= document.forms["myform"]["np2"].value;
if(x2!="")
{
if(x1!=x2)
        {
	document.forms["myform"]["np2"].value="";
	document.getElementById("hide").style.display = "block";
        }
    
}
}
</script>
</head>
<body  bgcolor='#8195E1'>
<h1 align='center' style='font-size:60px;border:2px dotted red;border-radius:5px;background-color:white;cursor:pointer'>CHANGE YOUR PASSWORD</h1>
<center>
<div id="id4">
<h1 style='font-size:30px'>Change Password</h1>
<hr style="height:5px;background:black;">
<form method="post" name="myform">
<input type="password" placeholder="Enter Old Password" required name="op">
<br>
<br>
<input type="password" placeholder="Enter  New Password" name="np1" required>
<br><br>
<input type="password" placeholder="Confirm  New Password" name="np2" onfocus="document.getElementById('hide').style.display = 'none'" onblur="check()" required>
<br><br>
<input type="submit" value="SAVE" name="sub1" class='hvr-grow' style="float:left;height:40;width:170">
<input type="button" value="CANCEL" onclick="fun1()" class='hvr-grow' style="float:right;height:40;width:170">
<br><br>
<span id="hide" style="color:red;padding:0 0 0 25;display:none;">Password Not Matches</span>
</form>
</div>
</center>
</body>
</html>