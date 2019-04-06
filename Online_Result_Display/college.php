<?php
$uname=$_SERVER['PHP_AUTH_USER'];
$qs="test";
include "select_db.php";
$data=mysql_query("select clgname from `college_login` where uname='$uname'");
$rec=mysql_fetch_row($data);
?>
<html>
<head>
<title>College Logined</title>
<link href="./css/style.css" rel="stylesheet"/>
</head>
<body bgcolor='#8195E1'>
<h2 align="center" style='font-size:40px;border:2px dotted red;border-radius:5px;background-color:white;cursor:pointer'><?php echo $rec[0];?></h2>
<hr><hr>
<h2 align='right'><a style='color:white' href='logout.php'>LogOut</a></h2>
<h3 align="center"><b><u style='font-size:35px;border-radius:10px'>WELCOME TO ONLINE RESULT DISPLAY SYSTEM</b></u></h3>
<form action="clg_sub.php" method="post">
<table align="center">
<tr>
	<th>Field</th>
	<td>
	<select name='data1'>
	<option>B.Tech</option>
	<option>B.Arch</option>
	</select>
	</td>
</tr>
<tr>
	<th>Session</th>
	<td>
	<select name='data2'>
	<?php $yr=date("Y");$j=date("y");$m=date('m');if($m<=7){$j--;$yr--;}$j=$j+4;for($i=$yr;$i>$yr-4;$i--){echo "<option>$i-$j</option>"; $j--;} ?>
	</select>
	</td>
</tr>
<tr>
	<th>Branch</th>
	<td>
	<select name='data3'>
	<option>CSE</option>
	<option>IT</option>
	<option>EE</option>
	<option>EEE</option>
	<option>ECE</option>
	<option>MECH</option>
	<option>CIVIL</option>
	<option>BT</option>
	<option>METALLURGY</option>
	<option>CHEMICAL</option>
	<option>AEI</option>
	<option>ALL BRANCH</option>
	</select>
	</td>
</tr>
<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><input type="submit" name='subm1' value="Submit" class='hvr-grow' style='height:40;width:150'>&nbsp;&nbsp;<input type="reset" value="Reset" class='hvr-grow' style='height:40;width:150'></td>
</tr>
</table>
</form>
</body>
</html>