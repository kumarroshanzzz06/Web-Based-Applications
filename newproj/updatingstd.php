<?php
//error_reporting(0);
include_once "select_db.php";
$v1=mysql_real_escape_string(trim($_POST['val1']," "));
$v2=mysql_real_escape_string(trim($_POST['val2']," "));
$v3=mysql_real_escape_string(trim($_POST['val3']," "));
$v4=mysql_real_escape_string(trim($_POST['val4']," "));
$v5=mysql_real_escape_string(trim($_POST['val5']," "));
$v7=mysql_real_escape_string(trim($_POST['val6']," "));
$v6=$_SERVER['QUERY_STRING'];
$data1="update stud_hostel_details set name='$v1' , stud_phno='$v2' , stud_email='$v3' , parents_name='$v4' , parents_phno='$v5' , contact_address='$v7' where rollno='$v6' ";
if(mysql_query($data1))
{
	ini_set("date.timezone","Asia/Calcutta");
	$fp=fopen("log/logfile2.log","a");
	$dt=date('Y-m-d h:i:sa');
	$dt=$v6." Has Updated His Information On ".$dt."<br>\n";
	fwrite($fp,$dt);
	echo "<script>alert('Information Updated Successfully')</script>";
	echo "<script>location='studenthome.php?$v6'</script>";
}
else
{
	echo "<script>alert('Error In Updating Information')</script>";
	echo "<script>location='studenthome.php?$v6'</script>";
}
?>