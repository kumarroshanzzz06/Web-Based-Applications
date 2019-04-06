<?php
//error_reporting(0);
include_once "select_db.php";
$v1=mysql_real_escape_string(strtoupper(trim($_POST['val1']," ")));
$v2=$_POST['val2'];
$v3=trim($_POST['val3']," ");
$v4=mysql_real_escape_string(trim($_POST['val4']," "));
$v5=mysql_real_escape_string(trim($_POST['val5']," "));
$v6=$_SERVER['QUERY_STRING'];
$v7=mysql_real_escape_string(trim($_POST['val7']," "));
$v8=mysql_real_escape_string(trim($_POST['val6']," "));
$v9=mysql_real_escape_string(trim($_POST['val8']," "));
if(mysql_query("update stud_info_form set rollno='$v1' , branch='$v2' , address='$v3' , stud_phno='$v4' , stud_emailp='$v5' , stud_emaili='$v8' , pc_no='$v7' , pemail='$v9' where rollno='$v6' "))
{
	ini_set("date.timezone","Asia/Calcutta");
	$fp=fopen("log/logfile2.log","a");
	$dt=date('Y-m-d h:i:sa');
	$dt="ADMIN Has Updated The Information Of ".$v6." On ".$dt."<br>\n";
	fwrite($fp,$dt);
	echo "<script>alert('Information Updated Successfully')</script>";
	echo "<script>location='admin1.php?ADMIN'</script>";
}
else
{
	echo "<script>alert('Error In Updating Information')</script>";
	echo "<script>location='admin1.php?ADMIN'</script>";
}
?>