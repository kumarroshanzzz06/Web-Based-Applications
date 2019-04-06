<?php session_start(); ?>
<html>
<head>
<script language="javascript">
function fun1()
{
document.getElementById('id4').style.display="block";
document.getElementById('id1').style.display="none";
document.getElementById('id9').style.display="none";
document.getElementById('id10').style.display="none";
}
function fun3()
{
document.getElementById('id11').style.display="block";
document.getElementById('id1').style.display="none";
document.getElementById('id9').style.display="none";
document.getElementById('id10').style.display="none";
}
function fun4()
{
document.getElementById('id12').style.display="block";
document.getElementById('id1').style.display="none";
document.getElementById('id9').style.display="none";
document.getElementById('id10').style.display="none";
}
function fun2()
{
document.getElementById('id4').style.display="none";
document.getElementById('id11').style.display="none";
document.getElementById('id1').style.display="block";
document.getElementById('id9').style.display="block";
document.getElementById('id10').style.display="block";
document.getElementById('id12').style.display="none";
}
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
function fund1()
{
	document.getElementById("div1").style.display="block";
}
function fund2()
{
	document.getElementById("div2").style.display="block";
}
function fund3()
{
	document.getElementById("div3").style.display="block";
}
function hide1()
{
	document.getElementById('div1').style.display="none";
}
function hide2()
{
	document.getElementById('div2').style.display="none";
}
function hide3()
{
	document.getElementById('div3').style.display="none";
}

function fun14()
{
document.getElementById("fi").style.display="block";
document.getElementById("fo").style.display="none";
document.getElementById("fc").style.display="none";
}

function fun15()
{
document.getElementById("fi").style.display="none";
document.getElementById("fo").style.display="block";
document.getElementById("fc").style.display="none";
}

function fun16()
{
document.getElementById("fi").style.display="none";
document.getElementById("fo").style.display="none";
document.getElementById("fc").style.display="block";
}
function fun11()
{
document.getElementById("fi").style.display="none";
document.getElementById("fo").style.display="none";
document.getElementById("fc").style.display="none";
}
function fun12()
{
document.getElementById("fi").style.display="none";
document.getElementById("fo").style.display="none";
document.getElementById("fc").style.display="none";
}
function fun13()
{
document.getElementById("fi").style.display="none";
document.getElementById("fo").style.display="none";
document.getElementById("fc").style.display="none";
}

</script>
<style>
body {
	background: lightgrey url('bg3.jpg');
	background-repeat: no-repeat;
	background-size:100% ;
	background-attachment:fixed;
	font-family:Lucida Calligraphy;
}
.required1{
    text-decoration: none;
    font-size:20px;
    position:fixed;
    margin:-10;
     padding: 0 0 0 0;
     background:lightgrey url('olive-green-plain-design1.jpg');
    box-shadow: 10px 10px 5px black;
     width:100%;
    height:10%;
    z-index:1001;
    text-align:center;
    text-shadow: 0 0 3px #FF0000, 0 0 5px #FFA500;
   


	background: -webkit-linear-gradient(left top, red , mediumblue); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(bottom right, red, mediumblue); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(bottom right, red, mediumblue); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom right, red , royalblue); /* Standard syntax (must be last) */
}

.clearfix:after {
	display:block;
	clear:both;
}

/*----- Menu Outline -----*/
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
	color:blue;
	text-decoration:none;
	
}

.menu li:hover > a {
	text-decoration:none;
	color:red;
	display:inline-block;
	font-size:25px;
	
}

#id1
{
position:absolute;
top:30%;
padding:0px 0px 0px 10px;
left:30%;
width:35%;
color:lightcoral;
font-size:10px;
cursor:pointer;
-webkit-transition:font-size 1s;
transition:font-size 1s;
}
#id1:hover
{
color:coral;
font-size:13px;
text-shadow: 0 0 1px #FF0000;
}

#id9
{
position:absolute;
top:45%;
padding:0px 0px 0px 10px;
left:30%;
width:30%;
color:lightcoral;
font-size:10px;
cursor:pointer;
-webkit-transition:font-size 1s;
transition:font-size 1s;
}
#id9:hover
{
color:coral;
font-size:13px;
text-shadow: 0 0 1px #FF0000;
}

