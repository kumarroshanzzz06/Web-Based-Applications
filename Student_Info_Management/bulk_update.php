<?php
session_start();
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
<html><head><title>Data Display</title></head><body style="background:url('p2.jpg') no-repeat fixed"><img src='logo.jpg' alt='Image Not Found' height='100' width='100' align='left'><span style='font-size:35px'><center>GIET , GUNUPUR</center></span><h1 align='center' style='color:maroon'>Update Multiple Data's</h1><br><center><form action='' method='post'><table border=5 bordercolor='Green'><tr style='background-color:lawngreen;color:maroon'><th>Roll No</th><th>Regs No</th><th>Name</th><th>Student PhNo</th><th>Student Alt PhNo</th><th>Stud Per. Email</th><th>Stud Ins. Email</th><th>10<sup>th</sup> %</th><th>10<sup>th</sup> Pass Yr</th><th>12<sup>th</sup> %</th><th>12<sup>th</sup> Pass Yr</th><th> Parents Name</th><th>Parents PhNo</th><th>Parents Alt PhNo</th><th>Parents Email</th><th>Date Of Birth</th><th>Branch</th><th>Session</th><th>Gender</th><th>Address</th><th>Rank</th><th>JEE/OJEE Roll</th></tr>
abc;
//$k=0;
for($j=0;$j<$cnt;$j++)
{
	$yr=substr($arr[$j],0,2);
	$yr="20".$yr."-".($yr+4);
	$data=mysql_query("select * from `$yr` where rollno='$arr[$j]' ");
	if($rec=mysql_fetch_row($data))
	{
		echo "<tr style='background-color:Khaki;color:Maroon'>";
		$arr1="name".$r++;
		echo "<td><input type='text' name='$arr1' value='$rec[0]' style='border:none;color:Maroon;background-color:Khaki' size='8' readonly></input></td>";
		$arr1="name".$r++;
		if($rec[1]=="" ||$rec[1]==$rec[0])
			echo "<td><input type='text' value='$rec[1]' name='$arr1' placeholder='Enter Regs No' size='8' maxlength='10'></td>";
		else
			echo "<td><input type='text' name='$arr1' value='$rec[1]' style='border:none;color:Maroon;background-color:Khaki' size='8' readonly></input></td>";
		$arr1="name".$r++;
		echo "<td>$rec[2]</td>
		<td><input name='$arr1' value='$rec[3]' size='10' ></td>";
		$arr1="name".$r++;
		echo "<td><input name='$arr1' value='$rec[4]' size='10' ></td>";
		$arr1="name".$r++;
		echo "<td><input name='$arr1' value='$rec[5]'  size='10' ></td>";
		$arr1="name".$r++;
		echo "<td><input name='$arr1' value='$rec[6]'  size='10'></td>";
		
		echo "<td>$rec[7]</td><td>$rec[8]</td>";
		echo "<td>$rec[9]</td><td>$rec[10]</td>";
		$arr1="name".$r++;
		echo "<td>$rec[11]</td>";
		echo"<td><input name='$arr1' value='$rec[12]' size='10' ></td>";
		$arr1="name".$r++;
		echo"<td><input name='$arr1' value='$rec[13]' size='10' ></td>";
		$arr1="name".$r++;
		echo "<td><input name='$arr1' value='$rec[14]'  size='10'></td><td>$rec[15]</td>";
		echo "<td>$rec[16]</td><td>$rec[17]</td>";
		$arr1="name".$r++;
		echo "<td>$rec[18]</td><td><textarea name='$arr1' size='10'>$rec[19]</textarea></td>";
		echo "<td>$rec[20]</td>";
		echo "<td>$rec[21]</td></tr>";
			//$k++;
	}
	else
	{
		echo "<script>alert('Roll Number $arr[$j] Is Invalid')</script>";
	}	
}
echo "</table>";
echo <<<htm1
<br><br>
<center><input type='submit' value='Update All' name='subbulk' style="color:white;background-color:black;cursor:pointer;height:6%;width:15%;font-size:30px"></center></form></center>
htm1;
}
if(isset($_POST['subbulk']))
{
include_once "select_db.php";
$t=1;
$temp="name".$t++;
//print_r($_POST);
while($_POST[$temp])
{
	$v1=$_POST[$temp];  //roll
	$temp="name".$t++;
	$v8=$_POST[$temp];  //reg
	$temp="name".$t++;
	$v2=$_POST[$temp];  //stu ph
	$temp="name".$t++;
	$v2_1=$_POST[$temp]; //stu alt ph
	$temp="name".$t++;
	$v3=$_POST[$temp];  //stu per mail
	$temp="name".$t++;
	$v4=$_POST[$temp];  //stu inst mail
	$temp="name".$t++;
	$v5=$_POST[$temp];  //parent no1
	$temp="name".$t++;
	$v6=$_POST[$temp];  //parent no2
	$temp="name".$t++;
	$v7=$_POST[$temp];  //paret mail
	$temp="name".$t++;
	$v7_1=$_POST[$temp];  //paret addr
	//echo "$v1  $v8 $v2 $v2_1 $v3 $v4 $v5 $v6 $v7 $v7_1";
	$yr=substr($v1,0,2);
	$yr="20".$yr."-".($yr+4);
	$fdata="update `$yr` set stud_phno='$v2' , stud_phno_op='$v2_1' , regsno='$v8' , stud_emailp='$v3' , stud_emaili='$v4' , pc_no='$v5', pc_no_op='$v6' , pemail='$v7' , address='$v7_1' where branch='$qs' and rollno='$v1' ";
	if(mysql_query($fdata))
	{
		ini_set("date.timezone","Asia/Calcutta");
		$fp=fopen("log/logfile2.log","a");
		$dt=date('Y-m-d h:i:sa');
		if($_SESSION['au']=="ADMIN")
				$dt="ADMIN Has Updated The Information Of ".$v1." On ".$dt."<br>\n";
		else if($_SESSION['au']=="BSH")
				$dt="BSH Has Updated The Information Of ".$v1." On ".$dt."<br>\n";
		else
				$dt=$qs." Has Updated The Information Of ".$v1." On ".$dt."<br>\n";
		fwrite($fp,$dt);
		echo "<script>alert('$v1 Data Successfully Updated')</script>";
	}
	else
	{
		echo "<script>alert('$v1 Value Not Updated')</script>";
	}
	$temp="name".$t++;
}
if($_SESSION['au']=="ADMIN")
	echo "<script>alert('Bulk Updation Completed');location='homeex2.php?$qs'</script>";
else if($_SESSION['au']=="BSH")
	echo "<script>alert('Bulk Updation Completed');location='homebsh.php?$qs'</script>";
else
	echo "<script>alert('Bulk Updation Completed');location='homeex1.php?$qs'</script>";
}
?>
