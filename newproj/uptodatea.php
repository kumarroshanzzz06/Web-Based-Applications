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
}
else
{
document.getElementById("id1").style.display="block";
document.getElementById("id2").style.display="none";
document.getElementById("id3").style.display="block";
document.getElementById("id4").style.display="none";
}
}
</script>
<style>
#foot
{
position:fixed;
top:94%;
left:0px;
width:100%;
background-color:black;
}
#id6
{
//display:none;
z-index:5;
position:absolute;
top:10%;
left:25%;
border:1px solid black;
background-color:transparent;
width:40%;
height:80%;
border-radius:5px;
box-shadow:5px 5px 5px black;
padding:10px;
overflow:auto;
}
</style>
</head>
<body>
<div id="id6">
<?php
//error_reporting(0);
session_start();
$qs=$_SERVER['QUERY_STRING'];
if($_SESSION['au']!=$qs)
	echo "<script>location='login_form.php'</script>";
if(isset($_POST['sub2']))
{
include_once "select_db.php";
$v1=mysql_real_escape_string(strtoupper(trim($_POST['name1']," ")));
$v2=mysql_real_escape_string(strtoupper(trim($_POST['name2']," ")));
if($v1==null || $v1=="")
{
	$data=mysql_query("select * from stud_info_form where regsno='$v2' ");
}
else if($v2==null || $v2=="")
{
	$data=mysql_query("select * from stud_info_form where rollno='$v1' ");
}
else
{
	$data=mysql_query("select * from stud_info_form where rollno='$v1' and regsno='$v2' ");
}
	if($rec=mysql_fetch_row($data))
	{
	echo "<h1 style='position:fixed;top:-25px;left:30%;color:grey;font-size:50px'>Update Information</h1><form method='post' action='updatinga.php?$rec[0]'><table style='color:blue'>";
	echo "<tr id='id1'><td>Roll No</td><td> :- $rec[0]</td></tr>";
	echo "<tr style='display:none;' id='id2'><td>Roll No</td><td> :- <input type='text' value='$rec[0]' name='val1' required ></td></tr>";
	echo "<tr><td>Regs No</td><td> :- $rec[1]</td></tr>";
	echo "<tr><td>Name</td><td> :- $rec[2]</td></tr>";
	echo "<tr><td>Gender</td><td> :- $rec[16]</td></tr>";
	echo "<tr id='id3'><td>Branch</td><td> :- $rec[14]</td></tr>";
	echo "<tr style='display:none;' id='id4'><td>Branch</td><td> :- <select name='val2'  style='cursor:pointer'><option>CSE</option><option>IT</option><option>EE</option><option>EEE</option><option>ECE</option><option>MECH</option><option>CIVIL</option><option>BT</option><option>METALLURGY</option><option>CHEMICAL</option><option>AEI</option></select></td></tr>";
	echo "<tr><td>Session</td><td> :- $rec[15]</td></tr>";
	echo "<tr><td>Address</td><td> :- <textarea name='val3' required>$rec[17]</textarea></td></tr>";
	echo "<tr><td>Student PhNo</td><td> :- <input value='$rec[3]' name='val4' required></td></tr>";
	echo "<tr><td>Student Per. Email</td><td> :- <input type='email' value='$rec[4]' name='val5' required></td></tr>";
	echo "<tr><td>Student Ins Email</td><td> :- <input type='email' value='$rec[5]' name='val6'></td></tr>";
	echo "<tr><td>10<sup>th</sup> %</td><td> :- $rec[6]</td></tr>";
	echo "<tr><td>10<sup>th</sup> Pass Yr</td><td> :- $rec[7]</td></tr>";
	echo "<tr><td>12<sup>th</sup> %</td><td> :- $rec[8]</td></tr>";
	echo "<tr><td>12<sup>th</sup> Pass Yr</td><td> :- $rec[9]</td></tr>";
	echo "<tr><td>Date Of Birth</td><td> :- $rec[13]</td></tr>";
	echo "<tr><td>Parents Name</td><td> :- $rec[10]</td></tr>";
	echo "<tr><td>Parents PhNo</td><td> :- <input value='$rec[11]' name='val7' required></td></tr>";
	echo "<tr><td>Parents Email</td><td> :- <input type='email' value='$rec[12]' name='val8'></td></tr>";
	echo"<tr><td><input type='checkbox' id='change' onclick='fun1()'>Change BRANCH</td><td></td></tr>";
	echo "<tr><td><br> &nbsp&nbsp&nbsp<input type='submit' value='Update Info' style='cursor:pointer'></td><td></td></tr></table></form>";
	}
	else
		echo "<script>alert('Invalid Roll Number Or Registration Number'); location='admin1.php?$qs'</script>";
}
?>
</div>
<div id="foot">
<object type="text/html" data="footer.html" width="100%" height="100%"></object>
</div>
</body>
</html>