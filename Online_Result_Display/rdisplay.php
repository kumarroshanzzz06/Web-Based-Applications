<?php
if(isset($_GET['d']))
{
	$query=explode("_",base64_decode($_GET['d']));
	$qs=$query[0];
	include "select_db.php";
	$table_name=$query[2]."_".$query[3]."_".$query[4]."_".$query[5];
	$data=mysql_query("select * from `$table_name` where regsno='$query[1]'");
	if(mysql_num_rows($data)==1)
	{
		$rec=mysql_fetch_row($data);
		$data1=mysql_query("SELECT  `COLUMN_NAME` FROM  `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$qs' AND  `TABLE_NAME` =  '$table_name'");
		$no_of_sub=mysql_num_rows($data1)-4;
	}
	else
	{
		echo "<h3>Invalid Registration Number. Please <a href='student.php'>Click Here</a> To Go Back</h3>";
		exit(0);
	}
}
else
	echo "<script>location='student.php'</script>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BPUT: Result Display</title>
<style type="text/css" >
*
{
	font-size:20px;
	font-family:Impact;
	color:#AA0B0B;
}
.dialogHeader2 {
	font-family : Verdana, Arial, Helvetica, sans-serif;
	//font-size : 12px;
	//font-weight : bold;
	color : #ffffff;
	background-color : #0066CC;

} 
.dialogBase {
background-color : #f4f4f4; 
border : 1px solid #0066cc; 
} 
.formTextWithBorder {
	font-family : Verdana, Arial, Helvetica, sans-serif;
	//font-size : 12px;
	color : #000000;
	border: 1px solid #E4E4E4;

}
.formHeading4 {
font-family : Verdana, Arial, Helvetica, sans-serif; 
//font-size : 11px; 
color : #0033CC; 
//font-weight : bold;
}
.formHeading5 {
font-family : Verdana, Arial, Helvetica, sans-serif; 
//font-size : 16px; 
color : #333333; 
//font-weight : bold;
}
.formHeadingBkg {
font-family : Verdana, Arial, Helvetica, sans-serif; 
//font-size : 11px; 
color : #000000; 
background-color : #e4e4e4; 
//font-weight : bold; 
} 
.verdana10black {
font-family : Verdana, Arial, Helvetica, sans-serif; 
//font-size : 10px; 
color : #333333; 
} 
.verdana10red {
font-family : Verdana, Arial, Helvetica, sans-serif; 
//font-size : 10px; 
color : #990000; 
} 
body,td,th {
	color: #000000;
}
body {
	//background-color: #FFFFFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>
<body bgcolor='#8195E1'>
<table width="660" border="0" cellpadding="2" cellspacing="0"  align="center" class="dialogBase">
<tr> 
	<td height="24" class="dialogHeader2"> Result for <?php echo strtoupper($query[2]);?> <?php echo $query[4];?> Semester Examination, <?php echo $query[3];?></td>
</tr>
<tr> 
	<td valign="top">
		<table width="100%" border="0" cellpadding="4" cellspacing="0" class="formTextWithBorder">
		<tr>
			<td width="30%">Student Regs No:</td>
			<td width="70%" class="formHeading4"><?php echo $rec[0];?></td>
		</tr>
		<tr> 
		  <td>Student Name:</td>
		  <td><b><?php echo $rec[1];?></b></td>
		</tr>
		<tr> 
		  <td>College:</td>
		  <td><b><?php echo $query[0];?></b></td>
		</tr>
		<tr>
		  <td>Branch:</td>
		  <td><b><?php echo $rec[2];?></b></td>
		</tr>
		<tr>
		  <td>Published on:</td>
		  <td><b><?php echo $rec[3];?></b></td>
		</tr>
		</table>
	</td>
</tr>
<tr> 
	<td><hr size="1" noshade="noshade"/></td>
</tr>	  
<tr>
	<td height="30" valign="top">
	<table width="100%" border="0" cellpadding="2" cellspacing="1" class="formTextWithBorder">
	<tr valign="top" class="formHeadingBkg"> 
		<td width="8%" height="15" align="center">Sl.No.</td>
		<td width="49%" >Subject</td>
		<td width="8%" align="center">Credit</td>
		<td width="8%" align="center">Grade</td>
		<td width="11%" align="center">Date</td>
	</tr>
	<?php
	$j=0;
	$total=0;
	$sgpa=0;
	while($rec1=mysql_fetch_row($data1))
	{
		if($j>=4)
		{
			echo "<tr bgcolor='#EEEEEE'>";
			echo "<td width='8%' align='center' valign='top'>",$j-3,"</td>";
			echo "<td width='45%'  valign='top'>",strtoupper(substr($rec1[0],0,strrpos($rec1[0],"."))),"</td>";
			echo "<td width='8%' align='center' valign='top'>",intval(substr($rec1[0],strrpos($rec1[0],".")+1)),"</td>";
			echo "<td width='8%' align='center' valign='top'>",$rec[$j],"</td>";
			echo "<td width='15%' align='center' valign='top'>",$rec[3],"</td>";
			echo "</tr>";
			$crd[$j-4]=intval(substr($rec1[0],strrpos($rec1[0],".")+1));
			$total+=$crd[$j-4];
			switch($rec[$j])
			{
				case 'O':$sgpa+=$crd[$j-4]*10;break;
				case 'E':$sgpa+=$crd[$j-4]*9;break;
				case 'A':$sgpa+=$crd[$j-4]*8;break;
				case 'B':$sgpa+=$crd[$j-4]*7;break;
				case 'C':$sgpa+=$crd[$j-4]*6;break;
				case 'D':$sgpa+=$crd[$j-4]*5;break;
				default:$sgpa+=$crd[$j-4]*2;
			}
		}
		$j++;
	}
	?>
	<tr><td colspan='5'><hr></td></tr>
	<tr bgcolor="#EEEEEE" >
		<td colspan="3" align="right" valign="top"><b>Total Credits:</b> </td>
		<td align="center" valign="top"><?php echo $total;?></td>
		<td colspan="2" valign="top"><b>SGPA:</b> <?php echo round($sgpa/$total,2);?></td>
	</tr>
	</table>
	</td>
</tr>
</table>
<br><center>Please <a href='student.php' style='color:white'>Click Here</a> To Go Back</center>
</body>
</html>