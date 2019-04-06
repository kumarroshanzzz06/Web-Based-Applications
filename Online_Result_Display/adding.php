<?php
$query=$_GET['d'];
if(isset($query))
{
	$query=base64_decode($query);
	$qs_a=explode("_",$query);
	if(!isset($qs_a[6]))
		$qs_a[6]=date("Y-m-d");
	$qs=$qs_a[0];
	include "select_db.php";
	$table_name=$qs_a[1]."_".$qs_a[2]."_".$qs_a[3]."_".$qs_a[4];
	$data=mysql_query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$qs_a[0]' AND `TABLE_NAME`='$table_name'");
	$qs_a[5]=mysql_num_rows($data)-4;
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
		echo "<h3>Upload Result First To Update <a href='admin.php'>Click Here</a> To Upload";
		exit(0);
	}
	if(isset($_POST['sub_upd']))
	{
		$qs=$qs_a[0];
		include "select_db.php";
		$table_name=$qs_a[1]."_".$qs_a[2]."_".$qs_a[3]."_".$qs_a[4];
		$name="name1";
		$count=1;
		for($i=1;isset($_POST[$name]);$i++)
		{
			$regs="regs".$i;
			$regs=mysql_real_escape_string(strtoupper(trim($_POST[$regs]," ")));
			$name=mysql_real_escape_string(strtoupper(trim($_POST[$name]," ")));
			$sql="insert into `$table_name` values('$regs','$name','$qs_a[4]','$qs_a[6]'";
			for($j=1;$j<=$qs_a[5];$j++)
			{
				$grd="grd".$count++;
				$grd=$_POST[$grd];
				$sql=$sql.",'$grd'";
			}
			$sql=$sql.")";
			$name="name".($i+1);
			if(!mysql_query($sql))
			{
				echo "Error Occurred While Inserting Value For Registration Number :- <span style='color:white'>$regs</span><br>";
			}
		}
		echo "<h3>Please Update More Details (If Required) <a href='admin.php' style='color:white'>Click Here</a> To Go Back</h3>";
	}
}
else
{
	echo "<script>location='admin.php'</script>";
}
?>

<html>
<head>
<title>Adding Students</title>
<link href="./css/style.css" rel="stylesheet"/>
<script language="javascript">
function fun_upd()
{
	var val=document.frm1.no_of_stud.value;
	var no_of_sub='<?php echo $qs_a[5]; ?>';
	if(val==""||val<1||val>299)
	{
		document.getElementById('div1').style.color="white";
		document.getElementById('div1').innerHTML="Please Enter Proper Data (Value Must Be Between 1 AND 299)";
		document.frm1.no_of_stud.focus();
	}
	else
	{
		document.getElementById('div1').innerHTML="";
		var str="<h2 align='center' style='font-size:50px;border-radius:5px;color:white'>Enter Grades Scored By Students And Their Details</h2>";
		str+="<table border='2' align='center' cellpadding='5px' cellspacing='5px'><tr><th>S.No.</th><th>Name</th><th>Branch</th><th>Registration Number</th>";
		str+="<th><?php echo $sub_name[0]; ?></th>";
		str+="<th><?php echo $sub_name[1]; ?></th>";
		str+="<th><?php echo $sub_name[2]; ?></th>";
		str+="<th><?php echo $sub_name[3]; ?></th>";
		switch(no_of_sub)
		{
			case '5':
			str+="<th><?php echo $sub_name[4]; ?></th>";break;
			case '6':
			str+="<th><?php echo $sub_name[4]; ?></th>";
			str+="<th><?php echo $sub_name[5]; ?></th>";break;
			case '7':
			str+="<th><?php echo $sub_name[4]; ?></th>";
			str+="<th><?php echo $sub_name[5]; ?></th>";
			str+="<th><?php echo $sub_name[6]; ?></th>";break;
			case '8':
			str+="<th><?php echo $sub_name[4]; ?></th>";
			str+="<th><?php echo $sub_name[5]; ?></th>";
			str+="<th><?php echo $sub_name[6]; ?></th>";
			str+="<th><?php echo $sub_name[7]; ?></th>";break;
			case '9':
			str+="<th><?php echo $sub_name[4]; ?></th>";
			str+="<th><?php echo $sub_name[5]; ?></th>";
			str+="<th><?php echo $sub_name[6]; ?></th>";
			str+="<th><?php echo $sub_name[7]; ?></th>";
			str+="<th><?php echo $sub_name[8]; ?></th>";break;
			case '10':
			str+="<th><?php echo $sub_name[4]; ?></th>";
			str+="<th><?php echo $sub_name[5]; ?></th>";
			str+="<th><?php echo $sub_name[6]; ?></th>";
			str+="<th><?php echo $sub_name[7]; ?></th>";
			str+="<th><?php echo $sub_name[8]; ?></th>";
			str+="<th><?php echo $sub_name[9]; ?></th>";break;
			case '11':
			str+="<th><?php echo $sub_name[4]; ?></th>";
			str+="<th><?php echo $sub_name[5]; ?></th>";
			str+="<th><?php echo $sub_name[6]; ?></th>";
			str+="<th><?php echo $sub_name[7]; ?></th>";
			str+="<th><?php echo $sub_name[8]; ?></th>";
			str+="<th><?php echo $sub_name[9]; ?></th>";
			str+="<th><?php echo $sub_name[10]; ?></th>";break;
		}
		var cnt=1;
		for(i=1;i<=val;i++)
		{
			str+="<tr><td align='center'>"+i+"</td><td><input type='text' placeholder='Enter Name' name='name"+i+"' class='naming2' required></td><td>"+"<?php echo $qs_a[4]; ?>"+"</td><td><input type='text' placeholder='Enter Regs No.' maxlength='10' name='regs"+i+"' class='naming2' required></td>";
			for(j=1;j<=no_of_sub;j++)
			{
				str+="<td align='center'><select name='grd"+cnt+"' class='crdit1'><option>O</option><option>E</option><option>A</option><option>B</option><option>C</option><option>D</option><option>F</option></select></td>";
				cnt++;
			}
			str+="</tr>";
		}
		str+="</table><br><br><center><input type='submit' value='Upload Result' name='sub_upd' class='hvr-grow' style='height:40;width:200'> &nbsp;&nbsp;<input type='reset' value='Reset' class='hvr-grow' style='height:40;width:200'></center>";
		document.getElementById('div2').innerHTML=str;
	}
}
</script>
</head>
<body bgcolor='#8195E1'>
<h3 style='font-size:60px;border:2px dotted red;border-radius:5px;background-color:white;cursor:pointer'>Enter Number Of Students In A Particular College</h3>
<span style="position:absolute;right:2px"><a href='admin.php' style='color:white'>Home</a> &nbsp;<a href='logout.php' style='color:white'>LogOut</a></span></h3>
<form name="frm1" method="post" action="">
<input type="number" min="1" max="299" name="no_of_stud" class='naming2'>&nbsp;&nbsp;&nbsp;
<input type="button" onclick="fun_upd()" value="Upload" class='hvr-grow' style='height:40;width:200'>
<div id="div1"></div>
<div id="div2"></div>
</form>
</body>
</html>