<?php
if(isset($_POST['sub1']))
{
	$uname=$_SERVER['PHP_AUTH_USER'];
	$qs=substr($uname,0,2);
	if(substr($uname,2,1)=="2")
		$qs=$qs-1;
	$qs="20".$qs."-".($qs+4);
	include "select_db.php";
	$data=mysql_query("select * from `student_details` where regsno='$uname'");
	$rec=mysql_fetch_row($data);
}
else if(isset($_POST['mysub']))
{
	$v1=$_POST['field1'];
	$v2=mysql_real_escape_string(strtoupper(trim($_POST['field2']," ")));
	$v4=mysql_real_escape_string(trim($_POST['field4']," "));
	$v5=mysql_real_escape_string(trim($_POST['field5']," "));
	$v6=mysql_real_escape_string(trim($_POST['field6']," "));
	$qs=substr($v1,0,2);
	if(substr($v1,2,1)=="2")
		$qs=$qs-1;
	$qs="20".$qs."-".($qs+4);
	include "select_db.php";
	if(mysql_query("update `student_details` set name='$v2',stud_phno='$v4',stud_email='$v5',address='$v6' where regsno='$v1'"))
	{
		echo "<h3>Your Profile Updated Successfully <a href='student.php'>Click Here</a> To View Profile</h3>";
		exit(0);
	}
	else
	{
		echo "<h3>Failed In Updating Your Profile. Please Try Again<br><a href='student.php'>Click Here</a> To View Profile</h3>";
		exit(0);
	}
}
else
	echo "<script>location='student.php'</script>";
?>
<html>
<head>
<title>Student Personal Details</title>
<link href="./css/style.css" rel="stylesheet"/>
</head>
<body bgcolor='#8195E1'>
<center>
<div style='width:100%;font-size:50px;border:2px dotted red;border-radius:5px;background-color:white;cursor:pointer'>STUDENT INFORMATION FORM</div>
<br>
<form name="myForm" action="" method="post">
<table border='1' bgcolor='white' width='60%'>
<tr>
	<th>Registration Number   </th>
	<td><?php echo $rec[0]; ?><input type="hidden" name='field1' value='<?php echo $rec[0]; ?>'></td>
</tr>
<tr>
	<th>Field   </th>
	<td><?php echo $rec[2]; ?></td>
</tr>
<tr>
	<th>College   </th>
	<td><?php echo $rec[3]; ?></td>
</tr>
<tr>
	<th>Branch   </th>
	<td><?php echo $rec[6]; ?></td>
</tr>
<tr>
	<th>Gender  </th>
	<td><?php echo $rec[5]; ?></td>
</tr>
<tr>
	<th>Date Of Birth   </th>
	<td><?php echo $rec[9];?></td>
</tr>
<tr>
	<th>Name  </th>
	<td><input type="text" name="field2" value="<?php echo $rec[4]; ?>" placeholder="Enter Name" required/></td>
</tr>
<tr>
    <th>Student Contact Number  </th>
	<td><input type="text" name="field4" value="<?php echo $rec[7]; ?>" placeholder="Student Contact Number" maxlength="10" required/></td>
</tr>
<tr>
    <th>Student Email  </th>
	<td><input type="email" name="field5" value="<?php echo $rec[8]; ?>" placeholder="abc@xyz.com" required/></td>
</tr>
<tr> 
    <th>Contact Address  </th>
	<td><textarea name="field6" placeholder="Write Your Mailing Address" required/><?php echo $rec[10]; ?></textarea></td>
</tr>
<tr>
	<td align='right'><input type="submit" name='mysub' value="Edit Profile" class='hvr-grow' style='height:40;width:240'>&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;<input type="button" value="Cancel" onclick="location='student.php'" class='hvr-grow' style='height:40;width:240'></td>	
</tr>
</form>
</table>
</center>
</body>
</html>