#id10
{
position:absolute;
top:60%;
padding:0px 0px 0px 10px;
left:30%;
width:20%;
color:lightcoral;
font-size:10px;
cursor:pointer;
-webkit-transition:font-size 1s;
transition:font-size 1s;
}
#id10:hover
{
color:red;
font-size:13px;
text-shadow: 0 0 10px #FF0000;
}
#id2
{
position:absolute;
top:32%;
left:68%;
padding:10px 10px 10px 10px;
background:olive;
height:320px;
width:320px;
border:2px solid transparent;
border-radius:2%;
opacity:0.7;
box-shadow:5px 5px 10px black;
background:url("images.jpg");
background-size:100%;
 /* Rotate div */
    -ms-transform: rotate(47deg); /* IE 9 */
    -webkit-transform: rotate(47deg); /* Chrome, Safari, Opera */
    transform: rotate(47deg);
}
#myspan
{
position:absolute;
top:35%;
left:71%;
padding:10px 10px 10px 10px;
font-size:20px;
}
#id3
{
font-size:25px;
}
#id4
{
display:none;
z-index:50;
position:absolute;
top:30%;
left:40%;
border:1px solid black;
background-color:transparent;
width:200;
height:200;
border-radius:5px;
box-shadow:5px 5px 5px black;
padding:10px;
}


#id11
{
display:none;
z-index:50;
position:absolute;
top:30%;
left:40%;
border:1px solid black;
background-color:transparent;
width:200;
height:200;
border-radius:5px;
box-shadow:5px 5px 5px black;
padding:10px;
}

#id12
{
display:none;
z-index:50;
position:absolute;
top:30%;
left:40%;
border:1px solid black;
background-color:transparent;
width:200;
height:200;
border-radius:5px;
box-shadow:5px 5px 5px black;
padding:10px;
}

#id8
{
position:absolute;
top:15%;
left:1%;
color:red;
font-size:23px;
width:28px;

background-color:darkgreen;
padding:1px 1px 1px 3px;
 }

.dept{
position:absolute;
top:13%;
color:pink;
font-size:30px;
left:35%;
z-index:1002;
}

#id7{
-webkit-animation: mymove 5s infinite; 
    animation: mymove 5s infinite;
}
@-webkit-keyframes mymove {
    50% {text-shadow: 10px 20px 30px red;}
}
@-moz-keyframes mymove {
    50% {text-shadow: 10px 20px 30px red;}
}
.form-style-1 {
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  }
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text],
.form-style-1 input[type=password],
.form-style-1 textarea,
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.50s ease-in-out;
    -moz-transition: all 0.50s ease-in-out;
    -ms-transition: all 0.50s ease-in-out;
    -o-transition: all 0.50s ease-in-out;
    outline: none; 
}

.form-style-1 input[type=text]:focus,
.form-style-1 input[type=password]:focus,
.form-style-1 textarea:focus,
.form-style-1 select:focus
{
    /*-moz-box-shadow: 0 0 8px red;
    -webkit-box-shadow: 0 0 8px red;
        box-shadow: 0 0 8px red;*/
        background:lightcyan;
        border: 1px solid green;
}
.form-style-1 input[type=submit]{
    background: grey;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
    margin:0 0 0 50;
   width:100;
}
.form-style-1 textarea
{
width:200px;
height:100px;
}

