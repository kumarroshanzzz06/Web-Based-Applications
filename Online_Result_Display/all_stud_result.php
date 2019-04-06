<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BPUT: Result Display</title>
<style type="text/css">
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
<?php
if(isset($_GET['d']))
{
	$qdata=explode("_",base64_decode($_GET['d']));
	//print_r($qdata);
	$qs=$qdata[0];
	include "select_db.php";
	$alldata=mysql_query("show tables from `$qdata[0]` like '$qdata[1]\_$qdata[2]%\_$qdata[3]'");
	if(mysql_num_rows($alldata)<1)
		echo "<script>location='student.php'</script>";
}
else
	echo "<script>location='student.php'</script>";
?>

<?php
$subsc=1;
$final_cgpa=0;
while($allrec=mysql_fetch_row($alldata))
{
	$data=mysql_query("select * from `$allrec[0]` where regsno='$qdata[4]'");
	if(mysql_num_rows($data)==1)
	{
		$rec=mysql_fetch_row($data);
		$data1=mysql_query("SELECT  `COLUMN_NAME` FROM  `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$qs' AND  `TABLE_NAME` =  '$allrec[0]'");
		$no_of_sub=mysql_num_rows($data1)-4;
	}
	else
	{
		echo "<h3>Invalid Registration Number. Please <a href='student.php'>Click Here</a> To Go Back</h3>";
		exit(0);
	}
	if($subsc==1)
	{
		echo "<u><center style='font-size:30px'>1st Semester Result</center></u>";
		echo "<table width='660' border='0' cellpadding='2' cellspacing='0'  align='center' class='dialogBase'><tr><td height='24' class='dialogHeader2'> Result for ",strtoupper($qdata[1])," 1st Semester Examination, $qdata[2]</td></tr>";
	}
	else if($subsc==2)
	{
		echo "<u><center style='font-size:30px'>2nd Semester Result</center></u>";
		echo "<table width='660' border='0' cellpadding='2' cellspacing='0'  align='center' class='dialogBase'><tr><td height='24' class='dialogHeader2'> Result for ",strtoupper($qdata[1])," 2nd Semester Examination, $qdata[2]</td></tr>";
	}
	else if($subsc==3)
	{
		echo "<u><center style='font-size:30px'>3rd Semester Result</center></u>";
		echo "<table width='660' border='0' cellpadding='2' cellspacing='0'  align='center' class='dialogBase'><tr><td height='24' class='dialogHeader2'> Result for ",strtoupper($qdata[1])," 3rd Semester Examination, $qdata[2]</td></tr>";
	}
	else
	{
		echo "<u><center style='font-size:30px'>$subsc","th Semester Result</center></u>";
		echo "<table width='660' border='0' cellpadding='2' cellspacing='0'  align='center' class='dialogBase'><tr><td height='24' class='dialogHeader2'> Result for ",strtoupper($qdata[1])," $subsc","th Semester Examination, $qdata[2]</td></tr>";
	}
	$subsc++;
	echo "<tr><td valign='top'><table width='100%' border='0' cellpadding='4' cellspacing='0' class='formTextWithBorder'><tr><td width='30%'>Student Regs No:</td><td width='70%' class='formHeading4'>$rec[0]</td></tr><tr><td>Student Name:</td><td><b>$rec[1]</b></td></tr><tr><td>College:</td><td><b>$qs</b></td></tr>";
	echo "<tr><td>Branch:</td><td><b>$rec[2]</b></td></tr><tr><td>Published on:</td><td><b>$rec[3]</b></td></tr></table></td></tr><tr><td><hr size='1' noshade='noshade'/></td></tr><tr><td height='30' valign='top'>";
	echo "<table width='100%' border='0' cellpadding='2' cellspacing='1' class='formTextWithBorder'><tr valign='top' class='formHeadingBkg'><td width='8%' height='15' align='center'>Sl.No.</td><td width='45%' >Subject</td><td width='8%' align='center'>Credit</td><td width='8%' align='center'>Grade</td><td width='15%' align='center'>Date</td></tr>";
	$j=0;
	$total=0;
	$sgpa=0;
	while($rec1=mysql_fetch_row($data1))
	{
		if($j>=4)
		{
			echo "<tr bgcolor='#EEEEEE'>";
			echo "<td width='8%' align='center' valign='top'>",$j-3,"</td>";
			echo "<td width='49%'  valign='top'>",strtoupper(substr($rec1[0],0,strrpos($rec1[0],"."))),"</td>";
			echo "<td width='8%' align='center' valign='top'>",intval(substr($rec1[0],strrpos($rec1[0],".")+1)),"</td>";
			echo "<td width='8%' align='center' valign='top'>",$rec[$j],"</td>";
			echo "<td width='11%' align='center' valign='top'>",$rec[3],"</td>";
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
	echo "<tr><td colspan='5'><hr></td></tr><tr bgcolor='#EEEEEE'><td colspan='3' align='right' valign='top'><b>Total Credits:</b> </td><td align='center' valign='top'>$total</td><td colspan='2' valign='top'><b>SGPA:</b>";
	$final_sgpa=round($sgpa/$total,2);
	$final_cgpa+=$final_sgpa;
	//echo $final_cgpa;
	printf($final_sgpa);
	echo "</td></tr></table></td></tr></table>";
}
?>
<br>
<center style='font-size:30px'>Your Final Cgpa Till This Semester Is <b style='color:blue;cursor:pointer;font-size:32px'><?php echo round($final_cgpa/mysql_num_rows($alldata),2); ?></b></center>
<br>
<center>Please <a href='student.php' style='color:white'>Click Here</a> To Go Back</center>
<br>
</body>
</html>