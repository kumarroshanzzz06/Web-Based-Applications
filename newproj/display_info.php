<?php
error_reporting(0);
$Y=date('Y');
$y=date('y');
$m=date('m');
if($m<=7)
{
	$y--;
	$Y--;
}
$y+=4;
session_start();
$qs=explode('+',$_SERVER['QUERY_STRING']);
if($_SESSION['au']!=$qs[0])
	echo "<script>location='index.php'</script>";
include_once "select_db.php";
echo "<html><head><title>Data Display</title></head><body bgcolor='RoyalBlue'><h1 align='center' style='color:maroon'>Student Detail Information</h1><br><center><table border=5 bordercolor='Green'><tr style='background-color:lawngreen;color:maroon'><th>Name</th><th>Roll No</th><th>Regs No</th><th>Gender</th><th>Stud Email</th><th>Student PhNo</th><th>Branch</th><th>Session</th><th>Citizenship</th><th>Parents Name</th><th>Parents PhNo</th><th>Contact Address</th><th>Hostel Name</th><th>Hostel Room Number</th></tr>";
if($qs[1]=="a")
	$data=mysql_query("select * from stud_hostel_details where hostel_name='$qs[0]' order by rollno");
else
{
if($qs[1]=="1")
	$qs[1]=$Y."-".$y;
else if($qs[1]=="2")
	$qs[1]=($Y-1)."-".($y-1);
else if($qs[1]=="3")
	$qs[1]=($Y-2)."-".($y-2);
else if($qs[1]=="4")
	$qs[1]=($Y-3)."-".($y-3);
$data=mysql_query("select * from stud_hostel_details where hostel_name='$qs[0]' and session='$qs[1]' order by rollno");
}

$k=0;
while($rec=mysql_fetch_row($data))
{
	if($k%2==0)
		echo "<tr style='background-color:Khaki;color:Maroon'>";
	else
		echo "<tr style='background-color:Moccasin;color:maroon'>";
	echo "<td>$rec[0]</td><td>$rec[1]</td><td>$rec[2]</td><td>$rec[3]</td><td>$rec[4]</td><td>$rec[5]</td><td>$rec[6]</td><td>$rec[7]</td><td>$rec[8]</td><td>$rec[9]</td><td>$rec[10]</td><td>$rec[11]</td><td>$rec[12]</td><td>$rec[13]</td></tr>";
$k++;
}
echo "</table></center>";
?>
<br><br>
<center><button onclick="fun1()" style="color:white;background-color:black;cursor:pointer;height:6%;width:15%;font-size:30px">Home</button></center>
</body>
<script>
function fun1()
{
var s="<?php $qs=explode('+',$_SERVER['QUERY_STRING']); echo $qs[0] ?>";
location="homeex1.php?"+s;
}
</script>
</html>