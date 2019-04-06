<html>
<head>
<title>Student Info</title>
<head>
<style type="text/css">
body
{
background:lightblue url("background.jpg");
	background-size:100%;
     background-attachment:fixed;
}

.form-style-1 {
   /* margin:10px auto ;
    max-width: 600px;*/
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    background-color: white;
/*  border: 25px solid  ;
    border-right-color: #ff0000;
    border-left-color: green;*/
  }
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text],
.form-style-1 input[type=email],
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.50s ease-in-out;
    -moz-transition: all 0.50s ease-in-out;
    -ms-transition: all 0.50s ease-in-out;
    -o-transition: all 0.50s ease-in-out;
    outline: none; 
}
.form-style-1 input[type=text]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 select:focus{
   /*-moz-box-shadow: 0 0 8px green;
    -webkit-box-shadow: 0 0 8px green;
       box-shadow: 0 0 8px green;
     -webkit-background:pink;
       -moz-background:pink;
       background:pink;*/
        border: 2px solid green;
     border-radius:5%;
}
.form-style-1 .field-divided{
    width: 60%;
}
.form-style-1 .field-divided1{
    width: 15%;
}
.form-style-1 .field-divided2{
    width: 28%;
}
.form-style-1 .field-divided3{
    width: 29.5%;
}
.form-style-1 .field-divided4{
    width: 60%;
    height:70px;
}
.form-style-1 input[type=submit]{
    background: purple;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
    margin:0 0 0 50;
   width:200;
   position:relative;
}
.form-style-1 input[type=submit]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.reset1
{
background: purple;
    padding: 8px 15px 8px 15px;
    border:none;
    color: #fff;
    margin:0 0 0 50;
   width:200;
   position:relative;
}
.reset1:hover
{
background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}

.reset2
{
background: purple;
    padding: 8px 15px 8px 15px;
    border:none;
    color: #fff;
    margin:0 0 0 250;
   width:200;
   position:relative;
}
.reset2:hover
{
background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}

.form-style-1  .required{
    color:red;
}
.required1{
    color:blue;
    text-decoration: none;
    position:absolute;
    margin:-10;
     padding: 0 0 0 0;
    top:5%;
     background:transparent;
    box-shadow: 10px 10px 5px #888888;
     width:100%;
    z-index:1001;
    text-align:center;
    text-shadow: 0 0 3px #FF0000, 0 0 5px #FFA500;
}
.fixit{
         
    width: 42%;
    top:18%;
     left:25%;
    position:absolute;
    border-color:transparent;
    box-shadow: 10px 10px 5px #888888;
  /* border-right-color: #ff0000;
    border-left-color: green;
   border-top-color: black;
  border-bottom-color: black;*/
}

</style>

<script language="javascript">
function validateForm() {
   var x5= document.forms["myForm"]["field5"].value;
   var x7= document.forms["myForm"]["field6"].value;
 if (x5=="Branch") {
        alert("Branch must be filled out");
        return false;
    }
    if (x7=="Session") {
        alert("Sessssion must be filled out");
        return false;
    }  
}

function change()
{
document.getElementById("f11").readOnly=false;

document.getElementById("edit").style.background="white";
}
</script>

</head>
<body>

<?php
//error_reporting(0);
session_start();
$qs=$_SERVER['QUERY_STRING'];
if($_SESSION['au']!=$qs)
	echo "<script>location='index.php'</script>";