.form-style-1 input[type=submit]:hover{
    background: #4691A4;
    cursor:pointer;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .field-divided{
    width: 92%;
}
#last
{
position:absolute;
display:none;
top:40%;
left:7%;
font-size:13px;
}


#foot
{
position:absolute;
top:140%;
left:0px;
width:100%;
height:10%;
background-color:#00B1FF;
}
#mydiv1
{
position:absolute;
top:6%;
left:-21%;
}
#anc1
{
position:absolute;
top:29%;
left:12.3%;
font-size:25px;
color:black;
text-decoration:none;
}
#anc1:hover,#anc2:hover,#anc3:hover,#anc4:hover,#anc5:hover,#myspan3:hover
{
color:blue;
}
#anc2
{
position:absolute;
top:42%;
left:4.6%;
font-size:25px;
color:black;
text-decoration:none;
}
#anc3
{
position:absolute;
top:62%;
left:9%;
font-size:25px;
color:black;
text-decoration:none;
}
#anc4
{
position:absolute;
top:59%;
left:18.6%;
font-size:25px;
color:black;
text-decoration:none;
}
#anc5
{
position:absolute;
top:35.6%;
left:20.7%;
font-size:25px;
color:black;
text-decoration:none;
}
#myspan3
{
position:absolute;
top:46%;
left:12.9%;
font-size:22px;
color:black;
cursor:pointer;
}
#moptn
{
position:absolute;
top:12%;
left:69.8%;
width:20%;
border-radius:10%;
background-color:lavender;
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


#chati
{
position:absolute;
top:80%;
left:32%;
width:50%;
height:20%;
}

#chato
{
position:absolute;
top:95%;
left:32%;
width:50%;
height:20%;
}

#chatc
{
position:absolute;
top:110%;
left:32%;
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
</head>


<body>

<div id="mydiv1">
<img src="menu1.gif" alt="Image Not Found" height="600" width="1000" style="opacity:0.2">
</div>
<a id="anc1" href="display_infoa.php?<?php echo $_SERVER['QUERY_STRING'] ?>+a">ALL</a>
<a id="anc2" href="display_infoa.php?<?php echo $_SERVER['QUERY_STRING'] ?>+1">1st<br>year</a>
<a id="anc3" href="display_infoa.php?<?php echo $_SERVER['QUERY_STRING'] ?>+2">2nd<br>year</a>
<a id="anc4" href="display_infoa.php?<?php echo $_SERVER['QUERY_STRING'] ?>+3">3rd<br>year</a>
<a id="anc5" href="display_infoa.php?<?php echo $_SERVER['QUERY_STRING'] ?>+4">4th<br>year</a>

<span id="myspan3"><abbr title="Select Year To Get Data">Select<br>Year</abbr></span>

<img src="logout1.png" style="position:absolute;top:12%;left:89.5%;cursor:pointer" onmouseover="document.getElementById('last').style.display='block';document.getElementById('last1').style.display='block'">


<span id="last1" style="position:fixed;top:12%;left:89%;height:13%;width:11%;display:none;background-color:transparent" onmouseout="document.getElementById('last').style.display='none';document.getElementById('last1').style.display='none'">
<div id="last"><a href="password.php?<?php echo $_SERVER['QUERY_STRING'] ?>" style="color:red;">Change Password</a><br><a href="logout.php" style="color:red;">Log Out</a></div>
</span>

<div class="required1" style="font-family:algerian;"><h2>&nbsp &nbsp &nbsp WELCOME <?php $qs=$_SERVER['QUERY_STRING']; echo " $qs"; ?></h2></div>

<div id="id1" onclick="fun1()" style="display:none">
<img src="click1.gif" alt="CLICK HERE TO" align="left" style="width:100px;height:40px;">
<H1 style="position:absolute;top:-15%;left:20%"><u>Update Individual Data</u></H1>
</div>

<div id="id4" >
<img src="mail-delete.png" style="cursor:pointer;position:absolute;top:-10px;left:213px;border-radius:50%" onclick="fun2()">
<form method="post" class="form-style-1" action="uptodate.php?<?php echo $_SERVER['QUERY_STRING'] ?>" onsubmit="return fun5()">
<input type="text" placeholder="Enter Roll_no" name="name1" id="r1">
<br>
<span style="text-align:center;"><h2>OR</h2></span>
<input type="text" placeholder="Enter Regd_no" name="name2" id="r2">
<br><br>
<input type="submit" value="Submit" name="sub2">
</form>
</div>

<div id="id9" onclick="fun4()">
<img src="click1.gif" alt="CLICK HERE TO" align="left" style="width:100px;height:40px;">
<H1 style="position:absolute;top:-15%;left:24%"><u>Update Bulk Data</u></H1>
</div>

<div id="id12">
<img src="mail-delete.png" style="cursor:pointer;position:absolute;top:-10px;left:213px;border-radius:50%" onclick="fun2()">
<form method="post" class="form-style-1" action="bulk_update.php?<?php echo $_SERVER['QUERY_STRING']?>">
<textarea name="blkdata" placeholder="Enter comma seprated list of ROLL_NO eg:- 12cse125,12cse117" required></textarea>
<br><br>
<input type="submit" value="Update" name="upd1">
</form>
</div>

<div id="id10" onclick="fun3()">
<img src="click1.gif" alt="CLICK HERE TO" align="left" style="width:100px;height:40px;">
<H1 style="position:absolute;top:-15%;left:35%"><u>Delete Data</u></H1>
</div>

<div id="id11" >
<img src="mail-delete.png" style="cursor:pointer;position:absolute;top:-10px;left:213px;border-radius:50%" onclick="fun2()">
<form method="post" class="form-style-1" action="" onsubmit="return fun6()">
<input type="text" placeholder="Enter Roll_no" name="named1" id="d1">
<br>
<span style="text-align:center;"><h2>OR</h2></span>
<input type="text" placeholder="Enter Regd_no" name="named2" id="d2">
<br><br>
<input type="submit" value="Delete" name="del1">
</form>
</div>

<div id="id2">
</div>
<span id="myspan"><h2><u>Personal Data</u></h2>
<form method="post" action="" class="form-style-1" onsubmit="return fun7()">
<br>
<input type="text" placeholder="Enter Roll_no" name="namei1" style="border-color:indianred;border-radius:5px" id="i1" size="30">
<br> 
<span style="text-align:center;"><h2>OR</h2></span>

<input type="text" placeholder="Enter Regd_no" name="namei2" style="border-color:indianred;border-radius:5px" id="i2" size="30">
<br><br>
<input type="submit" style="background:url('submitbutton1.gif');width:25%;height:8%;border-radius:30%;position:absolute;left:17%" value="" name="subi">
<br>
</form>
</span>

<div id="moptn">
<img src="down.png" id="im1" style="cursor:pointer;position:absolute;top:10px;left:200px;height:20px;width:20px;border-radius:50%;" onclick="fun5()">
<img src="up.png" id="im2" style="cursor:pointer;position:absolute;top:10px;left:200px;height:20px;width:20px;display:none;border-radius:50%;" onclick="fun6()">
<span style="color:red;font-size:25px;padding:20 0 0 20;">More Option</span><hr>
<nav class="menu" style="display:none;" id="more">
	<ul class="clearfix">
		
			<li><a onclick="fund1()" style="cursor:pointer">Deleted record list</a></li><hr>
			<li><a onclick="fund2()" style="cursor:pointer">Updated record list</a></li><hr>
			<li><a onclick="fund3()" style="cursor:pointer">Updated password list</a></li><hr>
			
		</ul> 
		
	</nav>
</div>

<?php
echo '<div id="div1" style="display:none">';
echo '<img src="mail-delete.png" class="imgpos" onclick="hide1()">';
echo file_get_contents('log/logfile3.log');
echo '</div><div id="div2" style="display:none"><img src="mail-delete.png" class="imgpos" onclick="hide2()">';
echo file_get_contents('log/logfile2.log');
echo '</div><div id="div3" style="display:none"><img src="mail-delete.png" class="imgpos" onclick="hide3()">';
echo file_get_contents('log/logfile1.log');
echo '</div>';
?>

<div id="chati">
<img src="pencil.gif" width="125px" height="50px"/><span><img src="inbox.gif" id="id111" style=";position:absolute;top:5%;left:22%;width:200px;height:50px;" onclick="fun14()"/></span>
<div id="fi" style="overflow:auto">
<img src="mail-delete.png" style="cursor:pointer;position:absolute;top:0%;left:96%;border-radius:50%;z-index:1002;" onclick="fun11()">
<?php
include_once "select_db.php";
$mdata=mysql_query("select * from complaint_table where hostel_name='$qs' and status='outbox'");
$j=1;
while($outboxy=mysql_fetch_row($mdata))
{
echo " $j) $outboxy[0] :- $outboxy[2] <br><br> ";
$j++;
}
?>
</div>
</div>

<div id="chato">
<img src="pencil.gif" width="125px" height="50px"/><span><img src="outbox.gif" id="id111"style=";position:absolute;top:5%;left:22%;width:200px;height:50px;" onclick="fun15()"/></span>
<div id="fo" style="display:none;overflow:auto">
<img src="mail-delete.png" style="cursor:pointer;position:absolute;top:0%;left:96%;border-radius:50%;z-index:1002;" onclick="fun12()">
<?php
include_once "select_db.php";
$mdata=mysql_query("select * from complaint_table where hostel_name='$qs' and status='inbox'");
$i=1;
while($outboxy=mysql_fetch_row($mdata))
{
echo " $i) $outboxy[0] :- $outboxy[2] <br><br> ";
$i++;
}
?>

</div>
</div>

<div id="chatc">
<img src="pencil.gif" width="125px" height="50px"/><span><img src="compose.gif" id="id111" style=";position:absolute;top:5%;left:21%;width:200px;height:50px;" onclick="fun16()"/></span>
<div id="fc" style="display:none">
<img src="mail-delete.png" style="cursor:pointer;position:absolute;top:-5px;left:99%;border-radius:50%" onclick="fun13()">
<form name="myForm" action="" onsubmit="return validateForm()" method="post" class="fixit">
	<label>Roll_No: </label><input type="text" placeholder="Enter Roll Number" name="selname" style="width:200px;height:30px;border:1px solid blue;" required><br/><br/>
	<textarea name="msg" class="field-divided4" placeholder="Write Your Message"  style="height:70px;width:300px;" required /></textarea><br/><br/>
	<input type="submit" value="SEND" name="send1" style="cursor:pointer"/>
</form>
</div>
</div>


<div id="foot">
<object type="text/html" data="footer.html" width="100%" height="100%"></object>
</div>

</body>
</html>


<?php
//error_reporting(0);
$qs=$_SERVER['QUERY_STRING'];
//session_start();
include_once "select_db.php";
if($_SESSION['au']!=$qs)
	echo "<script>location='index.php'</script>";
if(isset($_POST['send1']))
{
	$v1=mysql_real_escape_string(strtoupper(trim($_POST['selname']," ")));
	$v2=mysql_real_escape_string($_POST['msg']);
	if(mysql_query("insert complaint_table values('$v1','$qs','$v2','inbox')"))
	{
		echo "<script>alert('Message Sent To $v1')</script>";
	}
	else
	{
		echo "<script>alert('Sorry! Error In Sending Message')</script>";
	}
}
if(isset($_POST['subi']))
{
	$n1=strtoupper($_POST['namei1']);
	$n2=strtoupper($_POST['namei2']);
	echo "<script>location='displayofficial.php?$qs'</script>";
}
if(isset($_POST['del1']))
{
	$n1=mysql_real_escape_string(strtoupper(trim($_POST['named1'])));
	$n2=mysql_real_escape_string(strtoupper(trim($_POST['named2'])));
	$m=0;$n=0;$o=0;
	if($n1==null||$n1=="")
	{
		$m=$m+1;
		$data=mysql_query("select * from stud_hostel_details where regsno='$n2' and hostel_name='$qs' ");
	}
	else if($n2==null||$n2=="")
	{
		$n=$n+1;
		$data=mysql_query("select * from stud_hostel_details where rollno='$n1' ");
	}
	else
	{
		$o=$o+1;
		$data=mysql_query("select * from stud_hostel_details where rollno='$n1' and regsno='$n2' ");
	}
	if(mysql_num_rows($data)==1)
	{
		if($m==1)
		{
		$rec=mysql_fetch_row($data);
		ini_set("date.timezone","Asia/Calcutta");
		$fp=fopen("log/logfile3.log","a");
		$dt=date('Y-m-d h:i:sa');
		$dt=$qs." Deleted The Record Of ".$rec[0]." Having Inormation ".$rec[1]." ".$rec[2]." ".$rec[3]." ".$rec[4]." ".$rec[5]." ".$rec[6]." ".$rec[7]." ".$rec[8]." ".$rec[9]." ".$rec[10]." ".$rec[11]." "." On ".$dt."<br>\n";
		fwrite($fp,$dt);
		mysql_query("delete from stud_hostel_details where regsno='$n2' ");
		}
		if($n==1)
		{
		$rec=mysql_fetch_row($data);
		ini_set("date.timezone","Asia/Calcutta");
		$fp=fopen("log/logfile3.log","a");
		$dt=date('Y-m-d h:i:sa');
		$dt=$qs." Deleted The Record Of ".$rec[0]." Having Inormation ".$rec[1]." ".$rec[2]." ".$rec[3]." ".$rec[4]." ".$rec[5]." ".$rec[6]." ".$rec[7]." ".$rec[8]." ".$rec[9]." ".$rec[10]." ".$rec[11]." "." On ".$dt."<br>\n";
		fwrite($fp,$dt);
		mysql_query("delete from stud_hostel_details where rollno='$n1' ");
		}
		if($o==1)
		{
		$rec=mysql_fetch_row($data);
		ini_set("date.timezone","Asia/Calcutta");
		$fp=fopen("log/logfile3.log","a");
		$dt=date('Y-m-d h:i:sa');
		$dt=$qs." Deleted The Record Of ".$rec[0]." Having Inormation ".$rec[1]." ".$rec[2]." ".$rec[3]." ".$rec[4]." ".$rec[5]." ".$rec[6]." ".$rec[7]." ".$rec[8]." ".$rec[9]." ".$rec[10]." ".$rec[11]." "." On ".$dt."<br>\n";
		fwrite($fp,$dt);
		mysql_query("delete from stud_hostel_details where rollno='$n1' and regsno='$n2' ");
		}
		echo "<script>alert('Data Successfully Deleted')</script>";
	}
	else
		echo "<script>alert('Invalid Roll Number Or Registration Number')</script>";
}
?>