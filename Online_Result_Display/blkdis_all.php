<?php
if(isset($_GET['d']))
{
	$query=explode("_",base64_decode($_GET['d']));
	$qs=$query[0];
	include "select_db.php";
	$table_name=$query[1]."_".$query[2]."_".$query[3]."_";
	$data=mysql_query("show tables from `$qs` like '$table_name%'");
	$no_of_branch=mysql_num_rows($data);
	if($no_of_branch==0)
		echo "<script>alert('Error Occured While Fetching Result');location='college.php'</script>";
	//$data1=mysql_query("SELECT  `COLUMN_NAME` FROM  `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$qs' AND  `TABLE_NAME` =  '$table_name'");
	//$no_of_sub=mysql_num_rows($data1)-4;
}
else
	echo "<script>location='college.php'</script>";
?>

<html>
<head>
<title>Result Display</title>
<style type='text/css'>
*
{
	font-size:25px;
	font-family:Impact;
	color:#AA0B0B;
}
</style>
</head>
<body bgcolor='#8195E1'>
<center>
<h2 style='font-size:50px;border:2px dotted red;border-radius:5px;background-color:white;cursor:pointer'>Result Of <?php echo $query[1]," ",$query[3]," Semester ",$query[2]," Batch";?></h2>
<?php
while($rec_record=mysql_fetch_row($data))
{
	$branch1=strtoupper(substr($rec_record[0],strrpos($rec_record[0],"_")+1));
	echo "<center style='color:white;font-size:35px'>Result For $branch1 Branch</center>";
	$data1=mysql_query("SELECT  `COLUMN_NAME` FROM  `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$qs' AND  `TABLE_NAME` =  '$rec_record[0]'");
	$no_of_sub=mysql_num_rows($data1)-4;
	echo "<table border='1' bgcolor='white'><tr><th>S.No.</th><th>Name</th><th>Regs. No.</th><th>Branch</th><th>Published Date</th>";
	$j=0;
	$total=0;
	while($rec1=mysql_fetch_row($data1))
	{
		if($j>=4)
		{
			echo "<th>",strtoupper(substr($rec1[0],0,strrpos($rec1[0],"."))),"</th>";
			$crd[$j-4]=intval(substr($rec1[0],strrpos($rec1[0],".")+1));
			$total+=$crd[$j-4];
		}
		$j++;
	}
	echo "<th>Total<br>Credit</th><th>SGPA</th></tr>";
	$i=1;
	$data_record=mysql_query("select * from `$rec_record[0]`");
	while($rec=mysql_fetch_row($data_record))
	{
		echo "<tr align='center'><td>$i</td><td>$rec[1]</td><td>$rec[0]</td><td>$rec[2]</td><td>$rec[3]</td>";
		$sgpa=0;
		for($k=0;$k<$no_of_sub;$k++)
		{
			echo "<td>",$rec[$k+4],"</td>";
			switch($rec[$k+4])
			{
				case 'O':$sgpa+=$crd[$k]*10;break;
				case 'E':$sgpa+=$crd[$k]*9;break;
				case 'A':$sgpa+=$crd[$k]*8;break;
				case 'B':$sgpa+=$crd[$k]*7;break;
				case 'C':$sgpa+=$crd[$k]*6;break;
				case 'D':$sgpa+=$crd[$k]*5;break;
				default:$sgpa+=$crd[$k]*2;
			}
		}
		echo "<td>$total</td>";
		echo "<td>";
		printf("%.2f",$sgpa/$total);
		echo "</td></tr>";
		$i++;
	}
	echo "</table>";
}
?>
<hr><hr>
Please <a href='college.php' style='color:white'>Click Here</a> To Go Back
</center>
<br>
</body>
</html>