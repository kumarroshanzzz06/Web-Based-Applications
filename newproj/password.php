<html>
<head>
<title>
Change Password
</title>
<script>
function fun1()
{
var s="<?php echo $_SERVER['QUERY_STRING'] ?>";
if(s=="ADMIN")
	location.href='admin1.php?'+s;
else
	location.href='homeex1.php?'+s;
}
function check()
{
 var x1= document.forms["myform"]["np1"].value;
 var x2= document.forms["myform"]["np2"].value;
if(x2!="")
{
if(x1!=x2)
        {
	document.forms["myform"]["np2"].value="";
	document.getElementById("hide").style.display = "block";
        }
    
}
}
</script>
<style>

/*body
{
background:white url("worshipbackgroundscreen.jpg");
background-size:80%;
background-attachment:fixed;
}*/
	.required1{
    color:blue;
    text-decoration: none;
    position:fixed;
    margin:-10;
     padding: 0 0 0 0;
     background:white;
    box-shadow: 10px 10px 5px #888888;
     width:100%;
    z-index:1001;
    text-align:center;
    
   -webkit-animation: mymove 5s infinite; 
    animation: mymove 5s infinite;
    font-family:algerian;
}

#id4
{
display:block;
z-index:5;
position:absolute;
top:25%;
left:30%;
border:1px solid black;
background-color:lightskyblue;
width:28%;
height:55%;
border-radius:5px;
box-shadow:0px 0px 20px black;
padding:10px;
}

.form-style-1 {
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  }
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text],
.form-style-1 input[type=password],
select{
       width: 84%;
   margin:0 0  0 25;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
   
    -webkit-transition: all 0.50s ease-in-out;
    -moz-transition: all 0.50s ease-in-out;
    -ms-transition: all 0.50s ease-in-out;
    -o-transition: all 0.50s ease-in-out;
    outline: none; 
}

.form-style-1 input[type=text]:focus,
.form-style-1 input[type=password]:focus,
.form-style-1 select:focus
{
    /*-moz-box-shadow: 0 0 8px red;
    -webkit-box-shadow: 0 0 8px red;
        box-shadow: 0 0 8px red;*/
        background:lightgrey;
        border: 1px solid green;
}
.form-style-1 input[type=submit]
{
    background: blue;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
   border-radius:5%;
  margin:0 0 0 25;
   position:absolute;
   width:40%;
}
.form-style-1 input[type=button]{
    background: white;
   color:black;
    padding: 8px 15px 8px 15px;
    border: none;
    
   border-radius:5%;
  margin:0 0 0 200;
   position:absolute;
   width:40%;
}
.form-style-1 input[type=submit]:hover,
.form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .field-divided{
    width: 84%;
   margin:0 0  0 25;
}
#note
{
position:absolute;
top:30%;
left:10%;
width:25%;
background-color:lightgreen;
padding:20 20 20 20;
z-index:1000;
box-shadow:2px 2px 2px black;
}
#home
{
position:absolute;
top:15%;
left:5%;
}
#foot
{
position:fixed;
top:94%;
left:0px;
width:100%;
background-color:black;
}
img:hover
{
height:55px;
width:55px;
}
button:hover
{
background-color:lightblue;
}
</style>
</head>
<body >
<img  src="images (9).jpg" style="position:absolute;height:400px;width:750px;left:17.4%;top:24%;"/>
<div class="required1"><h1 >&nbsp &nbsp &nbsp CHANGE YOUR PASSWORD</h1></div>
<div id="id4" >
<h2><center> Change Password</h2></center>
<hr style="height:5px;background:black;">
<form method="post" class="form-style-1" name="myform">
<br>
<input type="password" placeholder="Enter Old Password" required name="op">
<br>
<br>
<br>
<input type="password" placeholder="Enter  New Password" name="np1" required>
<br><br>
<input type="password" placeholder="Confirm  New Password" name="np2" onfocus="document.getElementById('hide').style.display = 'none'" onblur="check()" required>
<br>
<span id="hide" style="color:red;padding:0 0 0 25;display:none;">password not matches</span><br><br>
<input type="submit" value="SAVE" name="sub1" style="cursor:pointer;float:left;">
<input type="button" value="CANCEL" onclick="fun1()" style="cursor:pointer;float:right;">
</form>
</div>
<div id="home" style="cursor:pointer;display:none">
<button onclick="fun1()" style="width:100px;height:40px;position:absolute;top:15%;left:110%;cursor:pointer">HOME</button>
</div>
<div id="foot">
<object type="text/html" data="footer.html" width="100%" height="100%"></object>
</div>
</body>
</html>

<?php
//error_reporting(0);
session_start();
$qs=$_SERVER['QUERY_STRING'];
if($_SESSION['au']!=$qs)
	echo "<script>location='login_form.php'</script>";
if(isset($_POST['sub1']))
{
include_once "select_db.php";
$opwd="hstl".$_POST['op']."ltsh";
$opwd=md5(crc32($opwd));
$npwd="hstl".$_POST['np1']."ltsh";
$npwd=md5(crc32($npwd));
$data=mysql_query("select * from hostel_login where hostel_name='$qs' and passwd='$opwd' ");
if(mysql_num_rows($data)==1)
{
	mysql_query("update hostel_login set passwd='$npwd' where hostel_name='$qs' and passwd='$opwd'");
	ini_set("date.timezone","Asia/Calcutta");
	$fp=fopen("log/logfile1.log","a");
	$dt=date('Y-m-d h:i:sa');
	$dt=$qs." Changed His Password On ".$dt."<br>\n";
	fwrite($fp,$dt);
	if($qs=="ADMIN")
		echo "<script>alert('Password is Changed Successfully');location='admin1.php?$qs'</script>";
	else
		echo "<script>alert('Password is Changed Successfully');location='homeex1.php?$qs'</script>";
}
else
{
echo "<script>alert('Old Password does not matches')</script>";
}
}
?>