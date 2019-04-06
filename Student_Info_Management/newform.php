<?php
if(isset($_POST['Sub']))
{
	//error_reporting(0);
	$v1=mysql_real_escape_string(strtoupper(trim($_POST['field1']," ")));
	$v2=mysql_real_escape_string(strtoupper(trim($_POST['field2']," ")));
	if($v2=="")
		$v2=$v1;
	$v3=mysql_real_escape_string(strtoupper(trim($_POST['field3']," ")));
	$v4=mysql_real_escape_string(trim($_POST['field4']," "));
	$v4_1=mysql_real_escape_string(trim($_POST['field4_1']," "));
	$v5=mysql_real_escape_string(trim($_POST['field5']," "));
	$v6=mysql_real_escape_string(trim($_POST['field6']," "));
	$v7=mysql_real_escape_string(trim($_POST['field7']," "));
	$v8=$_POST['field12'];
	$v9=mysql_real_escape_string(trim($_POST['field8']," "));
	$v10=$_POST['field13'];
	$v11=mysql_real_escape_string(strtoupper(trim($_POST['field9']," ")));
	$v12=mysql_real_escape_string(trim($_POST['field10']," "));
	$v12_1=mysql_real_escape_string(trim($_POST['field10_1']," "));
	$v13=mysql_real_escape_string(trim($_POST['field11']," "));
	$v14=$_POST['field14']."-".$_POST['field15']."-".$_POST['field16'];
	$v15=$_POST['field17'];
	$v16=$_POST['field18'];
	$v18=mysql_real_escape_string($_POST['field19']);
	$v17=$_POST['field20'];
	$rank=$_POST['erank']." :- ".mysql_real_escape_string(strtoupper(trim($_POST['rank']," ")));
	$jeeroll=$_POST['jeeroll'];
	$qs=$v15;
	include_once "select_db.php";
	if(mysql_query("CREATE TABLE IF NOT EXISTS `$v16` (`rollno` varchar(15) NOT NULL,`regsno` varchar(15) NOT NULL,`name` varchar(50) NOT NULL,`stud_phno` varchar(15) ,`stud_phno_op` varchar(15) ,`stud_emailp` varchar(50) ,`stud_emaili` varchar(50) ,`tenth` varchar(10) ,`yr_of_10` int(4) ,`plus2` varchar(10) ,`yr_of_12` int(4) ,`fm_name` varchar(50) ,`pc_no` varchar(15) ,`pc_no_op` varchar(15) ,`pemail` varchar(50) ,`dob` varchar(20) ,`branch` varchar(30) ,`syr` varchar(10) ,`gender` varchar(20) ,`address` varchar(300) ,`erank` varchar(30)  ,`jeeroll` varchar(30)  ,PRIMARY KEY (`rollno`),UNIQUE KEY `rollno` (`rollno`),UNIQUE KEY `regsno` (`regsno`))"))
	{
		if(mysql_query("insert `$v16` values('$v1','$v2','$v3','$v4','$v4_1','$v5','$v6','$v7',$v8,'$v9',$v10,'$v11','$v12','$v12_1','$v13','$v14','$v15','$v16','$v17','$v18','$rank','$jeeroll')"))
		{
			echo "<script>alert('Form Submitted Successfully');location='index.php'</script>";
		}
		else
		{
			echo "<script>alert('Roll Number And Registration Should Be Unique')</script>";
		}
	}
	else
	{
		echo "<script>alert('Error Occured In Creating New Table')</script>";
	}
}
?>


