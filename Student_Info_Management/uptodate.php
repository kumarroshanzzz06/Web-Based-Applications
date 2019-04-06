<?php
session_start();
?>

<html>
<head>
<title>
Update Data
</title>
<script language="javascript">
function fun1()
{
if(document.getElementById("change").checked==true)
{
document.getElementById("id2").style.display="block";
document.getElementById("id1").style.display="none";
document.getElementById("id3").style.display="none";
document.getElementById("id4").style.display="block";
//alert(document.getElementById("id2").type);
}
else
{
document.getElementById("id1").style.display="block";
document.getElementById("id2").style.display="none";
document.getElementById("id3").style.display="block";
document.getElementById("id4").style.display="none";
}
}
function funbck()
{
var s="<?php
$qs=explode('+',$_SERVER['QUERY_STRING']);
echo $qs[2];
?>";
var s1="<?php
if($_SESSION['au']=="ADMIN")
	echo $_SESSION['au'];
else if($_SESSION['au']=="BSH")
	echo $_SESSION['au'];
?>";
if(s1=="ADMIN")
	location="homeex2.php?"+s;
else if(s1=="BSH")
	location="homebsh.php?"+s;
else
	location="homeex1.php?"+s;
}
</script>
<style>
#foot
{
position:fixed;
top:90%;
left:0px;
width:100%;
background-color:mintcream;
}
#id6
{
//display:none;
z-index:5;
position:absolute;
top:10%;
left:25%;
border:1px solid black;
background-color:mintcream;
width:40%;
height:75%;
border-radius:5px;
box-shadow:5px 5px 5px black;
padding:10px;
overflow:auto;
}
</style>
</head>
<body style="background:url('p2.jpg') no-repeat fixed">
<div id="id6">
<?php
//error_reporting(0);
//session_start();
$qs=$_SERVER['QUERY_STRING'];
$v=explode("+",$qs);
if(($_SESSION['au']!=$v[2])&&($_SESSION['au']!="ADMIN")&&($_SESSION['au']!="BSH"))
	echo "<script>location='login_form.php'</script>";
//if(isset($_POST['sub2']))
{
$qs=$v[2];
include_once "select_db.php";
if($v[0]==null || $v[0]=="")
{
	$yr=substr($v[1],0,2);
	$yr="20".$yr."-".($yr+4);
	$data=mysql_query("select * from `$yr` where regsno='$v[1]' ");
}
else if($v[1]==null || $v[1]=="")
{
	$yr=substr($v[0],0,2);
	$yr="20".$yr."-".($yr+4);
	$data=mysql_query("select * from `$yr` where rollno='$v[0]' ");
}
else
{
	$yr=substr($v[0],0,2);
	$yr="20".$yr."-".($yr+4);
	$data=mysql_query("select * from `$yr` where rollno='$v[0]' and regsno='$v[1]' ");
}
if($rec=mysql_fetch_row($data))
{
	echo "<h1 style='position:fixed;top:-25px;left:30%;color:grey;font-size:50px'>Update Information</h1><form method='post' action='updating.php?$rec[16]+$rec[0]'><table style='color:blue'>";
	echo "<tr><th>Roll No</th><td id='id1'> :- $rec[0]</td>";
	echo "<td style='display:none;' id='id2'> :- <input type='text' value='$rec[0]' name='val1' required ></td></tr>";
	if($rec[1]=="" || $rec[1]==$rec[0] )
		echo "<tr><th>Regs No</th><td> :- <input type='text' value='$rec[1]' placeholder='Enter Registration Number' maxlength='10' name='valr'></td></tr>";
	else
		echo "<tr><th>Regs No</th><td> :- $rec[1]</td></tr>";
	echo "<tr><th>Name</th><td> :- $rec[2]</td></tr>";
	echo "<tr><th>Gender</th><td> :- $rec[18]</td></tr>";
	echo "<tr><th>Branch</th><td id='id3'> :- $rec[16]</td>";
	echo "<td style='display:none;' id='id4'> :- <select name='val2'  style='cursor:pointer'><option>Select Branch</option><option>CSE</option><option>IT</option><option>EE</option><option>EEE</option><option>ECE</option><option>MECH</option><option>CIVIL</option><option>BT</option><option>METALLURGY</option><option>CHEMICAL</option><option>AEI</option></select></td></tr>";
	echo "<tr><th>Session</th><td> :- $rec[17]</td></tr>";
	echo "<tr><th>Address</th><td> :- <textarea name='val3'>$rec[19]</textarea></td></tr>";
	echo "<tr><th>Student PhNo</th><td> :- <input value='$rec[3]' name='val4' maxlength='13'></td></tr>";
	echo "<tr><th>Student Alt PhNo</th><td> :- <input value='$rec[4]' name='val4_1' maxlength='13'></td></tr>";
	echo "<tr><th>Student Per. Email</th><td> :- <input type='email' value='$rec[5]' name='val5' ></td></tr>";
	echo "<tr><th>Student Ins Email</th><td> :- <input type='email' value='$rec[6]' name='val6'></td></tr>";
	echo "<tr><th>Rank</th><td> :- $rec[20]</td></tr>";
	echo "<tr><th>10<sup>th</sup> %</th><td> :- $rec[7]</td></tr>";
	echo "<tr><th>10<sup>th</sup> Pass Yr</th><td> :- $rec[8]</td></tr>";
	echo "<tr><th>12<sup>th</sup> %</th><td> :- $rec[9]</td></tr>";
	echo "<tr><th>12<sup>th</sup> Pass Yr</th><td> :- $rec[10]</td></tr>";
	echo "<tr><th>Date Of Birth</th><td> :- $rec[15]</td></tr>";
	echo "<tr><th>Parents Name</th><td> :- $rec[11]</td></tr>";
	echo "<tr><th>Parents PhNo</th><td> :- <input value='$rec[12]' name='val7' maxlength='13'></td></tr>";
	echo "<tr><th>Parents Alt PhNo</th><td> :- <input value='$rec[13]' name='val7_1' maxlength='13'></td></tr>";
	echo "<tr><th>Parents Email</th><td> :- <input type='email' value='$rec[14]' name='val8'></td></tr>";
	echo"<tr><td><input type='checkbox' id='change' onclick='fun1()'>Change BRANCH</td><td></td></tr>";
	echo "<tr><td><br> &nbsp&nbsp&nbsp<input type='submit' value='Update Info' style='cursor:pointer'>&nbsp&nbsp&nbsp<input type='button' onclick='funbck()' value='Back' style='cursor:pointer'></td></tr></table></form>";
}
else
{
	if($_SESSION['au']=="ADMIN")
		echo "<script>alert('Invalid Roll Number Or Registration Number'); location='homeex2.php?$v[2]'</script>";
	else if($_SESSION['au']=="BSH")
		echo "<script>alert('Invalid Roll Number Or Registration Number'); location='homebsh.php?$v[2]'</script>";
	else
		echo "<script>alert('Invalid Roll Number Or Registration Number'); location='homeex1.php?$v[2]'</script>";
}
}
?>
</div>
<div id="foot">
<object type="text/html" data="footer.html" width="100%" height="100%"></object>
</div>
</body>
</html>