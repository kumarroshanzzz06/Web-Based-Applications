<?php
if(isset($_POST['mysub_2']))
{
	$v1=$_POST['clgname_2'];
	$v2=$_POST['field_2'];
	$v3=$_POST['sess_2'];
	$v4=$_POST['sem_2'];
	$v5=$_POST['brnch_2'];
	if($_POST['select_task']=="Add Students")
	{
		$dat=base64_encode($v1.'_'.$v2.'_'.$v3.'_'.$v4.'_'.$v5);
		echo "<script>location='adding.php?d=$dat'</script>";
		exit(0);
	}
	$v6=mysql_real_escape_string(strtoupper(trim($_POST['cregsno']," ")));
	$qs=$v1;
	include "select_db.php";
	$table_name=$v2."_".$v3."_".$v4."_".$v5;
	$data=mysql_query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$v1' AND `TABLE_NAME`='$table_name'");
	$no_of_sub=mysql_num_rows($data)-4;
	setcookie("data",base64_encode($v1."_".$v2."_".$v3."_".$v4."_".$v5."_".$no_of_sub));
	if(mysql_num_rows($data)>=8)
	{
		$m=0;
		for($daba=0;$daba<=11;$daba++)
			$sub_name[$daba]="";
		while($rec=mysql_fetch_row($data))
		{
			if($m++>=4)
				$sub_name[$m-5]=strtoupper(substr($rec[0],0,strrpos($rec[0],".")));
		}
	}
	else
	{
		echo "<h3>SORRY! Result For Corresponding Detail Is Not Available. Please <a href='admin.php'>Click Here</a> To Go Back</h3>";
		exit(0);
	}
	echo "<html><head><title>Update Results</title><link href='./css/style.css' rel='stylesheet'/></head><body bgcolor='#8195E1'><h1 align='center' style='font-size:60px;border:2px dotted red;border-radius:5px;background-color:white;cursor:pointer'>Update Multiple Data's</h1><br><center><form action='' method='post'><table border=5 bordercolor='Green'><tr style='background-color:white;color:maroon'><th>S.No.</th><th>Regs No</th><th>Name</th><th>Branch</th><th>Publish Date</th>";
	for($sub=0;$sub<$no_of_sub;$sub++)
		echo "<th>$sub_name[$sub]</th>";
	echo "</tr>";
	$arr=explode(",",$v6);
	$cnt=count($arr);
	$r=1;
	for($j=0;$j<$cnt;$j++)
	{
		$data=mysql_query("select * from `$table_name` where regsno='$arr[$j]' ");
		if($rec=mysql_fetch_row($data))
		{
			echo "<tr style='background-color:Khaki;color:Maroon'>";
			echo "<td>",$j+1,".</td>";
			$arr1="name".$r++;
			echo "<td><input type='text' name='$arr1' value='$rec[0]' style='border:none;color:Maroon;background-color:Khaki' maxlength='10' class='naming2' readonly></td>";
			echo "<td>$rec[1]</td>";
			echo "<td>$rec[2]</td>";
			$arr1="name".$r++;
			echo "<td><input type='date' min='$rec[3]' name='$arr1' value='$rec[3]' style='width:220px' required></td>";
			$index=4;
			for($sub=0;$sub<$no_of_sub;$sub++)
			{
				$arr1="name".$r++;
				if($rec[$index]=="O")
					echo "<td align='center'><select name='$arr1' class='crdit1'><option selected>O</option><option>E</option><option>A</option><option>B</option><option>C</option><option>D</option><option>F</option></select></td>";
				else if($rec[$index]=="E")
					echo "<td align='center'><select name='$arr1' class='crdit1'><option>O</option><option selected>E</option><option>A</option><option>B</option><option>C</option><option>D</option><option>F</option></select></td>";
				else if($rec[$index]=="A")
					echo "<td align='center'><select name='$arr1' class='crdit1'><option>O</option><option>E</option><option selected>A</option><option>B</option><option>C</option><option>D</option><option>F</option></select></td>";
				else if($rec[$index]=="B")
					echo "<td align='center'><select name='$arr1' class='crdit1'><option>O</option><option>E</option><option>A</option><option selected>B</option><option>C</option><option>D</option><option>F</option></select></td>";
				else if($rec[$index]=="C")
					echo "<td align='center'><select name='$arr1' class='crdit1'><option>O</option><option>E</option><option>A</option><option>B</option><option selected>C</option><option>D</option><option>F</option></select></td>";
				else if($rec[$index]=="D")
					echo "<td align='center'><select name='$arr1' class='crdit1'><option>O</option><option>E</option><option>A</option><option>B</option><option>C</option><option selected>D</option><option>F</option></select></td>";
				else if($rec[$index]=="F")
					echo "<td align='center'><select name='$arr1' class='crdit1'><option>O</option><option>E</option><option>A</option><option>B</option><option>C</option><option>D</option><option selected>F</option></select></td>";
				$index++;
			}
			echo "</tr>";
		}
		else
		{
			echo "<script>alert('Registration Number $arr[$j] Is Invalid')</script>";
		}	
	}
	echo "</table>";
	echo "<br><br><center><input type='submit' value='Update All' name='subbulk' class='hvr-grow' style='height:40;width:150'>&nbsp;&nbsp;<input type='button' value='Cancel' onclick=\"location='admin.php'\" class='hvr-grow' style='height:40;width:150'></center></form></center>";
}
else if(isset($_POST['subbulk']))
{
	$all_detail=base64_decode($_COOKIE['data']);
	setcookie("data","",time()-3600);
	$all_detail=explode("_",$all_detail);
	$qs=$all_detail[0];
	include "select_db.php";
	$table_name=$all_detail[1]."_".$all_detail[2]."_".$all_detail[3]."_".$all_detail[4];
	$t=1;
	$temp="name".$t++;
	while(isset($_POST[$temp]))
	{
		$arr_upd[0]=$_POST[$temp];
		$temp="name".$t++;
		$arr_upd[1]=$_POST[$temp];
		$temp="name".$t++;
		for($i=0;$i<$all_detail[5];$i++)
		{
			$arr_upd[$i+2]=$_POST[$temp];
			$temp="name".$t++;
		}
		$fdata="update `$table_name` set pdate='$arr_upd[1]' ";
		$daba_data=mysql_query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$all_detail[0]' AND `TABLE_NAME`='$table_name'");
		$m=0;
		while($daba_rec=mysql_fetch_row($daba_data))
		{
			if($m++>=4)
			{
					$fdata.=",`".$daba_rec[0]."`='".$arr_upd[$m-3]."' ";
			}
		}
		$fdata.=" where regsno='$arr_upd[0]'";
		echo $fdata;
		if(!mysql_query($fdata))
		{
			echo "<script>alert('$arr_upd[0] Value Not Updated')</script>";
		}
	}
	echo "<script>location='admin.php'</script>";
}
else
{
	echo "<script>location='admin.php'</script>";
}
?>