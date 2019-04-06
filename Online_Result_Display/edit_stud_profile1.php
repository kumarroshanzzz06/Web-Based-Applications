<?php
if(isset($_POST['sub1']))
{
	$uname=$_SERVER['PHP_AUTH_USER'];
	$qs=substr($uname,0,2);
	if(substr($uname,2,1)=="2")
		$qs=$qs-1;
	$qs="20".$qs."-".($qs+4);
	include "select_db.php";
	$data=mysql_query("select * from `student_details` where regsno='$uname'");
	$rec=mysql_fetch_row($data);
}
else if(isset($_POST['mysub']))
{
	$v1=$_POST['field1'];
	$v2=mysql_real_escape_string(strtoupper(trim($_POST['field2']," ")));
	$v4=mysql_real_escape_string(trim($_POST['field4']," "));
	$v5=mysql_real_escape_string(trim($_POST['field5']," "));
	$v6=mysql_real_escape_string(trim($_POST['field6']," "));
	$qs=substr($v1,0,2);
	if(substr($v1,2,1)=="2")
		$qs=$qs-1;
	$qs="20".$qs."-".($qs+4);
	include "select_db.php";
	if(mysql_query("update `student_details` set name='$v2',stud_phno='$v4',stud_email='$v5',address='$v6' where regsno='$v1'"))
	{
		echo "<h3>Your Profile Updated Successfully <a href='student.php'>Click Here</a> To View Profile</h3>";
		exit(0);
	}
	else
	{
		echo "<h3>Failed In Updating Your Profile. Please Try Again<br><a href='student.php'>Click Here</a> To View Profile</h3>";
		exit(0);
	}
}
else
	echo "<script>location='student.php'</script>";
?>
<html>

<head>
<title>Student Personal Details</title>
<head>
<style type="text/css">
*{
	font-size:25px;
	font-family:Impact;
	color:#AA0B0B;
}
.form-style-1 {
   padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    background-color: lightblue;
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
     background:lightgrey;
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
          padding: 10px 12px 0px 20px;
          border: 1px solid ;
     margin:10px auto ;
    width: 42%;
    top:0%;
     left:25%;
    position:absolute;
    border-color:transparent;
    box-shadow: 10px 10px 5px #888888;
    background-color:#FAEBD7;
}
input[type="radio"]
{
cursor:pointer;
}
</style>
</head>
<body bgcolor="lightgrey">
<div class="required1"><span style="font-size:30px">STUDENT INFORMATION FORM</span>
</div>
<form name="myForm" action="" method="post" class="fixit">
<ul class="form-style-1">
	<li><span style="font-size:20px"><b>
	Registration Number :- <?php echo $rec[0]; ?><input type="hidden" name='field1' value='<?php echo $rec[0]; ?>'>
	</b></span></li>
	<li><span style="font-size:20px"><b>
	Field :- <?php echo $rec[2]; ?>
	</b></span></li>
	
	<li><span style="font-size:20px"><b>
	College :- <?php echo $rec[3]; ?>
	</b></span></li>
	
	<li><span style="font-size:20px"><b>
	Branch :- <?php echo $rec[6]; ?>
	</b></span></li>
	
	<li><span style="font-size:20px"><b>Gender:-
	<?php echo $rec[5]; ?></b></span>
	</li>
	
	<li><span style="font-size:20px"><b>Date Of Birth :-
	<?php echo $rec[9];?></b></span>
	</li>
	
	<li><label>Name: <span class="required">*</span></label><input type="text" name="field2" class="field-divided" value="<?php echo $rec[4]; ?>" placeholder="Enter Name" required/></li>

    <li><label>Student Contact Number: <span class="required">*</span></label><input type="text" name="field4" class="field-divided" value="<?php echo $rec[7]; ?>" placeholder="Student Contact Number" maxlength="10" required/></li>
    <li><label>Student Email:<span class="required">*</span></label><input type="email" name="field5" class="field-divided" value="<?php echo $rec[8]; ?>" placeholder="abc@xyz.com" required/></li>
     
     <li><label>Contact Address:<span class="required">*</span></label><textarea name="field6" class="field-divided4" placeholder="Write Your Mailing Address" required/><?php echo $rec[10]; ?></textarea></li>
    <li>
        <input type="submit" name='mysub' value="Edit Profile" style="cursor:pointer">
		<input type="button" value="Cancel" style="cursor:pointer" class="reset1" onclick="location='student.php'">
		<label> Fields marked with '<span class="required">*</span>' are MANDATORY.</label>
    </li>	
</ul>
</form>
</body>
</html>