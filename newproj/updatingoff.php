<?php
//error_reporting(0);
include_once "select_db.php";
$v1=mysql_real_escape_string(strtoupper(trim($_POST['val10']," ")));
$v2=$_POST['val9'];
$v6=explode("+",$_SERVER['QUERY_STRING']);
$data1="update stud_hostel_details set hostel_name='$v2' , hostel_roomno='$v1' where hostel_name='$v6[0]' and rollno='$v6[1]' ";
if(mysql_query($data1))
{
	ini_set("date.timezone","Asia/Calcutta");
	$fp=fopen("log/logfile2.log","a");
	$dt=date('Y-m-d h:i:sa');
	$dt=$v6[0]." Has Updated The Information Of ".$v6[1]." On ".$dt."<br>\n";
	fwrite($fp,$dt);
	echo "<script>alert('Information Updated Successfully')</script>";
	echo "<script>location='homeex1.php?$v6[0]'</script>";
}
else
{
	echo "<script>alert('Error In Updating Information')</script>";
	echo "<script>location='homeex1.php?$v6[0]'</script>";
}
?>