<?php
$q_data=base64_decode($_GET['q']);	//b.tech_2013-14_2nd==Yi50ZWNoXzIwMTMtMTRfMm5k
$exp=explode("_",$q_data);
$field=$exp[0];
$sess=$exp[1];
$sem=$exp[2];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BPUT: Result Search</title>
<style type="text/css" >
.dialogHeader2 {
	font-family : Colonna MT;
	font-size : 20px;
	font-weight : bold;
	color : #ffffff;
	background-color : #0066CC;

} 
.dialogBase {
background-color : #f4f4f4; 
border : 1px solid #0066cc; 
} 
.formTextWithBorder {
	font-family : Verdana, Arial, Helvetica, sans-serif;
	font-size : 12px;
	color : #000000;
	border: 1px solid #E4E4E4;

}
.formHeading4 {
font-family : Verdana, Arial, Helvetica, sans-serif; 
font-size : 11px; 
color : #0033CC; 
font-weight : bold;
}
.formHeading5 {
font-family : algarian; 
font-size : 16px; 
color : #333333; 
font-weight : bold;
}
.formHeadingBkg {
font-family : Verdana, Arial, Helvetica, sans-serif; 
font-size : 11px; 
color : #000000; 
background-color : #e4e4e4; 
font-weight : bold; 
} 
.verdana10black {
font-family : Verdana, Arial, Helvetica, sans-serif; 
font-size : 10px; 
color : #333333; 
} 
.verdana10red {
font-family : Verdana, Arial, Helvetica, sans-serif; 
font-size : 10px; 
color : #990000; 
} 
a:link {
color : #000000; 
text-decoration : underline; 
} 
a:visited {
color : #000000; 
text-decoration : underline; 
} 
a:active {
color : #000000; 
text-decoration : underline; 
} 
a:hover {
color : #000000; 
text-decoration : none; 
} 

body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
select
{
cursor:pointer;
}
</style>
<script type="text/javascript">
function chkFields(frm)
{
	var illegalChars = /[^A-Za-z\d]/;
	if(frm.clgname.value=="Select College Name")
	{
		document.getElementById("mysp1").style.color="red";
		document.getElementById("mysp1").style.fontSize="20px";
		document.getElementById("mysp1").innerHTML="Please Select College Name";
		frm.clgname.focus();
		return false;
	}
	else if(frm.txtRegdno.value == "")
	{
		document.getElementById("mysp1").style.color="red";
		document.getElementById("mysp1").style.fontSize="20px";
		document.getElementById("mysp1").innerHTML="Please Enter Registration Number";
		frm.txtRegdno.focus();
		return false;
	}
	else if(frm.txtRegdno.value.length < 6)
	{
		document.getElementById("mysp1").style.color="red";
		document.getElementById("mysp1").style.fontSize="20px";
		document.getElementById("mysp1").innerHTML="Please Enter Valid Registration Number";
		frm.txtRegdno.focus();
		return false;
	}
	else if(illegalChars.test(frm.txtRegdno.value))
	{
		document.getElementById("mysp1").style.color="red";
		document.getElementById("mysp1").style.fontSize="20px";
		document.getElementById("mysp1").innerHTML="Please Enter Valid Registration Number";
		frm.txtRegdno.focus();
		return false;
	}
	frm.txtRegdno.value = frm.txtRegdno.value.toUpperCase();
	window.location.href = "./" + frm.txtRegdno.value + ".html";
	return false;
}
</script>
</head>
<body >
<table width="620" border="0" cellpadding="2" cellspacing="0" class="dialogBase" align="center">
<tr>
    <td height="50" align="center" class="formHeading5"><b>BIJU PATNAIK UNIVERSITY OF TECHNOLOGY, ORISSA </b></td>
</tr>
<tr> 
    <td height="24" class="dialogHeader2"><center>Result for <?php echo strtoupper($field); ?> <?php echo $sem; ?> Semester Examination, <?php echo $sess; ?></center></td>
</tr>
<tr> 
    <td valign="top">
	<table width="100%" border="0" cellpadding="4" cellspacing="0" class="formTextWithBorder" >      
	<tr> 
		<td height="70" align="center"> 
			<form action="" method="post" name="frmResults" id="frmResults" onsubmit="return chkFields(this);">
			College: <select name="clgname">
			<option>Select College Name</option>
			<option>GIET</option>
			<option>GITA</option>
			<option>SILICON</option>
			<option>BEC</option>
			<option>C.V Raman</option>
			<option>GIST</option>
			<option>Krupajal</option>
			<option>MIST</option>
			<option>NIST</option>
			</select>
				Registration Number:
				<input name="txtRegdno" type="text" class="inputtxt" id="txtRegdno" size="20" maxlength="10" /> 
				&nbsp; <input name="cmdSearch" type="submit" class="mybutton" id="cmdSearch" value="Show" style="cursor:pointer" />
			</form>
		</td>
	</tr> 
	<tr>
	<td colspan="2"><center><span id="mysp1"></span></center></td>
	</tr>
	</table>
	</td>
</tr>
<tr>
    <td height="20" valign="top" class="verdana10red"><b>The results for a Registration Number cannot be found because of any of the following reasons </b></td>
</tr>
<tr>
    <td valign="top" class="verdana10black">
    <ul style="font-weight:bold;">
    <li>You may have entered a Wrong Registration Number.</li>
    <li>Your Registration Number does not belong to B.TECH.  </li>
    <li>Your College may not have sent the Internal/Laboratory/Practical 
    marks to the University. Please contact your college in 
    this case. </li>
    <li>Your Result may be Blocked due some reasons.</li>
    <li>Your College may not have an affiliation with BIJU 
    PATNAIK UNIVERSITY OF TECHNOLOGY, ROURKELA.  </li>
    </ul></td>
</tr>
<tr>
    <td height="50" valign="bottom" class="verdana10black"><b class="verdana10red">Disclaimer:</b><br />
    The results published are provisional and subject to change after   post publication scruitny by BPUT. Neither BPUT nor HiTS is responsible for any   inadvertent error that may have crept into the results being displayed. </td>
</tr>
<tr>
    <td height="50" align="center" valign="bottom" class="verdana10black">
	<hr size="1" noshade="noshade" />
	Copyright &copy; 2010. All rights reserved with <b>BPUT</b>, Rourkela, Orissa. &nbsp;<br />
	Website developed by <a href="http://www.hitsindia.com" target="_blank" >Hi 
	Technology &amp; Services</a>. Use of this site is subject to Terms 
	of Service</td>
</tr>
</table>
</body>
</html>