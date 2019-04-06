<head>
<title>
Individual Data
</title>
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
top:15%;
left:25%;
border:1px solid black;
background-color:transparent;
width:40%;
height:75%;
border-radius:5px;
box-shadow:5px 5px 5px black;
padding:10px;
overflow:auto;
}
</style>
</head>
<div id="foot">
<object type="text/html" data="footer.html" width="100%" height="100%"></object>
</div>
<div id="id6">
<?php
error_reporting(0);
include_once "select_db.php";
$qs=$_SERVER['QUERY_STRING'];
$v=explode("+",$qs);
//$v2=strtoupper(trim($_POST['name2']," "));
if($v[0]==null || $v[0]=="")
{
	$data=mysql_query("select * from stud_hostel_details where regsno='$v[1]' and hostel_name='$v[2]'");
}
else if($v[1]==null || $v[1]=="")
{
	$data=mysql_query("select * from stud_hostel_details where rollno='$v[0]' and hostel_name='$v[2]'");
}
else
{
	$data=mysql_query("select * from stud_hostel_details where rollno='$v[0]' and regsno='$v[1]' and hostel_name='$v[2]'");
}
	if($rec=mysql_fetch_row($data))
	{
	echo "<h1 style='position:fixed;top:0px;left:30%;color:grey;font-size:50px'>Individual Information</h1><form method='post' action='homeex1.php?$v[2]'><table style='color:blue'><tr>";
	echo "<tr><td>Name</td><td> :- $rec[0]</td></tr></tr>";
	echo "<td>Roll No</td><td> :- $rec[1]</td></tr>";
	echo "<tr><td>Regs No</td><td> :- $rec[2]</td></tr>";
	echo "<tr><td>Gender</td><td> :- $rec[3]</td></tr></tr>";
	echo "<tr><td>Student Email</td><td> :- $rec[4]</tr>";
	echo "<tr><td>Student PhNo</td><td> :- $rec[5]</tr>";
	echo "<tr><td>Branch</td><td> :- $rec[6]</tr><tr><td></td>";
	echo "<tr><td>Session</td><td> :- $rec[7]</tr><tr><td></td>";
	echo "<tr><td>Citizenship</td><td> :- $rec[8]</tr>";
	echo "<tr><td>Parents Name</td><td> :- $rec[9]</tr>";
	echo "<tr><td>Parents PhNo</td><td> :- $rec[10]</tr>";
	echo "<tr><td>Contact Address</td><td> :- $rec[11]</td></tr></tr>";
	
	
	
	echo "<td><br> &nbsp&nbsp&nbsp<input type='submit' value='Home' style='cursor:pointer'></td></table></form>";
	}
	else
		echo "<script>alert('Invalid Roll Number Or Registration Number'); location='homeex1.php?$v[2]'</script>";
?>
</div>