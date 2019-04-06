<?php
session_start();
error_reporting(0);
$v1=mysql_real_escape_string(strtoupper(trim($_POST['val1']," ")));
$v2=$_POST['val2'];
$v3=trim($_POST['val3']," ");
$v4=mysql_real_escape_string(trim($_POST['val4']," "));
$v4_1=mysql_real_escape_string(trim($_POST['val4_1']," "));
$v5=mysql_real_escape_string(trim($_POST['val5']," "));
$v6=explode("+",$_SERVER['QUERY_STRING']);
$v7=mysql_real_escape_string(trim($_POST['val7']," "));
$v7_1=mysql_real_escape_string(trim($_POST['val7_1']," "));
$v8=mysql_real_escape_string(trim($_POST['val6']," "));
$v9=mysql_real_escape_string(trim($_POST['val8']," "));
$v10=mysql_real_escape_string(trim($_POST['valr']," "));
$qs=$v6[0];
include "select_db.php";
$yr=substr($v6[1],0,2);
$yr="20".$yr."-".($yr+4);
$temp1=0;
if($v2=="Select Branch" || $v2==$v6[0])
{
	$temp1=1;
	if($v10!="")
		$data1="update `$yr` set rollno='$v1' , regsno='$v10' , address='$v3' , stud_phno='$v4' , stud_phno_op='$v4_1' , stud_emailp='$v5' , stud_emaili='$v8' , pc_no='$v7' , pc_no_op='$v7_1' ,  pemail='$v9' where rollno='$v6[1]' ";
	else
		$data1="update `$yr` set rollno='$v1' , address='$v3' , stud_phno='$v4' , stud_phno_op='$v4_1' , stud_emailp='$v5' , stud_emaili='$v8' , pc_no='$v7' , pc_no_op='$v7_1' , pemail='$v9' where rollno='$v6[1]' ";
}
else
{
	$olddata=mysql_query("select * from `$yr` where rollno='$v6[1]' limit 1 ");
	$rec=mysql_fetch_row($olddata);
	mysql_close($link);
	$qs=mysql_real_escape_string(trim($v2));
	//echo "<br>$qs and $v10<br>";
	//print_r($rec);
	include "select_db.php";
		
	if($v10=="")
		$data1="insert into `$yr` values('$v1','$rec[1]','$rec[2]','$v4','$v4_1','$v5','$v8','$rec[7]',$rec[8],'$rec[9]',$rec[10],'$rec[11]','$v7','$v7_1','$v9','$rec[15]','$v2','$rec[17]','$rec[18]','$rec[19]','$rec[20]','$rec[21]') ";
	else
		$data1="insert into `$yr` values('$v1','$v10','$rec[2]','$v4','$v4_1','$v5','$v8','$rec[7]',$rec[8],'$rec[9]',$rec[10],'$rec[11]','$v7','$v7_1','$v9','$rec[15]','$v2','$rec[17]','$rec[18]','$rec[19]','$rec[20]','$rec[21]') ";
}
//echo "<br>$data1";
if(mysql_query($data1))
{
	mysql_close($link);
	$qs=mysql_real_escape_string(trim($v6[0]));
	include "select_db.php";
	//echo "$qs $v6[1]";
	if($temp1==0)
	{
	$record=mysql_query("delete from `$yr` where rollno='$v6[1]' ");
	}
	ini_set("date.timezone","Asia/Calcutta");
	$fp=fopen("log/logfile2.log","a");
	$dt=date('Y-m-d h:i:sa');
	if($_SESSION['au']=="ADMIN")
		$dt="ADMIN Has Updated The Information Of ".$v6[1]." On ".$dt."<br>\n";
	else if($_SESSION['au']=="BSH")
		$dt="BSH Has Updated The Information Of ".$v6[1]." On ".$dt."<br>\n";
	else
		$dt=$v6[0]." Has Updated The Information Of ".$v6[1]." On ".$dt."<br>\n";
	fwrite($fp,$dt);
	echo "<script>alert('Information Updated Successfully')</script>";
	if($_SESSION['au']=="ADMIN")
		echo "<script>location='homeex2.php?$v6[0]'</script>";
	else if($_SESSION['au']=="BSH")
		echo "<script>location='homebsh.php?$v6[0]'</script>";
	else
		echo "<script>location='homeex1.php?$v6[0]'</script>";
}
else
{
	echo "<script>alert('Error In Updating Information OR Batch May Not Exist')</script>";
	if($_SESSION['au']=="ADMIN")
		echo "<script>location='homeex2.php?$v6[0]'</script>";
	else if($_SESSION['au']=="BSH")
		echo "<script>location='homebsh.php?$v6[0]'</script>"; 
	else
		echo "<script>location='homeex1.php?$v6[0]'</script>";
		//echo "<br>NOT done<br>";
}
?>