<?php
session_start();
?>

<html>
<head>
<script language="javascript">
function fun1()
{
document.getElementById('id4').style.display="block";
document.getElementById('id1').style.display="none";
document.getElementById('id9').style.display="none";
document.getElementById('id10').style.display="none";
document.getElementById('id_stud').style.display="none";
}
function fun3()
{
document.getElementById('id11').style.display="block";
document.getElementById('id1').style.display="none";
document.getElementById('id9').style.display="none";
document.getElementById('id10').style.display="none";
document.getElementById('id_stud').style.display="none";
}
function fun4()
{
document.getElementById('id12').style.display="block";
document.getElementById('id1').style.display="none";
document.getElementById('id9').style.display="none";
document.getElementById('id10').style.display="none";
document.getElementById('id_stud').style.display="none";
}
function fun_stud()
{
document.getElementById('id12_stud').style.display="block";
document.getElementById('id1').style.display="none";
document.getElementById('id9').style.display="none";
document.getElementById('id10').style.display="none";
document.getElementById('id_stud').style.display="none";
}
function fun2()
{
document.getElementById('id4').style.display="none";
document.getElementById('id11').style.display="none";
document.getElementById('id1').style.display="block";
document.getElementById('id9').style.display="block";
document.getElementById('id10').style.display="block";
document.getElementById('id_stud').style.display="block";
document.getElementById('id12').style.display="none";
document.getElementById('id12_stud').style.display="none";
}
function fun5()
{

var v1=document.getElementById("r1").value;
var v2=document.getElementById("r2").value;
if(v1==""&&v2=="")
	{
	alert('At Least One Field Must Be Filled Out');
	return false;
	}
}
function fun6()
{

var v1=document.getElementById("d1").value;
var v2=document.getElementById("d2").value;
if(v1==""&&v2=="")
	{
	alert('At Least One Field Must Be Filled Out');
	return false;
	}
}
function fun7()
{

var v1=document.getElementById("i1").value;
var v2=document.getElementById("i2").value;
if(v1==""&&v2=="")
	{
	alert('At Least One Field Must Be Filled Out');
	return false;
	}
}
</script>
<style>
body {
	background:url('p2.jpg') no-repeat fixed;
	background-repeat: no-repeat;
	background-size:100% ;
	background-attachment:fixed;
}
.required1{
    color:blue;
    text-decoration: none;
    position:fixed;
    margin:-10;
     padding: 0 0 0 0;
     background:MINTCREAM;
    box-shadow: 10px 10px 5px darkgreen;
     width:100%;
    height:15%;
    z-index:1001;
    text-align:center;
    text-shadow: 0 0 3px #FF0000, 0 0 5px #FFA500;
   -webkit-animation: mymove 5s infinite; 
    animation: mymove 5s infinite;
}
@-webkit-keyframes mymove {
    50% {text-shadow: 10px 20px 30px blue;}
}
.clearfix:after {
	display:block;
	clear:both;
}
.bmenu{
	position:absolute;
	left:4%;
	width:15%;
	top:13%;
	height:11%;
	color:darkred;
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
	color:green;
	text-decoration:none;
	
}

.menu li:hover > a {
	text-decoration:none;
	color:#be5b70;
	display:inline-block;
	font-size:25px;
	
}

#id1
{
position:absolute;
top:30%;
padding:0px 0px 0px 10px;
left:30%;
width:23%;
color:green;
font-size:12px;
cursor:pointer;
-webkit-transition:font-size 1s;
transition:font-size 1s;
}
#id1:hover
{
color:orange;
font-size:14px;
text-shadow: 0 0 2px #FF0000;
}

#id9
{
position:absolute;
top:45%;
padding:0px 0px 0px 10px;
left:30%;
width:18%;
color:green;
font-size:12px;
cursor:pointer;
-webkit-transition:font-size 1s;
transition:font-size 1s;
}
#id9:hover
{
color:orange;
font-size:14px;
text-shadow: 0 0 2px #FF0000;
}

