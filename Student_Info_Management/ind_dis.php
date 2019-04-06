<?php session_start(); ?>

<head>
<title>
Individual Data
</title>
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
z-index:5000000000;
position:absolute;
top:10%;
left:18%;
border:1px solid black;
background-color:mintcream;
width:55%;
height:75%;
border-radius:5px;
box-shadow:5px 5px 5px black;
padding:10px;
overflow:auto;
}
</style>
</head>
<body style="background:url('p2.jpg') no-repeat fixed">
<div id="foot">
<object type="text/html" data="footer.html" width="100%" height="100%"></object>
</div>
<div id="id6">
<?php
//error_reporting(0);
$qs=$_SERVER['QUERY_STRING'];
$v=explode("+",$qs);
//$v2=strtoupper(trim($_POST['name2']," "));
$qs=$v[2];
include_once "select_db.php";
if($v[0]==null || $v[0]=="")
{
	$yr=substr($v[1],0,2);
	$year="20".$yr;
	$yr="20".$yr."-".($yr+4);
	$data=mysql_query("select * from `$yr` where regsno='$v[1]' ");
}
else if($v[1]==null || $v[1]=="")
{
	$yr=substr($v[0],0,2);
	$year="20".$yr;
	$yr="20".$yr."-".($yr+4);
	$data=mysql_query("select * from `$yr` where rollno='$v[0]' ");
}
else
{
	$yr=substr($v[0],0,2);
	$year="20".$yr;
	$yr="20".$yr."-".($yr+4);
	$data=mysql_query("select * from `$yr` where rollno='$v[0]' and regsno='$v[1]' ");
}
if($rec=mysql_fetch_row($data))
{
	
	$rollno=$rec[0];
	if($rec[16]=="CHEMICAL")
	{$branch="CHEM";}
	else if($rec[16]=="BT")
	{$branch="BIO";}
	else if($rec[16]=="AEI")
	{$branch="AEIE";}
	else if($rec[16]=="METALLURGY")
	{$branch="META";}
	else
	{$branch=$rec[16];}
	$photo_loc="../"."GIET"."/"."student_portal"."/"."excel_files"."/".$branch."/".$year."/"."photo";
	if($_SESSION['au']=="ADMIN")
		echo "<span style='position:fixed;top:0px;left:30%;color:grey;font-size:50px'>Individual Information</span><form method='post' action='homeex2.php?$v[2]'><table style='color:blue'>";
	else if ($_SESSION['au']=="BSH")
		echo "<span style='position:fixed;top:0px;left:30%;color:grey;font-size:50px'>Individual Information</span><form method='post' action='homebsh.php?$v[2]'><table style='color:blue'>";
	else
		echo "<span style='position:fixed;top:0px;left:30%;color:grey;font-size:50px'>Individual Information</span><form method='post' action='homeex1.php?$v[2]'><table style='color:blue'>";
	echo "<tr><th>Roll No</th><td> :- $rec[0]</td>";
	
	echo "<td></td><td rowspan=5><a href=\"$photo_loc/$rollno.jpg\"><img src=\"$photo_loc/$rollno.jpg\" width=\"150\" height=\"150\"></a></td>";
	echo"</tr>";
	echo "<tr><th>Regs No</th><td> :- $rec[1]</td></tr>";
	echo "<tr><th>Name</th><td> :- $rec[2]</td></tr>";
	echo "<tr><th>Gender</th><td> :- $rec[18]</td></tr>";
	echo "<tr><th>Address</th><td> :- $rec[19]</td></tr>";
	echo "<tr><th>Branch</th><td> :- $rec[16]</td></tr>";
	echo "<tr><th>Session</th><td> :- $rec[17]</td></tr>";
	echo "<tr><th>Student PhNo</th><td> :- $rec[3]</td></tr>";
	echo "<tr><th>Student Alt PhNo</th><td> :- $rec[4]</td></tr>";
	echo "<tr><th>Student Per. Email</th><td> :- $rec[5]</td></tr>";
	echo "<tr><th>Student Ins Email</th><td> :- $rec[6]</td></tr>";
	echo "<tr><th>Rank</th><td> :- $rec[20]</td></tr>";
	echo "<tr><th>JEE/OJEE Roll</th><td> :- $rec[21]</td></tr>";
	echo "<tr><th>10<sup>th</sup> %</th><td> :- $rec[7]</td></tr>";
	echo "<tr><th>10<sup>th</sup> Pass Yr</th><td> :- $rec[8]</td></tr>";
	echo "<tr><th>12<sup>th</sup> %</th><td> :- $rec[9]</td></tr>";
	echo "<tr><th>12<sup>th</sup> Pass Yr</th><td> :- $rec[10]</td></tr>";
	echo "<tr><th>Date Of Birth</th><td> :- $rec[15]</td></tr>";
	echo "<tr><th>Parents Name</th><td> :- $rec[11]</td></tr>";
	echo "<tr><th>Parents PhNo</th><td> :- $rec[12]</td></tr>";
	echo "<tr><th>Parents PhNo</th><td> :- $rec[13]</td></tr>";
	echo "<tr><th>Parents Email</th><td> :- $rec[14]</td></tr>";
	echo "<tr><td></td>";
	echo "<td><br> &nbsp&nbsp&nbsp<input type='submit' value='Back' style='cursor:pointer'></td></tr></table></form>";
}
else
{
	if($_SESSION['au']=="ADMIN")
		echo "<script>alert('Invalid Roll Number Or Registration Number'); location='homeex2.php?$v[2]'</script>";
	else if ($_SESSION['au']=="BSH")	
		echo "<script>alert('Invalid Roll Number Or Registration Number'); location='homebsh.php?$v[2]'</script>";
	else
		echo "<script>alert('Invalid Roll Number Or Registration Number'); location='homeex1.php?$v[2]'</script>";
}
?>
</div>
</body>