<?php
if(isset($_POST['mysub']))
{
	$v1=$_POST['clgname'];
	$v2=$_POST['field'];
	$v3=$_POST['sess'];
	$v4=$_POST['rgsno'];
	$v5=$_POST['brnch'];
	$qs=$v1;
	include "select_db.php";
	$table_name=$v2."_".$v3."_1st"."_".$v5;
	$data=mysql_query("select * from `$table_name` where regsno='$v4'");
	if($data)
	{
		if(mysql_num_rows($data)==1)
		{
			$detail=base64_encode($v1."_".$v2."_".$v3."_".$v4."_".$v5);
			echo "<script>location='new_stud_details.php?d=$detail'</script>";
		}
		else
		{
			echo "<h3><font color='red'>Invalid Registration Number</font></h3>";
		}	
	}
	else
	{
		echo "
		<script>
		alert('No Results Are Available For Your Details In Our Server. Please Register After Publishing Your 1st Result');
		location='index.php';
		</script>
		";
	}
}
?>
<html>
<head>
<title>New Student Registration</title>
<link href="./css/style.css" rel="stylesheet"/>
<script language="javascript">
function fun_submit()
{
	var x1=document.frm1.clgname;
	if(x1.value=="College Name")
	{
		document.getElementById('div1').style.color="red";
		document.getElementById('div1').style.fontSize="20px";
		document.getElementById('div1').innerHTML="Please Select College Name";
		x1.focus();
		return false;
	}
}
</script>
</head>
<body bgcolor='#8195E1'>
<h1 align='center' style='font-size:60px;border:2px dotted red;border-radius:5px;background-color:white;cursor:pointer'>New Student Registration</h1>
<form method='post' action='' name='frm1' onsubmit='return fun_submit()'>
<table align='center'>
<tr>
	<td>Select College Name</td>
	<td><select name='clgname'>
	<option>College Name</option>
	<option>GIET</option>
	<option>GITA</option>
	<option>NIST</option>
	<option>SILICON</option>
	<option>GIMS</option>
	<option>C.V.RAMAN</option>
	</select></td>
</tr>
<tr>
	<td>Select Field</td>
	<td><select name='field'>
	<option>B.Tech</option>
	<option>B.Arch</option>
	</select></td>
</tr>
<tr>
	<td>Select Session</td>
	<td><select name='sess'>
	<?php $yr=date("Y");$j=date("y");$m=date('m');if($m<=7){$j--;$yr--;}$j=$j+4;for($i=$yr;$i>$yr-4;$i--){echo "<option>$i-$j</option>"; $j--;} ?>
	</select></td>
</tr>
<tr>
	<td>Select Branch</td>
	<td><select name='brnch'>
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
	</select></td>
</tr>
<tr>
	<td>Registration Number</td>
	<td><input type='text' name='rgsno' maxlength='10' placeholder='Enter Registration Number' required></td>
</tr>
<tr>
	<td align='right'><input type='submit' value='Submit' name='mysub' class='hvr-grow' style='height:40;width:150'>&nbsp;&nbsp;</td>
	<td><input type='button' value='Cancel' onclick="location='index.php'" class='hvr-grow' style='height:40;width:150'></td>
</tr>
<tr>
	<td colspan='2'><div id='div1'></div></td>
</tr>
</table>
</form>
</body>
</html>