#id10
{
position:absolute;
top:60%;
padding:0px 0px 0px 10px;
left:30%;
width:12%;
color:green;
font-size:12px;
cursor:pointer;
-webkit-transition:font-size 1s;
transition:font-size 1s;
}
#id10:hover
{
color:red;
font-size:14px;
text-shadow: 0 0 10px #FF0000;
}
#id_stud
{
position:absolute;
top:70%;
padding:0px 0px 0px 10px;
left:30%;
width:12%;
color:green;
font-size:8px;
cursor:pointer;
-webkit-transition:font-size 1s;
transition:font-size 1s;
}
#id_stud:hover
{
color:red;
font-size:8px;
text-shadow: 0 0 10px #FF0000;
}
#id2
{
position:absolute;
top:25%;
left:75%;
border:2px solid transparent;
border-radius:5%;
padding:10px 10px 10px 10px;
background:rgb(184, 184, 177);
box-shadow:5px 5px 10px black;
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
#id12_stud
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
top:18%;
color:pink;
font-size:30px;
left:33%;
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
    -moz-box-shadow: 0 0 8px red;
    -webkit-box-shadow: 0 0 8px red;
        box-shadow: 0 0 8px red;
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
top:80%;
left:70%;
}


#foot
{
position:fixed;
top:90%;
left:0px;
width:100%;
background-color:MINTCREAM;
}
</style>
</head>


<body>

<div class="required1"><img src="logo.jpg" alt="Image Not Found" height="100" width="100" align="left"><span style="font-size:35px">GIET , GUNUPUR</span><br><br><span style="font-size:30px"> DEPARTMENT OF <?php $qs=$_SERVER['QUERY_STRING']; echo " $qs"; ?></span>
</div>
<div class="dept">STUDENT INFORMATION SYSTEM</div>
<div class="bmenu"><center><h2>Select Year To Get Data</h2></center></div>
<div class="menu-wrap" >
	<nav class="menu">
	<ul class="clearfix">
		
			<li><a href="display_info.php?<?php echo $_SERVER['QUERY_STRING'] ?>+a">ALL.......</a></li><hr>
			<li><a href="display_info.php?<?php echo $_SERVER['QUERY_STRING'] ?>+1">1st year</a></li><hr>
			<li><a href="display_info.php?<?php echo $_SERVER['QUERY_STRING'] ?>+2">2nd year</a></li><hr>
			<li><a href="display_info.php?<?php echo $_SERVER['QUERY_STRING'] ?>+3">3rd year</a></li><hr>
			<li><a href="display_info.php?<?php echo $_SERVER['QUERY_STRING'] ?>+4">4th year</a></li>
		</ul> 
		
	</nav>
</div>

<div id="id1" onclick="fun1()">
<img src="arrow.png" alt="CLICK HERE TO" align="left" style="width:35px;height:35px;border-radius:50%;position:absolute;top:25%;left:-10%">
<H1><u>Update Individual Data</u></H1>
</div>

<div id="id4" >
<img src="mail-delete.png" style="cursor:pointer;position:absolute;top:-10px;left:213px;border-radius:50%" onclick="fun2()">
<form method="post" class="form-style-1" action="" onsubmit="return fun5()">
<input type="text" placeholder="Enter Roll_no" name="name1" id="r1">
<br>
<span style="text-align:center;"><h2>OR</h2></span>
<input type="text" placeholder="Enter Regd_no" name="name2" id="r2">
<br><br>
<input type="submit" value="Submit" name="sub2">
</form>
</div>

<div id="id9" onclick="fun4()">
<img src="arrow.png" alt="CLICK HERE TO" align="left" style="width:35px;height:35px;border-radius:50%;position:absolute;top:25%;left:-13%">
<H1><u>Update Bulk Data</u></H1>
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
<img src="arrow.png" alt="CLICK HERE TO" align="left" style="width:35px;height:35px;border-radius:50%;position:absolute;top:25%;left:-19%">
<H1><u>Delete Data</u></H1>
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

<div id="id_stud" onclick="fun_stud()">
<img src="arrow.png" alt="CLICK HERE TO" align="left" style="width:35px;height:35px;border-radius:50%;position:absolute;top:25%;left:-19%">
<H1><u>UPDATE DATA AT STUDENT ACADEMIC PORTAL</u></H1>
</div>