if(isset($_POST['sub2']))
{
include_once "select_db.php";
$v1=mysql_real_escape_string(strtoupper(trim($_POST['name1']," ")));
$v2=mysql_real_escape_string(strtoupper(trim($_POST['name2']," ")));
//$v1="12CSE117";
//$v2="1201210403";
if($v1==null || $v1=="")
{
	if($qs=="ADMIN")
		$data=mysql_query("select * from stud_hostel_details where regsno='$v2'");
	else
		$data=mysql_query("select * from stud_hostel_details where regsno='$v2' and hostel_name='$qs'");
}
else if($v2==null || $v2=="")
{
	if($qs=="ADMIN")
		$data=mysql_query("select * from stud_hostel_details where rollno='$v1'");
	else
		$data=mysql_query("select * from stud_hostel_details where rollno='$v1' and hostel_name='$qs'");
}
else
{
	if($qs=="ADMIN")
		$data=mysql_query("select * from stud_hostel_details where rollno='$v1' and regsno='$v2'");
	else
		$data=mysql_query("select * from stud_hostel_details where rollno='$v1' and regsno='$v2' and hostel_name='$qs'");
}
if(mysql_num_rows($data)<1)
{
	if($qs=="ADMIN")
		echo "<script>location='admin1.php?$qs'</script>";
	else
		echo "<script>location='homeex1.php?$qs'</script>";
}
	if($rec=mysql_fetch_row($data))
	{
		echo <<<abc
<div class="required1"><h1 >&nbsp &nbsp &nbsp STUDENT PROFILE</h1></div>
<form name="myForm" action="updatingoff.php?$rec[12]+$rec[1]" onsubmit="return validateForm()" method="post" class="fixit">
<ul class="form-style-1">
    <span style="font-size:20px;color:red;">PERSONAL DETAILS</span>
    <li><label>Name:</label> <input type="text" name="val1" value='$rec[0]' class="field-divided" placeholder="Name"  required readonly /></li>
   <li><label>Gender: </label>
	$rec[3]
    </li>
 <li><label>Student Contact Number:</label><input type="text" value='$rec[5]' name="val2" class="field-divided" placeholder="Student Contact Number"  required readonly /></li>
    <li><label>Student Email:</label><input type="email" value='$rec[4]' name="val3" class="field-divided" placeholder="abc@xyz.com"  required readonly/></li>
  <li><label>Citizenship :</label>
  $rec[8]
  </li>
	<li><label>Parent's Name:</label><input type="text" value='$rec[9]' name="val4" class="field-divided" placeholder="Parent's Name"  required readonly/></li>
    <li><label>Parent's Contact Number:</label><input type="text" value='$rec[10]' name="val5" class="field-divided" placeholder="Parent's Contact Number"  required readonly /></li>
     <li><label>Contact Address:</label><textarea name="val6" class="field-divided4" placeholder="Write Your Mailing Address"  required readonly/>$rec[11]</textarea></li>
<hr style="background:red;height:5px;"><br/>
<span style="font-size:20px;color:red;">INSTITUTIONAL DETAILS</span>
    <li><label>Registration Number:</label><input type="text" value='$rec[2]' name="val7" class="field-divided" placeholder="Registration Number" readonly/></li>
    <li><label>Roll Number: </label><input type="text" value='$rec[1]' name="val8" class="field-divided" placeholder="Roll Number" required readonly/></li>
<li><label>Branch & Session: </label>
	$rec[6] &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	$rec[7]
</li>
 <hr style="background:red;height:5px;">
    <span style="font-size:20px;color:red;">HOSTEL DETAILS</span>
 <li><label>Hostel Details:</label>
	 <select name="val9" class="field-divided3" style="cursor:pointer">
	 <option selected>$rec[12]</option>
	 <option>NC1</option>
	 <option>NC2</option>
	 <option>NC3</option>
	 <option>NC4</option>
	 <option>NC5</option>
	 <option>NC6</option>
	 <option>NC7</option>
	 <option>NC8</option>
	 <option>NC9</option>
	 <option>NC10</option>
	 <option>NC11</option>
	 <option>NC12</option>
	 <option>SS</option>
	 <option>MM-1</option>
	 <option>MM-2</option>
	 <option>GAYATRI-1</option>
	 <option>GAYATRI-2</option>
	 <option>KRUPASINDHU</option>
	 </select>
	 <input type="text" name="val10" value='$rec[13]' class="field-divided2" placeholder="Room Number" id="f11" required readonly/></li>
 <li><input type="button" value="EDIT" style="cursor:pointer" class="reset2" onclick="change()" id="edit"/> </li>    
<li><input type="submit" value="SAVE CHANGES" style="cursor:pointer" name="Sub2"/>
        <input type="button" value="CANCEL" style="cursor:pointer" class="reset1" onclick="location='homeex1.php?$qs'"/>	
    </li>
</ul>
</form>
<div style="background:transparent;position:absolute;top:190%;width:98%;left:1%;height:16%;">
<div style="background:lightgrey;color:black;position:absolute;top:10%;width:98%;left:1%;height:80%;box-shadow: 4px 4px 4px #888888;border-radius:5%;text-align:center;line-height:20px;">
<div style="background:darkblue;position:absolute;height:10%;width:98%;left:1%;"></div>
<div style="position:absolute;top:20%;width:100%;font-size:20px"><center>DESIGNED BY :- <a href="aboutus.html">Gaurav</a> - <a href="aboutus.html">Roshan</a> - Rahul - Shubham - Prabhakar </center><br>
<center>All Rights Reserverd &#169 2015 GIET 3rd Year Team </center>
<div style="position:absolute;top:35%;left:87%;border:1px dotted blue;padding:4px 4px 4px 4px"><a href="aboutus.html" style="font-size:30px;color:black;text-decoration:none;">About Us</a></div>
</div>
</div>
</div>
abc;
}
}
else
{
	if($qs=="ADMIN")
		echo "<script>location='admin1.php?$qs'</script>";
	else
		echo "<script>location='homeex1.php?$qs'</script>";
}
?>
</body>
</html>
