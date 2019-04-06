<?php
if(isset($_SERVER['PHP_AUTH_USER']) && $_COOKIE['isin']=="1")
{
	$uname=$_SERVER['PHP_AUTH_USER'];
	$qs=substr($uname,0,2);
	if(substr($uname,2,1)=="2")
		$qs=$qs-1;
	$qs="20".$qs."-".($qs+4);
	include "select_db.php";
	$data=mysql_query("select * from `student_details` where regsno='$uname'");
	$rec=mysql_fetch_row($data);
	$pattern=$rec[2]."_".$qs."_";
	$data1=mysql_query("show tables from `$rec[3]` like '$pattern%\_$rec[6]'");
}
?>
<html>
<head>
<title>Student Logined</title>
<link href="./css/style.css" rel="stylesheet"/>
</head>
<body onload='fun_load()' bgcolor='#8195E1'>
<h2 align='center' style='font-size:40px;border:2px dotted red;border-radius:5px;background-color:white;cursor:pointer'>WELCOME <i style='font-size:40px;border-radius:5px;background-color:white;cursor:pointer;color:black'><?php echo $rec[4];?></i> . HAVE A GREAT DAY
</h2><span style="position:absolute;right:5px"><a href=''>Change Password</a> &nbsp<a href='logout.php'>LogOut</a></span>
<br><hr><hr>
<table border="1" align="center" width="80%" bgcolor='white'>
<tr align="center">
	<th>Registration Number</th>
	<td><?php echo $rec[0]; ?></td>
</tr>
<tr align="center">
	<th>Field</th>
	<td><?php echo $rec[2]; ?></td>
</tr>
<tr align="center">
	<th>College</th>
	<td><?php echo $rec[3]; ?></td>
</tr>
<tr align="center">
	<th>Gender</th>
	<td><?php echo $rec[5]; ?></td>
</tr>
<tr align="center">
	<th>Branch</th>
	<td><?php echo $rec[6]; ?></td>
</tr>
<tr align="center">
	<th>Phone Number</th>
	<td><?php echo $rec[7]; ?></td>
</tr>
<tr align="center">
	<th>Email Id</th>
	<td><?php echo $rec[8]; ?></td>
</tr>
<tr align="center">
	<th>Date Of Birth</th>
	<td><?php echo $rec[9]; ?></td>
</tr>
<tr align="center">
	<th>Address</th>
	<td><?php echo $rec[10]; ?></td>
</tr>
</table>
<center>
	<form action='edit_stud_profile.php' method='post'><br><input type='submit' value='Edit Profile' name='sub1' class='hvr-grow'>
	</form>
</center>
<hr><hr>
<div id='div1' align='center' style="font-size:25px">
<?php
$i=1;
while($rec1=mysql_fetch_row($data1))
{
	$loc="rdisplay.php?d=".base64_encode($rec[3]."_".$rec[0]."_".$rec1[0]."_".$rec[6]);
	echo "<a href='$loc'>Click Here To View Your Semester $i Result</a><br>";
	$i++;
}
$loc="all_stud_result.php?d=".base64_encode($rec[3]."_".$rec[2]."_".$qs."_".$rec[6]."_".$rec[0]);
echo "<a href='$loc'>Click Here To View All Your Semester Result (Till Now)</a>";
?>
</div><br>
</body>
</html>