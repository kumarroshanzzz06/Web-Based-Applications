<?php
$qs=$_SERVER['QUERY_STRING'];
session_start();
include_once "select_db.php";
if($_SESSION['au']!=$qs)
	echo "<script>location='index.php'</script>";
if(isset($_POST['send1']))
{
	$v1=$_POST['selname'];
	$v2=mysql_real_escape_string($_POST['msg']);
	if($v1=="WARDEN")
	{
		$data=mysql_query("select hostel_name from stud_hostel_details where rollno='$qs'");
		$rec=mysql_fetch_row($data);
	}
	else
	{
		$rec[0]="ADMIN";
	}
	if(mysql_query("insert complaint_table values('$qs','$rec[0]','$v2','outbox')"))
	{
		echo "<script>alert('Message Sent To $v1')</script>";
	}
	else
	{
		echo "<script>alert('Sorry! Error In Sending Message')</script>";
	}
}
?>



<html>
<head>
<title>student home</title>

<style>

body{
background:white url("images (8).jpg");
background-size:100%;
background-attachement:fixed;
}
.required1{
    color:blue;
    text-decoration: none;
    position:absolute;
    margin:-10;
     padding: 0 0 0 0;
    top:5%;
     background:transparent;
    box-shadow: 5px 5px 5px #888888;
     width:100%;
    z-index:1001;
    text-align:center;
    text-shadow: 0 0 3px #FF0000, 0 0 5px #FFA500;
}

#detail
{
position:absolute;
top:25%;
left:5%;
width:25%;
height:50%;
}

#extra
{
position:absolute;
top:25%;
left:70%;
}
#extra a
{
color:red;
text-decoration:none;
}

#extra a:hover
{
color:blue;
text-decoration:underline;
}

#chati
{
position:absolute;
top:40%;
left:40%;
width:50%;
height:20%;
}

#chato
{
position:absolute;
top:55%;
left:40%;
width:50%;
height:20%;
}

#chatc
{
position:absolute;
top:70%;
left:40%;
width:50%;
height:20%;
}

#chati #id111:hover,
#chato #id111:hover,
#chatc #id111:hover
{
border:2px solid black;
}

.fixit
{
position:absolute;
left:55%;
/*border:2px solid black;*/
top:5%;
padding:5px 5px 5px 5px;
 z-index:1001;
   box-shadow:0 0 20px red;
}

.fixit input[type=submit]{
    background: purple;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
    margin:0 0 0 20;
   width:100;
   position:relative;
  
}
.fixit input[type=submit]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}

#fi
{
position:absolute;
border:1px solid red;
top:0%;
left:55%;
width:50%;
height:200%;
z-index:1001;
box-shadow:0 0 20px red;
}

#fo
{
position:absolute;
border:1px solid red;
top:0%;
left:55%;
width:50%;
height:200%;
z-index:1001;
box-shadow:0 0 20px red;
}
#fi
{display:none;
z-index:1002;
}
</style>

<script>
function fun4()
{
document.getElementById("fi").style.display="block";
document.getElementById("fo").style.display="none";
document.getElementById("fc").style.display="none";
}

function fun5()
{
document.getElementById("fi").style.display="none";
document.getElementById("fo").style.display="block";
document.getElementById("fc").style.display="none";
}

function fun6()
{
document.getElementById("fi").style.display="none";
document.getElementById("fo").style.display="none";
document.getElementById("fc").style.display="block";
}
function fun1()
{
document.getElementById("fi").style.display="none";
document.getElementById("fo").style.display="none";
document.getElementById("fc").style.display="none";
}
function fun2()
{
document.getElementById("fi").style.display="none";
document.getElementById("fo").style.display="none";
document.getElementById("fc").style.display="none";
}
function fun3()
{
document.getElementById("fi").style.display="none";
document.getElementById("fo").style.display="none";
document.getElementById("fc").style.display="none";
}

</script>
</head>
<body>
<div class="required1"><img src="studpro1.gif" style="opacity:1;width:400px;"/></div>


<div id="detail">
<img src="login.png" alt="??????" width="125px" height="125px"/>
<span style="position:absolute;top:45%;left:0%;text-style:bold;">GAURAV SINGH</span>
</div>

<div id="extra">
<a href="displaystudent.php?<?php echo $_SERVER['QUERY_STRING']; ?>">VIEW PROFILE</a> | 
<a href="password1.php?<?php echo $_SERVER['QUERY_STRING']; ?>">Change Password</a> |
<a href="logout.php">Log Out</a>
</div>

<div id="chati">
<img src="pencil.gif" width="125px" height="50px"/><span><img src="inbox.gif" id="id111" style=";position:absolute;top:5%;left:22%;width:200px;height:50px;" onclick="fun4()"/></span>
<div id="fi" style="overflow:auto;">
<img src="mail-delete.png" style="cursor:pointer;position:fixed;top:39%;left:92%;border-radius:50%;z-index:1002;" onclick="fun1()">
<?php
include_once "select_db.php";
$mdata=mysql_query("select * from complaint_table where rollno='$qs' and status='inbox'");
$j=1;
while($outboxy=mysql_fetch_row($mdata))
{
echo " $j) $outboxy[1] :- $outboxy[2] <br><br> ";
$j++;
}
?>
</div>
</div>

<div id="chato">
<img src="pencil.gif" width="125px" height="50px"/><span><img src="outbox.gif" id="id111"style=";position:absolute;top:5%;left:22%;width:200px;height:50px;" onclick="fun5()"/></span>
<div id="fo" style="display:none;overflow:auto">
<img src="mail-delete.png" style="cursor:pointer;position:fixed;top:54%;left:92%;border-radius:50%;z-index:1002;" onclick="fun2()">
<?php
include_once "select_db.php";
$mdata=mysql_query("select * from complaint_table where rollno='$qs' and status='outbox'");
$i=1;
while($outboxy=mysql_fetch_row($mdata))
{
echo " $i) $outboxy[1] :- $outboxy[2] <br><br> ";
$i++;
}
?>

</div>
</div>

<div id="chatc">
<img src="pencil.gif" width="125px" height="50px"/><span><img src="compose.gif" id="id111" style=";position:absolute;top:5%;left:21%;width:200px;height:50px;" onclick="fun6()"/></span>
<div id="fc" style="display:none">
<img src="mail-delete.png" style="cursor:pointer;position:absolute;top:-5px;left:99%;border-radius:50%" onclick="fun3()">
<form name="myForm" action="" onsubmit="return validateForm()" method="post" class="fixit">
	<label>TO: </label><select name="selname" style="width:150px;height:30px;border:1px solid blue;"><option>WARDEN</option><option>ADMIN</option></select><br/><br/>
	<textarea name="msg" class="field-divided4" placeholder="Write Your Message"  style="height:70px;width:300px;" required /></textarea><br/><br/>
	<input type="submit" value="SEND" name="send1" style="cursor:pointer"/>
</form>
</div>
</div>

</body>
</html>