<div id="id12_stud">
<img src="mail-delete.png" style="cursor:pointer;position:absolute;top:-10px;left:213px;border-radius:50%" onclick="fun2()">
<form method="post" class="form-style-1" action="db_to_excel/db_to_excel.php?">
<input type='hidden' name='branch' value='<?php echo $_SERVER['QUERY_STRING']?>'>
<?php
					echo '<center><p><strong>Select the Batch:</strong></p>';
					echo '<select name="year">';
					$curYear = date('Y');
					$curMon = date('m');
					if($curMon <7)
						$curYear=$curYear-1;
					for($x=$curYear;$x>=2011;$x--)
						echo '<option value="'.$x.'">'.$x.'</option>';
					echo "</select></center>";
?>
<br><br>
<input type="submit" value="Update" name="upda1">
</form>
</div>

<div id="id2">
<h2>Get Individual Data</h2><hr>
<form method="post" action="" class="form-style-1" onsubmit="return fun7()">
<br>
<input type="text" placeholder="Enter Roll_no" name="namei1" id="i1">
<br> 
<span style="text-align:center;"><h2>OR</h2></span>

<input type="text" placeholder="Enter Regd_no" name="namei2" id="i2">
<br><br>
<input type="submit" value="Submit" name="subi">
<br>
</form>
</div>



<div id="id8">
<br>G<BR>E<BR>T<br><br><span style="color:orange;">C<br>O<br>L<br>L<br>E<br>C<br>T<br>I<br>V<br>E</span><br><br>D<br>A<br>T<br>A
</div>
<div id="last"><h2><a href="logout.php" style="color:red;">Log Out</a>&nbsp&nbsp|&nbsp&nbsp<a href="password.php?<?php echo $_SERVER['QUERY_STRING'] ?>" style="color:red;">Change Password</a></h2></div>
<div id="foot">
<object type="text/html" data="footer.html" width="100%" height="100%"></object>
</div>
</body>
</html>


<?php
//error_reporting(0);
$qs=$_SERVER['QUERY_STRING'];
if($_SESSION['au']!=$qs)
	echo "<script>location='login_form.php'</script>";
