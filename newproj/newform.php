<?php
error_reporting(0);
if(isset($_POST['Sub']))
{
	include_once "select_db.php";
	//error_reporting(0);
	$v1=mysql_real_escape_string(strtoupper(trim($_POST['field1']," ")));
	$v2=mysql_real_escape_string(strtoupper(trim($_POST['field2']," ")));
	$v3=mysql_real_escape_string(strtoupper(trim($_POST['field3']," ")));
	$v4=$_POST['field4'];
	$v5=$_POST['field5'];
	$v6=$_POST['field6'];
	$v7=mysql_real_escape_string(trim($_POST['field7']," "));
	$v8=mysql_real_escape_string(trim($_POST['field8']," "));
	$v9=$_POST['field9'];
	$v10=mysql_real_escape_string(trim($_POST['field10']," "));
	$v11=mysql_real_escape_string(trim($_POST['field11']," "));
	$v12=mysql_real_escape_string(trim($_POST['field12']," "));
	$v13=$_POST['field13'];
	$v14=mysql_real_escape_string(trim($_POST['field14']," "));
	if(mysql_query("insert stud_hostel_details values('$v1','$v3','$v2','$v4','$v7','$v8','$v5','$v6','$v9','$v10','$v11','$v12','$v13','$v14')"))
	{
		$paswd=crc32($v3);
		mysql_query("insert student_profile values('$v3','$paswd')");
		echo "<script>location='index.php'</script>";
	}
	else
	{
		echo "<script>alert('Roll Number And Registration Should Be Unique')</script>";
	}
}
?>




<html>
<head>
<title>Student Info</title>
<head>
<style type="text/css">
body
{
background:lightblue url("bg9.jpg");
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
.form-style-1 textarea,
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
.form-style-1 textarea:focus,
.form-style-1 select:focus{
   /*-moz-box-shadow: 0 0 8px green;
    -webkit-box-shadow: 0 0 8px green;
       box-shadow: 0 0 8px green;*/
     -webkit-background:whitesmoke;
       -moz-background:whitesmoke;
       background:whitesmoke;
        border: 3px solid sienna;
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
    background:#4691A4;
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
.form-style-1  .required{
    color:red;
}
.required1{
    font-size:20px;
    color:blue;
    text-decoration: none;
    font-family:algerian;
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
         
          border: 15px solid ;
     margin:10px auto ;
    width: 42%;
    top:18%;
     left:25%;
    position:absolute;
    border-color:transparent;
    box-shadow: 10px 10px 5px #888888;
   border-right-color: dimgrey;
    border-left-color: purple;
   border-top-color: purple;
  border-bottom-color: dimgrey;
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
</script>

</head>
<body>
<div class="required1"><h1 >STUDENT INFORMATION FORM</h1></div>
<form name="myForm" action="" onsubmit="return validateForm()" method="post" class="fixit">
<ul class="form-style-1">
    <li><label>Name: <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="Name" required /></li>
    <li><label>Registration Number:</label><input type="text" name="field2" class="field-divided" placeholder="Registration Number" /></li>
    <li><label>Roll Number: <span class="required">*</span></label><input type="text" name="field3" class="field-divided" placeholder="Roll Number" required /></li>
<li><label>Gender: <span class="required">*</span></label>
	<input type="radio" name="field4" required>Male
	<input type="radio" name="field4">Female
</li>
<li><label>Branch & Session: <span class="required">*</span></label>
	<select name="field5" class="field-divided3" style="cursor:pointer">
		<option>Branch</option>
		<option>CSE</option>
		<option>IT</option>
		<option>EE</option>
		<option>EEE</option>
		<option>ECE</option>
		<option>MECH</option>
		<option>CIVIL</option>
		<option>BT</option>
		<option>METALLURGY</option>
		<option>CHEMICAL</option>
		<option>AEI</option>
	</select>
	<select name="field6" class="field-divided3" style="cursor:pointer" >
		<option>Session</option>
		<?php
			$yr=date("Y");
			$j=date("y")+4;	
				for($i=$yr;$i>=$yr-4;$i--)
					{echo "<option>$i-$j</option>"; $j--;}
		?>
	</select>
    <li><label>Student Contact Number: <span class="required">*</span></label><input type="text" name="field7" class="field-divided" placeholder="Student Contact Number" required /></li>
    <li><label>Student Email: <span class="required">*</span></label><input type="email" name="field8" class="field-divided" placeholder="abc@xyz.com" required/></li>

<li><label>Citizenship :<span class="required">*</span></label>
<select name="field9" class="field-divided" style="cursor:pointer" required>
<option>Indian</option>
<option>NRI</option>
</select>
</li>
	<li><label>Parent's Name:<span class="required">*</span></label><input type="text" name="field10" class="field-divided" placeholder="Parent's Name" required /></li>
    <li><label>Parent's Contact Number:<span class="required">*</span></label><input type="text" name="field11" class="field-divided" placeholder="Parent's Contact Number" required /></li>
     <li><label>Contact Address:<span class="required">*</span></label><textarea name="field12" class="field-divided4" placeholder="Write Your Mailing Address" required/></textarea></li>
	 <li><label>Hostel Details:<span class="required">*</span></label>
	 <select name="field13" class="field-divided3" style="cursor:pointer"/>
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
	 <input type="text" name="field14" class="field-divided2" placeholder="Room Number" required/></li>
	 <br>
	<label> Fields marked with '<span class="required">*</span>' are MANDATORY.</label>
        <input type="submit" value="Submit" style="cursor:pointer" name="Sub"/>
		<input type="reset" value="Reset" style="cursor:pointer" class="reset1">
		
    </li>
	
</ul>
</form>
<div style="background:transparent;position:absolute;top:175%;width:98%;left:1%;height:16%;">
<div style="background:lightgrey;color:black;position:absolute;top:10%;width:98%;left:1%;height:80%;box-shadow: 4px 4px 4px #888888;border-radius:5%;text-align:center;line-height:20px;">
<div style="background:darkblue;position:absolute;height:10%;width:98%;left:1%;"></div>
<div style="position:absolute;top:20%;width:100%;font-size:20px"><center>DESIGNED BY :- <a href="aboutus.html">Gaurav</a> - <a href="aboutus.html">Roshan</a> - <a href="aboutus.html">Ram</a> </center><br>
<center>All Rights Reserverd &#169 2015 GIET 3rd Year Team </center>
<div style="position:absolute;top:35%;left:87%;border:1px dotted blue;padding:4px 4px 4px 4px"><a href="aboutus.html" style="font-size:30px;color:black;text-decoration:none;">About Us</a></div>
</div>
</div>
</div>
</body>
</html>