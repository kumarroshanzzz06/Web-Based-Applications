<?php
session_start();
//error_reporting(0);
$Y=date('Y');
$y=date('y');
$m=date('m');
if($m<7)
{
	$y--;
	$Y--;
}
$y+=4;
$yr1=$Y."-".$y;
$yr2=($Y-1)."-".($y-1);
$yr3=($Y-2)."-".($y-2);
$yr4=($Y-3)."-".($y-3);
$qs1=explode('+',$_SERVER['QUERY_STRING']);
if(($_SESSION['au']!=$qs1[0])&&($_SESSION['au']!="ADMIN") && ($_SESSION['au']!="BSH"))
	echo "<script>location='login_form.php'</script>";
$qs=$qs1[0];
include_once "select_db.php";
echo "<html><head><title>Data Display</title></head><body style=\"background:url('p2.jpg') no-repeat fixed\">
<img src='logo.jpg' alt='Image Not Found' height='100' width='100' align='left'><span style='font-size:35px'><center>GIET , GUNUPUR</center></span>
<h1 align='center' style='color:maroon'>Student Detail Information</h1><br><center><table border=5 bordercolor='Green'><tr style='background-color:lawngreen;color:maroon'><th>Sl. No.</th><th>Roll No</th><th>Regs No</th><th>Name</th><th>Student PhNo</th><th>Student Alt PhNo</th><th>Stud Per. Email</th><th>Stud Ins. Email</th><th>10<sup>th</sup> %</th><th>10<sup>th</sup> Pass Yr</th><th>12<sup>th</sup> %</th><th>12<sup>th</sup> Pass Yr</th><th> Parents Name</th><th>Parents PhNo</th><th>Parents Alt PhNo</th><th>Parents Email</th><th>Date Of Birth</th><th>Branch</th><th>Session</th><th>Gender</th><th>Address</th><th>Rank</th><th>JEE/OJEE Roll</th></tr>";
$status=0;
if($_SESSION['au']=="ADMIN")
{
	$type_car=$qs1[2];//echo $type_car;
	$status=1;
}
else
{
	$type_car="all";
}
if($type_car=="all")
{
	if($status==1)
	{
		echo "BOTH CARRIER AND NON_CARRIER";
	}

	if($qs1[1]=="a")
	{
		$data=mysql_query("select * from `$yr1` UNION select * from `$yr2` UNION select * from `$yr3` UNION select * from `$yr4` order by rollno ");
	}
	else
	{
	if($qs1[1]=="1")
		$qs1[1]=$yr1;
	else if($qs1[1]=="2")
		$qs1[1]=$yr2;
	else if($qs1[1]=="3"){
		$qs1[1]=$yr3;}
	else if($qs1[1]=="4")
		$qs1[1]=$yr4;
	$data=mysql_query("select * from `$qs1[1]` order by rollno");
	}
}
else if($type_car=="car")
{
	echo "ONLY CARRIER";
	if($qs1[1]=="a")
	{
		$data=mysql_query("select * from `$yr1` UNION select * from `$yr2` UNION select * from `$yr3` UNION select * from `$yr4` WHERE tenth>='60' and plus2>='60' order by rollno ");
	}
	else
	{
	if($qs1[1]=="1")
		$qs1[1]=$yr1;
	else if($qs1[1]=="2")
		$qs1[1]=$yr2;
	else if($qs1[1]=="3"){
		$qs1[1]=$yr3;}
	else if($qs1[1]=="4")
		$qs1[1]=$yr4;
	$data=mysql_query("select * from `$qs1[1]` WHERE tenth>='60' and plus2>='60' order by rollno");
	}
}
else
{
	echo "ONLY NON CARRIER";
	if($qs1[1]=="a")
	{
		$data=mysql_query("select * from `$yr1` UNION select * from `$yr2` UNION select * from `$yr3` UNION select * from `$yr4` WHERE tenth<'60' or plus2<'60'order by rollno ");
	}
	else
	{
	if($qs1[1]=="1")
		$qs1[1]=$yr1;
	else if($qs1[1]=="2")
		$qs1[1]=$yr2;
	else if($qs1[1]=="3"){
		$qs1[1]=$yr3;}
	else if($qs1[1]=="4")
		$qs1[1]=$yr4;
	$data=mysql_query("select * from `$qs1[1]` WHERE tenth<'60' or plus2<'60'order by rollno");
	}
}
$k=0;
if($data=="")
{
if($qs1[1]=="a")
	echo "<script>alert('Some Table Doesn\'t Exists')</script>";
else
	echo "<script>alert('$qs1[1] Table Doesn\'t Exists')</script>";
goto x;
}
$rowno=1;
while($rec=mysql_fetch_row($data))
{
	if($k%2==0)
		echo "<tr style='background-color:Khaki;color:Maroon'>";
	else
		echo "<tr style='background-color:Moccasin;color:maroon'>";
	echo "<td>$rowno</td><td>$rec[0]</td><td>$rec[1]</td><td>$rec[2]</td><td>$rec[3]</td><td>$rec[4]</td><td>$rec[5]</td><td>$rec[6]</td><td>$rec[7]</td><td>$rec[8]</td><td>$rec[9]</td><td>$rec[10]</td><td>$rec[11]</td><td>$rec[12]</td><td>$rec[13]</td><td>$rec[14]</td><td>$rec[15]</td><td>$rec[16]</td><td>$rec[17]</td><td>$rec[18]</td><td>$rec[19]</td><td>$rec[20]</td><td>$rec[21]</td></tr>";
	$rowno++;
$k++;
}
x:
echo "</table></center>";
?>
<br><br>
<center><button onclick="fun1()" style="color:white;background-color:black;cursor:pointer;height:6%;width:15%;font-size:30px">Back</button></center>
</body>
<script>
function fun1()
{
var s="<?php
$qs=explode('+',$_SERVER['QUERY_STRING']);
echo $qs[0];
?>";
var s1="<?php
if($_SESSION['au']=="ADMIN")
	echo $_SESSION['au'];
else if ($_SESSION['au']=="BSH")
	echo $_SESSION['au'];
?>";
if(s1=="ADMIN")
	location="homeex2.php?"+s;
else if(s1=="BSH")
	location="homebsh.php?"+s;
else
	location="homeex1.php?"+s;
}
</script>
</html>