<html>
<head>
<title>Student Info</title>
<head>
<style type="text/css">
.form-style-1 {
   /* margin:10px auto ;
    max-width: 600px;*/
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    background-color: lightblue;
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
select,textarea{
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
.form-style-1 select:focus,textarea:focus{
    -moz-box-shadow: 0 0 8px green;
    -webkit-box-shadow: 0 0 8px green;
        box-shadow: 0 0 8px green;
        border: 1px solid green;
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
    background: orange;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
    margin:0 0 0 250;
   width:150;
   position:relative;
   left:-249px;
}
.form-style-1 input[type=submit]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.reset1
{
background: orange;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
    margin:0 0 0 250;
   width:150;
   position:relative;
   left:-80px;
   top:-31px;
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
    color:blue;
    text-decoration: none;
    position:fixed;
    margin:-10;
     padding: 0 0 0 0;
     background:mintcream;
    box-shadow: 10px 10px 5px #888888;
     width:100%;
    z-index:1001;
    text-align:center;
    text-shadow: 0 0 3px #FF0000, 0 0 5px #FFA500;
   -webkit-animation: mymove 5s infinite; 
    animation: mymove 5s infinite;
}
@-webkit-keyframes mymove {
    50% {text-shadow: 10px 20px 30px blue;}
}
@-moz-keyframes mymove {
    50% {text-shadow: 10px 20px 30px blue;}
}
.fixit{
          padding: 10px 12px 10px 20px;
          border: 25px solid ;
     margin:10px auto ;
    width: 42%;
    top:10%;
     left:25%;
    position:absolute;
    border-color:transparent;
    box-shadow: 10px 10px 5px #888888;
   /*border-right-color: #ff0000;
    border-left-color: green;*/
    background-color:#FAEBD7;
}
input[type="radio"]
{
cursor:pointer;
}

</style>
<script>
function funrank(rank)
{
if(rank=="Others")
{
document.getElementById("enrnk").placeholder="Enter The Quota";
}
else if(rank=="OJEE Rank")
{
document.getElementById("enrnk").placeholder="Enter OJEE Rank";
}
else
{
document.getElementById("enrnk").placeholder="Enter JEE Mains Rank";
}
}
function validateForm() {
    var x1= document.forms["myForm"]["field1"].value;
   var x3= document.forms["myForm"]["field3"].value;
   var x4= document.forms["myForm"]["field4"].value;
   var x5= document.forms["myForm"]["field5"].value;
   var x7= document.forms["myForm"]["field7"].value;
   var x8= document.forms["myForm"]["field8"].value;
   var x9= document.forms["myForm"]["field9"].value;
   var x10= document.forms["myForm"]["field10"].value;
    var x14= document.forms["myForm"]["field14"].value;
  var x15= document.forms["myForm"]["field15"].value;
   var x16= document.forms["myForm"]["field16"].value;
   var x17= document.forms["myForm"]["field17"].value;
   var x18= document.forms["myForm"]["field18"].value;
 var x19= document.forms["myForm"]["field19"].value;
    if (x1==null || x1=="") {
        alert("Roll Number must be filled out");
        return false;
    }
 
   if (x3==null || x3=="") {
        alert("Name must be filled out");
        return false;
    }
 if (x17=="Branch") {
        alert("Branch must be filled out");
        return false;
    }
    if (x18=="Session") {
        alert("Sessssion must be filled out");
        return false;
    }
  if (x4==null || x4=="") {
        alert("Contact Number must be filled out");
        return false;
    }
  if (x5==null || x5=="") {
        alert("Email ID must be filled out");
        return false;
    }
	if (x14=="Day") {
        alert("Date Of Birth must be filled out");
        return false;
    }
    if (x15=="Month") {
        alert("Date Of Birth must be filled out");
        return false;
    }
    if (x16=="Year") {
        alert("Date Of Birth must be filled out");
        return false;
    }
  if (x7==null || x7=="") {
        alert("10th % of Marks must be filled out");
        return false;
    }
  if (x8==null || x8=="") {
        alert("+2 % of Marks must be filled out");
        return false;
    }
if (x19==null || x19=="") {
        alert("Address must be filled out");
        return false;
    }
  if (x9==null || x9=="") {
        alert("parents name must be filled out");
        return false;
    }
  if (x10==null || x10=="") {
        alert("parents contact number must be filled out");
        return false;
    }
  
}
</script>
</head>
<body style="background:url('p2.jpg') no-repeat fixed">
<div class="required1"><img src="logo.jpg" alt="Image Not Found" height="100" width="100" align="left"><span style="font-size:35px;font-family:Casteller">GIET , GUNUPUR</span><br><br><span style="font-size:30px">STUDENT INFORMATION FORM</span>
</div>
<form name="myForm" action="" onsubmit="return validateForm()" method="post" class="fixit">
<ul class="form-style-1">
    <li><label>Roll Number: <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="Roll Number" /></li>
    <li><label>Registration Number:</label><input type="text" name="field2" class="field-divided" placeholder="Registration Number" maxlength="10" /></li>
    <li><label>Name: <span class="required">*</span></label><input type="text" name="field3" class="field-divided" placeholder="Name" /></li>
<li><label>Gender: <span class="required">*</span></label>
	<input type="radio" name="field20" value="Male" checked>Male
	<input type="radio" name="field20" value="Female">Female
</li>
<li><label>Branch & Session: <span class="required">*</span></label>
	<select name="field17" class="field-divided3" style="cursor:pointer">
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
	<select name="field18" class="field-divided3" style="cursor:pointer">
		<option>Session</option>
		<?php
			$yr=date("Y");
			$j=date("y");
			$m=date('m');
			if($m<7)
			{
				$j--;
				$yr--;
			}	
			$j=$j+4;
				for($i=$yr;$i>$yr-4;$i--)
					{echo "<option>$i-$j</option>"; $j--;}
		?>
	</select>
    <li><label>Student Contact Number: <span class="required">*</span></label><input type="text" name="field4" class="field-divided" placeholder="Student Contact Number" maxlength="13" /></li>
	<li><label>Student Alt Contact Number:(OPTIONAL)</label><input type="text" name="field4_1" class="field-divided" placeholder="Student Alt Contact Number" maxlength="13" /></li>
    <li><label>Student Email(Personal):<span class="required">*</span></label><input type="email" name="field5" class="field-divided" placeholder="abc@xyz.com"/></li>
    <li><label>Student Email(Institutional):</label><input type="email" name="field6" class="field-divided"  placeholder="abc@xyz.com"/></li>
     <li><label>Date Of Birth :<span class="required">*</span></label>
	 <select name="field14" class="field-divided1"  style="cursor:pointer"/>
		<option>Day</option>
		<?php
			for($i=1;$i<=31;$i++)
				echo "<option>$i</option>";
		?>
	 </select>
        <select name="field15" class="field-divided1" style="cursor:pointer" /> 
			<option>Month</option>
		<?php
			for($i=1;$i<=12;$i++)
				echo "<option>$i</option>";
		?>
		</select>
        <select name="field16" class="field-divided2"  style="cursor:pointer"/>
			<option>Year</option>
			<?php
				$yr=date("Y");
				$yr-=16;
				for($i=$yr;$i>=$yr-15;$i--)
					echo "<option>$i</option>";
			?>
		</select>
		</li>
    <li><label>10<sup>th</sup> %:<span class="required">*</span></label><input type="text" name="field7" class="field-divided" placeholder="10th %" /></li>
    <li><label>10<sup>th</sup> Year Of Passing:<span class="required">*</span></label>
<select class="field-divided" placeholder="Year Of Passing" name="field12" style="cursor:pointer">
	<?php
		$yr=date("Y");
		for($i=$yr-1;$i>=$yr-8;$i--)
			echo "<option>$i</option>";
	?>
  
</select></li>

<li><label>12<sup>th</sup> %:<span class="required">*</span></label><input type="text" name="field8" class="field-divided" placeholder="+2 %" /></li>
    <li><label>12<sup>th</sup> Year Of Passing:<span class="required">*</span></label>
	<select class="field-divided" placeholder="Year Of Passing" name="field13" style="cursor:pointer">
	<?php
		$yr=date("Y");
		for($i=$yr;$i>=$yr-7;$i--)
			echo "<option>$i</option>";
	?>
  
</select></li>
	<li><label>JEE MAIN/OJEE Roll No:</label><input type="text" name="jeeroll" class="field-divided" placeholder="JEE MAIN/OJEE Roll No" /></li>
	<li><label>Entrance Rank:<span class="required">*</span></label>
	<input type="radio" name="erank" value="JEE Mains Rank" onclick="funrank('JEE Mains Rank')" checked> JEE Mains Rank <input name="erank" type="radio" value="OJEE Rank" onclick="funrank('OJEE Rank')"> OJEE Rank <input name="erank" type="radio" value="Other Quota" onclick="funrank('Others')"> Others
	</li>
	<li>
	<input type="text" id="enrnk" name="rank" class="field-divided" placeholder="Enter JEE Mains Rank" required>
	</li>
     <li><label>Contact Address:<span class="required">*</span></label><textarea name="field19" class="field-divided4" placeholder="Write Your Mailing Address"/></textarea></li>
    <li><label>Father/Mother's Name:<span class="required">*</span></label><input type="text" name="field9" class="field-divided" placeholder="Father/Mother's Name" /></li>
    <li><label>Parent's Contact Number:<span class="required">*</span></label><input type="text" name="field10" class="field-divided" placeholder="Parent's Contact Number" maxlength="13" /></li>
	<li><label>Parent's Alt Contact Number:(OPTIONAL)</label><input type="text" name="field10_1" class="field-divided" placeholder="Parent's Alt Contact Number" maxlength="13" /></li>
    <li><label>Parent's E-mail:</label><input type="email" name="field11" class="field-divided" placeholder="abc@xyz.com" /></li>
    <li>
        <input type="submit" value="Submit" style="cursor:pointer" name="Sub"/>
		<input type="reset" value="Reset" style="cursor:pointer" class="reset1">
		<label> Fields marked with '<span class="required">*</span>' are MANDATORY.</label>
    </li>
	
</ul>
</form>
<!--<div style="background:transparent;position:absolute;top:250%;width:98%;left:1%;height:16%;">
<div style="background:lightgrey;color:black;position:absolute;top:10%;width:98%;left:1%;height:80%;box-shadow: 4px 4px 4px #888888;border-radius:5%;text-align:center;line-height:20px;">
<div style="background:darkblue;position:absolute;height:10%;width:98%;left:1%;"></div>
<div style="position:absolute;top:20%;width:100%;font-size:15px"><center>DESIGNED BY :- <a href="aboutus.html" target="_blank">Gaurav</a> - <a href="aboutus.html" target="_blank">Roshan</a> - Rahul - Shubham - Prabhakar<br>Supervised By: Mr. Binayak Panda Asst. Prof. Dept. of CSE<br></center>
<center>All Rights Reserverd &#169 2015 GIET 3rd Year Team "CSE" Department</center>
<div style="position:absolute;top:35%;left:87%;border:1px dotted blue;padding:4px 4px 4px 4px"><a href="aboutus.html" target="_blank" style="font-size:30px;color:black;text-decoration:none;">About Us</a></div>-->
</div>
</div>
</div>
</body>
</html>