include_once "select_db.php";
if(isset($_POST['subi']))
{
	$n1=mysql_real_escape_string(strtoupper(trim($_POST['namei1'],"")));
	$n2=mysql_real_escape_string(strtoupper(trim($_POST['namei2'],"")));
	if($n1==null || $n1=="")
	{
		$yr=substr($n2,0,2);
		if(substr($n2,2,1)=="2")
			$yr=$yr-1;
		$yr="20".$yr."-".($yr+4);
		$data=mysql_query("select * from `$yr` where regsno='$n2' ");
	}
	else if($n2==null || $n2=="")
	{
		$yr=substr($n1,0,2);
		$yr="20".$yr."-".($yr+4);
		$data=mysql_query("select * from `$yr` where rollno='$n1' ");
	}
	else
	{
		$yr=substr($n1,0,2);
		$yr="20".$yr."-".($yr+4);
		$data=mysql_query("select * from `$yr` where rollno='$n1' and regsno='$n2' ");
	}
	if(mysql_num_rows($data)==1)
	{
		echo "<script>location='ind_dis.php?$n1+$n2+$qs'</script>";
	}
	echo "<script>alert('Invalid Roll No. Or Regs. No.')</script>";
}
if(isset($_POST['del1']))
{
	$n1=mysql_real_escape_string(strtoupper(trim($_POST['named1'])));
	$n2=mysql_real_escape_string(strtoupper(trim($_POST['named2'])));
	$m=0;$n=0;$o=0;
	if($n1==null||$n1=="")
	{
		$yr=substr($n2,0,2);
		if(substr($n2,2,1)=="2")
			$yr=$yr-1;
		$yr="20".$yr."-".($yr+4);
		$m=$m+1;
		$data=mysql_query("select * from `$yr` where regsno='$n2' ");
	}
	else if($n2==null||$n2=="")
	{
		$yr=substr($n1,0,2);
		$yr="20".$yr."-".($yr+4);
		$n=$n+1;
		$data=mysql_query("select * from `$yr` where rollno='$n1' ");
	}
	else
	{
		$yr=substr($n1,0,2);
		$yr="20".$yr."-".($yr+4);
		$o=$o+1;
		$data=mysql_query("select * from `$yr` where rollno='$n1' and regsno='$n2' ");
	}
	if(mysql_num_rows($data)==1)
	{
		if($m==1)
		{
		$rec=mysql_fetch_row($data);
		ini_set("date.timezone","Asia/Calcutta");
		$fp=fopen("log/logfile3.log","a");
		$dt=date('Y-m-d h:i:sa');
		$dt=$qs." Deleted The Record Of ".$rec[0]." Having Inormation ".$rec[1]." ".$rec[2]." ".$rec[3]." ".$rec[4]." ".$rec[5]." ".$rec[6]." ".$rec[7]." ".$rec[8]." ".$rec[9]." ".$rec[10]." ".$rec[11]." ".$rec[12]." ".$rec[13]." ".$rec[14]." ".$rec[15]." ".$rec[16]." ".$rec[17]." "." On ".$dt."<br>\n";
		fwrite($fp,$dt);
		mysql_query("delete from `$yr` where regsno='$n2' ");
		}
		if($n==1)
		{
		$rec=mysql_fetch_row($data);
		ini_set("date.timezone","Asia/Calcutta");
		$fp=fopen("log/logfile3.log","a");
		$dt=date('Y-m-d h:i:sa');
		$dt=$qs." Deleted The Record Of ".$rec[0]." Having Inormation ".$rec[1]." ".$rec[2]." ".$rec[3]." ".$rec[4]." ".$rec[5]." ".$rec[6]." ".$rec[7]." ".$rec[8]." ".$rec[9]." ".$rec[10]." ".$rec[11]." ".$rec[12]." ".$rec[13]." ".$rec[14]." ".$rec[15]." ".$rec[16]." ".$rec[17]." "." On ".$dt."<br>\n";
		fwrite($fp,$dt);
		mysql_query("delete from `$yr` where rollno='$n1' ");
		}
		if($o==1)
		{
		$rec=mysql_fetch_row($data);
		ini_set("date.timezone","Asia/Calcutta");
		$fp=fopen("log/logfile3.log","a");
		$dt=date('Y-m-d h:i:sa');
		$dt=$qs." Deleted The Record Of ".$rec[0]." Having Inormation ".$rec[1]." ".$rec[2]." ".$rec[3]." ".$rec[4]." ".$rec[5]." ".$rec[6]." ".$rec[7]." ".$rec[8]." ".$rec[9]." ".$rec[10]." ".$rec[11]." ".$rec[12]." ".$rec[13]." ".$rec[14]." ".$rec[15]." ".$rec[16]." ".$rec[17]." "." On ".$dt."<br>\n";
		fwrite($fp,$dt);
		mysql_query("delete from `$yr` where rollno='$n1' and regsno='$n2' ");
		}
		echo "<script>alert('Data Successfully Deleted')</script>";
	}
	else
		echo "<script>alert('Invalid Roll Number Or Registration Number')</script>";
}
if(isset($_POST['sub2']))
{
	$v1=mysql_real_escape_string(strtoupper(trim($_POST['name1']," ")));
	$v2=mysql_real_escape_string(strtoupper(trim($_POST['name2']," ")));
	if($v1==null || $v1=="")
	{
		$yr=substr($v2,0,2);
		if(substr($v2,2,1)=="2")
			$yr=$yr-1;
		$yr="20".$yr."-".($yr+4);
		$data=mysql_query("select * from `$yr` where regsno='$v2' ");
	}
	else if($v2==null || $v2=="")
	{
		$yr=substr($v1,0,2);
		$yr="20".$yr."-".($yr+4);
		$data=mysql_query("select * from `$yr` where rollno='$v1' ");
	}
	else
	{
		$yr=substr($v1,0,2);
		$yr="20".$yr."-".($yr+4);
		$data=mysql_query("select * from `$yr` where rollno='$v1' and regsno='$v2' ");
	}
	if(mysql_num_rows($data)==1)
	{
		echo "<script>location='uptodate.php?$v1+$v2+$qs'</script>";
	}
	else
	{
		echo "<script>alert('Invalid Roll Number Or Registration Number')</script>";
	}
}
?>