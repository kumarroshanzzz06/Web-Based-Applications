<?php
error_reporting(0);
$qs=$_SERVER['QUERY_STRING'];
$r=1;
if(isset($_POST['upd1']))
{
$bulkdata=mysql_real_escape_string(strtoupper(trim($_POST['blkdata'])));
$arr=explode(",",$bulkdata);
$cnt=count($arr);
include_once "select_db.php";
echo <<<abc
<html><head><title>Data Display</title></head><body bgcolor='lemonchiffon' style='font-family:Copperplate Gothic'><h1 align='center' style='color:maroon'>Update Multiple Data's</h1><br><center><form action='' method='post'><table border=5 bordercolor='indianred'><tr style='background-color:darkseagreen;color:maroon'><th>Name</th><th>Roll No</th><th>Regs No</th><th>Gender</th><th>Stud Email</th><th>Student PhNo</th><th>Branch</th><th>Session</th><th>Citizenship</th><th>Parents Name</th><th>Parents PhNo</th><th>Contact Address</th><th>Hostel Name</th><th>Hostel Room Number</th></tr>
abc;
for($j=0;$j<$cnt;$j++)
{
	if($qs=="ADMIN")
		$data=mysql_query("select * from stud_hostel_details where rollno='$arr[$j]' ");
	else
		$data=mysql_query("select * from stud_hostel_details where hostel_name='$qs' and rollno='$arr[$j]' ");
	if($rec=mysql_fetch_row($data))
	{
		echo "<tr style='background-color:Khaki;color:Maroon'>";
		echo "<td>$rec[0]</td>";
		$arr1="name".$r++;
		echo "<td><input type='text' name='$arr1' value='$rec[1]' style='border:none;color:Maroon;background-color:Khaki' size='8' readonly></td>";
		echo "<td>$rec[2]</td><td>$rec[3]</td>";
		echo "<td>$rec[4]</td>";
		echo "<td>$rec[5]</td>";
		echo "<td>$rec[6]</td><td>$rec[7]</td>";
		echo "<td>$rec[8]</td><td>$rec[9]</td>";
		echo "<td>$rec[10]</td>";
		echo "<td>$rec[11]</td>";
		$arr1="name".$r++;
		echo "<td><select name='$arr1' style='cursor:pointer'><option selected>$rec[12]</option><option>NC1</option><option>NC2</option><option>NC3</option><option>NC4</option><option>NC5</option><option>NC6</option><option>NC7</option><option>NC8</option><option>NC9</option><option>NC10</option><option>NC11</option><option>NC12</option><option>SS</option><option>MM-1</option><option>MM-2</option><option>GAYATRI-1</option><option>GAYATRI-2</option><option>KRUPASINDHU</option></select></td>";
		$arr1="name".$r++;
		echo "<td><input name='$arr1' value='$rec[13]' type='text' size='5'></td></tr>";
	}
	else
	{
		echo "<script>alert('Roll Number $arr[$j] Is Invalid')</script>";
	}	
}
echo "</table>";
echo <<<htm1
<br><br>
<center><input type='submit' value='Update All' name='subbulk' style="color:white;background-color:indianred;cursor:pointer;height:6%;width:15%;font-size:30px"></center></form></center>
htm1;
}
if(isset($_POST['subbulk']))
{
include_once "select_db.php";
$t=1;
$temp="name".$t++;
while($_POST[$temp])
{
	$v1=$_POST[$temp];
	$temp="name".$t++;
	$v2=$_POST[$temp];
	$temp="name".$t++;
	$v3=$_POST[$temp];
	$temp="name".$t++;
	if($qs=="ADMIN")
		$fdata="update stud_hostel_details set hostel_name='$v2' , hostel_roomno='$v3' where rollno='$v1' ";
	else
		$fdata="update stud_hostel_details set hostel_name='$v2' , hostel_roomno='$v3' where hostel_name='$qs' and rollno='$v1' ";
	if(mysql_query($fdata))
	{
		ini_set("date.timezone","Asia/Calcutta");
		$fp=fopen("log/logfile2.log","a");
		$dt=date('Y-m-d h:i:sa');
		$dt=$qs." Has Updated The Information Of ".$v1." On ".$dt."<br>\n";
		fwrite($fp,$dt);
	}
	else
	{
		echo "<script>alert('$v1 Value Not Updated')</script>";
	}
	$temp="name".$t++;
}
if($qs=="ADMIN")
	echo "<script>alert('Bulk Updation Completed');location='admin1.php?$qs'</script>";
else
	echo "<script>alert('Bulk Updation Completed');location='homeex1.php?$qs'</script>";
}
?>
