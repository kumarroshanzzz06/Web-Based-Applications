<?php
if(isset($_POST['submit1']))
{
	$v1=$_POST['clgname'];
	$v2=$_POST['field'];
	$v3=$_POST['sess'];
	$v4=$_POST['sem'];
	$v5=$_POST['pdate'];
	$v6=$_POST['no_of_sub'];
	$v7=$_POST['brnch'];
	for($i=1;$i<=$v6;$i++)
	{
		$vname="sub".$i;
		$arr[$i]=mysql_real_escape_string(trim($_POST[$vname]," "));
		$vname="crd".$i;
		$arr1[$i]=mysql_real_escape_string(trim($_POST[$vname]," "));
	}
	//echo $v1,$v2,$v3,$v4,$v5,$v6;
	//print_r($arr);
	//print_r($arr1);
	$qs=$v1;
	$table_name=$v2."_".$v3."_".$v4."_".$v7;
	include_once "select_db.php";
	$sql="CREATE TABLE `$table_name` (`regsno` varchar(15) NOT NULL,`name` varchar(50) NOT NULL,`branch` varchar(30) NOT NULL,`pdate` varchar(20) DEFAULT NULL,";
	for($i=1;$i<=$v6;$i++)
	{
		$sql=$sql."`".$arr[$i].".".$arr1[$i]."` varchar(1) NOT NULL,";
	}
	$sql=$sql."PRIMARY KEY (`regsno`))";
	if(mysql_query($sql))
	{
		$detail=$v1."_".$table_name."_".$v6."_".$v5;
		$detail=base64_encode($detail);
		echo "<script>location='adding.php?d=$detail'</script>";
	}
	else
	{
		echo "<script>alert('Result for $v1 college $v2 field $v3 batch $v4 semester is already available. Please update their result')</script>";
		echo "<script>location='admin.php'</script>";
	}
}
else
{
	echo "<script>location='admin.php'</script>";
}
?>