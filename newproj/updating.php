<?php
//error_reporting(0);
include_once "select_db.php";
$v1=mysql_real_escape_string(strtoupper(trim($_POST['val1']," ")));
$v2=mysql_real_escape_string(trim($_POST['val2']," "));
$v3=mysql_real_escape_string(trim($_POST['val3']," "));
$v4=$_POST['val4'];
$v5=mysql_real_escape_string(trim($_POST['val5']," "));
$v6=explode("+",$_SERVER['QUERY_STRING']);
$v7=mysql_real_escape_string(trim($_POST['val6']," "));
$v8=$_POST['val7'];
$v9=mysql_real_escape_string(strtoupper(trim($_POST['val8']," ")));
if(($v4=="Select Branch")&&($v8=="Select Hostel"))
	$data1="update stud_hostel_details set rollno='$v1' , stud_email='$v2' , stud_phno='$v3' , parents_phno='$v5' , contact_address='$v7' , hostel_roomno='$v9' where hostel_name='$v6[0]' and rollno='$v6[1]' ";
else if($v8=="Select Hostel")
	$data1="update stud_hostel_details set rollno='$v1' , stud_email='$v2' , stud_phno='$v3' , branch='$v4' , parents_phno='$v5' , contact_address='$v7' , hostel_roomno='$v9' where hostel_name='$v6[0]' and rollno='$v6[1]' ";
else if($v4=="Select Branch")
	$data1="update stud_hostel_details set rollno='$v1' , stud_email='$v2' , stud_phno='$v3' , parents_phno='$v5' , contact_address='$v7' , hostel_name='$v8' , hostel_roomno='$v9' where hostel_name='$v6[0]' and rollno='$v6[1]' ";
else
	$data1="update stud_hostel_details set rollno='$v1' , stud_email='$v2' , stud_phno='$v3' , branch='$v4' , parents_phno='$v5' , contact_address='$v7' , hostel_name='$v8' , hostel_roomno='$v9' where hostel_name='$v6[0]' and rollno='$v6[1]' ";
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