<?php
if(isset($_POST['subm1']))
{
	$field=$_POST['data1'];
	$sess=$_POST['data2'];
	$branch=$_POST['data3'];
	$clgname=$_SERVER['PHP_AUTH_USER'];
	$qs=$clgname;
	include "select_db.php";
	$pattern=$field."_".$sess."_";
	$no_of_sem=0;
	$index=0;
	$arr_branch=Array("1st","2nd","3rd","4th","5th","6th","7th","8th");
	if($branch=="ALL BRANCH")
	{
		while(isset($arr_branch[$index]))
		{
			$data=mysql_query("show tables from `$qs` like '$pattern$arr_branch[$index]\_%'");
			$index++;
			if(mysql_num_rows($data)>=1)
				$no_of_sem++;
		}
	}
	else
		$data=mysql_query("show tables from `$qs` like '$pattern%\_$branch'");
}
else
	echo "<script>location='college.php'</script>";
?>

<html>
<head>
<title>Collese Wise Result</title>
<style type="text/css">
*
{
	font-size:40px;
	font-family:Impact;
	color:#AA0B0B;
}
</style>
</head>
<body  bgcolor='#8195E1'>
<center>
<h2 style='font-size:60px;border:2px dotted red;border-radius:5px;background-color:white;cursor:pointer'>Click On The Link To View Result</h2>
<h3>
<?php
$i=1;
if($branch!="ALL BRANCH")
{
	while($rec=mysql_fetch_row($data))
	{
		$query=$clgname."_".$field."_".$sess."_".$i;
		if($i==1)
			$query=$query."st";
		else if($i==2)
			$query=$query."nd";
		else if($i==3)
			$query=$query."rd";
		else
			$query=$query."th";
		$query=base64_encode($query."_".$branch);
		echo "<a href='blkdis.php?d=$query'>$field Semester $i Result ($sess)</a><br>";
		$i++;
	}
}
else
{
	for($i=1;$i<=$no_of_sem;$i++)
	{
		$query=$clgname."_".$field."_".$sess."_".$i;
		if($i==1)
			$query=$query."st";
		else if($i==2)
			$query=$query."nd";
		else if($i==3)
			$query=$query."rd";
		else
			$query=$query."th";
		$query=base64_encode($query);
		echo "<a href='blkdis_all.php?d=$query'>$field Semester $i Result ($sess)</a><br>";
	}
}
?>
</h3>
Please <a href='college.php' style='color:white'>Click Here</a> To Go Back
</center>
</body>
</html>