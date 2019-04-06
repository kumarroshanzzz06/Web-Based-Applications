<?php
if(!isset($_GET['d']))
	echo "<script>location='index.php'</script>";
if(isset($_POST['mysub']))
{
	$v1=mysql_real_escape_string(strtoupper(trim($_POST['field1']," ")));
	$v2=$_POST['field2'];
	//$v3=$_POST['field3'];
	$v4=mysql_real_escape_string(trim($_POST['field4']," "));
	$v5=mysql_real_escape_string(trim($_POST['field5']," "));
	$v6=$_POST['field6'];
	$v7=$_POST['field7'];
	$v8=$_POST['field8'];
	$v9=mysql_real_escape_string(strtoupper(trim($_POST['field9']," ")));
	$dob=$v6."-".$v7."-".$v8;
	$qdata=base64_decode($_GET['d']);
	$qdata=explode("_",$qdata);
	$v3=$qdata[4];
	$qs=$qdata[2];
	include "select_db.php";
	if(mysql_query("CREATE TABLE IF NOT EXISTS `student_details` (`regsno` varchar(10) NOT NULL,`password` varchar(100) NOT NULL,`field` varchar(10) NOT NULL,`college` varchar(100) NOT NULL,`name` varchar(50) NOT NULL,`gender` varchar(6) NOT NULL,`branch` varchar(50) NOT NULL,`stud_phno` bigint(10) NOT NULL,`stud_email` varchar(50) NOT NULL,`dob` varchar(20),`address` varchar(300) NOT NULL,PRIMARY KEY (`regsno`))"))
	{
		$pwd=md5(crc32($qdata[3]."pwd"));
		if(mysql_query("insert into `student_details` values('$qdata[3]','$pwd','$qdata[1]','$qdata[0]','$v1','$v2','$v3','$v4','$v5','$dob','$v9')"))
		{
			echo "<h3>Your Profile Created With Default Username And Password As Your Registration Number<br><a href='slogin.php'>Click Here</a> To Login</h3>";
			exit(0);
		}
		else
		{
			echo "<h3>You Are Already Registered With Us <a href='slogin.php'>Click Here</a> To Login</h3>";
			exit(0);
		}
	}
	else
	{
		echo "<script>alert('Error Occured In Creating New Table')</script>";
	}
}
?>

<html>
<head>
<title>Student Personal Details</title>
<head>
<link href="./css/style.css" rel="stylesheet"/>
</head>
<body bgcolor="#8195E1">
<center>
<div style='width:100%;font-size:50px;border:2px dotted red;border-radius:5px;background-color:white;cursor:pointer'>STUDENT INFORMATION FORM</div>
<br>
<form name="myForm" action="" method="post">
<table border='1' bgcolor='white' width='60%'>
<tr>
	<th>Name  </th>
	<td><input type="text" name="field1" placeholder="Enter Name" required/></td>
</tr>
<tr>
	<th>Gender  </th>
	<td><input type="radio" name="field2" value="Male" style='width:50px;height:25px' checked>Male
	<input type="radio" name="field2" value="Female" style='width:50px;height:25px'>Female</td>
</tr>
<tr>
    <th>Student Contact Number  </th>
	<td><input type="text" name="field4" placeholder="Student Contact Number" maxlength="10" required/></td>
</tr>
<tr>
    <th>Student Email  </th>
	<td><input type="email" name="field5" placeholder="abc@xyz.com" required/></td>
</tr>
<tr>
	<th>Date Of Birth  </th>
	<td>
	<select name="field6" style="width:100px" required/>
		<option value="">Day</option>
		<?php
			for($i=1;$i<=31;$i++)
				echo "<option>$i</option>";
		?>
	 </select>
        <select name="field7" style="width:140px" required/> 
			<option value="">Month</option>
		<?php
			for($i=1;$i<=12;$i++)
				echo "<option>$i</option>";
		?>
		</select>
        <select name="field8" style="width:100px" required/>
			<option value="">Year</option>
			<?php
				$yr=date("Y");
				$yr-=16;
				for($i=$yr;$i>=$yr-15;$i--)
					echo "<option>$i</option>";
			?>
		</select>
		</td>
</tr>
<tr>
    <th>Contact Address  </th>
	<td><textarea name="field9" placeholder="Write Your Mailing Address" required/></textarea></td>
</tr>
<tr>
    <td align='right'><input type="submit" name='mysub' value="Submit" class='hvr-grow' style='height:40;width:240'>&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;<input type="reset" value="Reset" class='hvr-grow' style='height:40;width:240'></td>
</tr>
</table>
</form>
</center>
</body>
</html>