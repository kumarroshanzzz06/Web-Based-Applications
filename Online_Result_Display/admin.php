<html>
<head>
<title>ADMIN LOGINED</title>
<link href="./css/style.css" rel="stylesheet"/>
<script language="javascript">
function fun_upload()
{
	var str;
	str="<form method='post' action='admin_upload.php' name='frm1' onsubmit='return fun_submit()'><table><tr><td>Select College Name</td><td><select name='clgname'><option>College Name</option><option>GIET</option><option>GITA</option><option>NIST</option><option>SILICON</option><option>GIMS</option><option>C.V.RAMAN</option></select></td></tr><tr><td>Select Field</td><td><select name='field'><option>B.Tech</option><option>B.Arch</option></select></td></tr><tr><td>Select Session</td><td><select name='sess'><?php $yr=date("Y");$j=date("y");$m=date('m');if($m<=7){$j--;$yr--;}$j=$j+4;for($i=$yr;$i>$yr-4;$i--){echo "<option>$i-$j</option>"; $j--;} ?></select></td></tr><tr><td>Select Semester</td><td><select name='sem'><option>1st</option><option>2nd</option><option>3rd</option><option>4th</option><option>5th</option><option>6th</option><option>7th</option><option>8th</option></select></td></tr><tr><td>Select Branch</td><td><select name='brnch'><option>CSE</option><option>IT</option><option>EE</option><option>EEE</option><option>ECE</option><option>MECH</option><option>CIVIL</option><option>BT</option><option>METALLURGY</option><option>CHEMICAL</option><option>AEI</option></select></td></tr><tr><td>Expected Published Date</td><td><input type='date' name='pdate' min='<?php echo date("Y-m-d") ?>' required></td></tr><tr><td>No. Of Subjects</td><td><select onkeyup='fun_sub()' onclick='fun_sub()' name='no_of_sub'> <option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option></select></td></tr></table><div id='div2'></div></form>";
	document.getElementById('div1').innerHTML=str;
}
function fun_sub()
{
	var str;
	str="<br>Name Of Subjects & Corresponding Credits (Including Labs) :- <br>";
	var num=document.frm1.no_of_sub.value;
	for(i=1;i<=num;i++)
	{
		str+="<table><tr><td>"+i+". </td><td><input type='text' placeholder='Subject Name' name='sub"+i+"' id='sub"+i+"' required></td><td><select name='crd"+i+"' id='crd"+i+"' class='credit'><option>Credit</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option></select></td></tr>";
	}
	str+="<tr><td colspan=2 align='center'><input type='submit' value='Submit' name='submit1' class='hvr-grow'  style='height:40;width:150'> <input type='button' value='Reset' onclick='fun_res()' class='hvr-grow'  style='height:40;width:150'></td></tr><tr><td colspan='3' rowspan='2'><div id='div3'></div></td></tr></table>";
	document.getElementById('div2').innerHTML=str;
}
function fun_update()
{
	var str;
	str="<form method='post' action='update_result.php' name='frm2' onsubmit='return fun_submit_2()'><table><tr><td>Select College Name</td><td><select name='clgname_2'><option>College Name</option><option>GIET</option><option>GITA</option><option>NIST</option><option>SILICON</option><option>GIMS</option><option>C.V RAMAN</option></select></td></tr><tr><td>Select Field</td><td><select name='field_2'><option>B.Tech</option><option>B.Arch</option></select></td></tr><tr><td>Select Session</td><td><select name='sess_2'><?php $yr=date("Y");$j=date("y");$m=date('m');if($m<=7){$j--;$yr--;}$j=$j+4;for($i=$yr;$i>$yr-4;$i--){echo "<option>$i-$j</option>"; $j--;} ?></select></td></tr><tr><td>Select Semester</td><td><select name='sem_2'><option>1st</option><option>2nd</option><option>3rd</option><option>4th</option><option>5th</option><option>6th</option><option>7th</option><option>8th</option></select></td></tr><tr><td>Select Branch</td><td><select name='brnch_2'><option>CSE</option><option>IT</option><option>EE</option><option>EEE</option><option>ECE</option><option>MECH</option><option>CIVIL</option><option>BT</option><option>METALLURGY</option><option>CHEMICAL</option><option>AEI</option></select></td></tr><tr><td>What To Do</td><td><select name='select_task' onclick='fun_wtd()' onkeyup='fun_wtd()'><option>Add Students</option><option>Update Results</option></select></td></tr><tr><td id='wtd1'></td><td id='wtd2'></td></tr><tr><td align='right'><input type='submit' value='Submit' name='mysub_2' style='height:40;width:150' class='hvr-grow'>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;<input type='button' value='Cancel' onclick='location=\"\"' style='height:40;width:150' class='hvr-grow'></td></tr><tr><td colspan='2'><div id='div_2'></div></td></tr></table></form>";
	document.getElementById('div1').innerHTML=str;
}
function fun_wtd()
{
	var val=document.frm2.select_task.value;
	if(val=="Update Results")
	{
		document.getElementById('wtd1').innerHTML="Enter , Seperated<br>Regs No.";
		document.getElementById('wtd2').innerHTML="<textarea style='width:350px;height:80px' placeholder='Enter , Seperated Registration Number' name='cregsno' required></textarea>";
	}
	else
	{
		document.getElementById('wtd1').innerHTML="";
		document.getElementById('wtd2').innerHTML="";
	}
}
function fun_submit()
{
	var x1=document.frm1.clgname;
	var x2=document.frm1.field;
	var x3=document.frm1.sess;
	var x4=document.frm1.sem;
	var x5=document.frm1.pdate;
	var x6=document.frm1.no_of_sub;
	if(x1.value=="College Name")
	{
		document.getElementById('div3').style.color="red";
		document.getElementById('div3').style.fontSize="40px";
		document.getElementById('div3').innerHTML="Please Select College Name";
		x1.focus();
		return false;
	}
	var j=1;
	var varname;
	var arr=[];
	for(i=1;i<=x6.value;i++)
	{
		varname='sub'+i;	
		arr[j++]=document.getElementById(varname).value;
		varname='crd'+i;
		arr[j++]=document.getElementById(varname).value;
	}
	for(i=2;i<=arr.length-1;i+=2)
	{
		if(arr[i]=="Credit")
		{
			document.getElementById('div3').style.color="red";
			document.getElementById('div3').style.fontSize="20px";
			document.getElementById('div3').innerHTML="Please Enter Credit For<br>Subject "+arr[i-1];
			name_cal="crd"+i/2;
			document.getElementById(name_cal).focus();
			return false;
		}
	}
	var arr1=[];
	arr1[0]=arr[1];
	var flag=0;
	for(i=3;i<=arr.length-1;i+=2)
	{
		for(k=0;k<i/2;k++)
		{
			if(arr[i]==arr1[k])
			{
				flag=1;
				break;
			}
		}
		if(flag==1)
			break;
		arr1.push(arr[i]);
	}
	if((arr.length-1)/2!=arr1.length)
	{
		document.getElementById('div3').style.color="red";
		document.getElementById('div3').style.fontSize="20px";
		document.getElementById('div3').innerHTML="Please Enter Unique<br>Subject Names";
		return false;
	}
}
function fun_res()
{
	document.frm1.reset();
	fun_sub();
}
function fun_submit_2()
{
	if(document.frm2.clgname_2.value=="College Name")
	{
		document.getElementById('div_2').style.color="red";
		document.getElementById('div_2').style.fontSize="40px";
		document.getElementById('div_2').innerHTML="Please Select College Name";
		return false;
	}
}
function fun_signout()
{
	document.cookie = "isin=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
	location='index.php';
}
</script>
</head>
<body bgcolor='#8195E1'>
<h1 align='center' style='font-size:60px;border:2px dotted red;border-radius:5px;background-color:white;cursor:pointer'>WELCOME ADMIN</h1>
<div align="right">
<button onclick="" class='hvr-grow'>Change Password</button> &nbsp;&nbsp;&nbsp;&nbsp;
<button onclick='fun_signout()' class='hvr-grow'>Sign Out</button>
</div>
<br>
<div align="right">
<button onclick="fun_upload()" class='hvr-grow'>Upload Results (College Wise)</button> &nbsp;&nbsp;&nbsp;&nbsp;
<button onclick="fun_update()" class='hvr-grow'>Update Results (College Wise)</button> &nbsp;&nbsp;&nbsp;&nbsp;
<button onclick="" class='hvr-grow'>Change Published Date</button>
</div>
<br><br>
<div id="div1" align="center">
</div>
</body>
</html>