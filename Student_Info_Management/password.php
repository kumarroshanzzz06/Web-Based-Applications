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
else if(s=="BSH")
	location.href='bshpage.php?'+s;
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
#id4
{
display:block;
z-index:5;
position:absolute;
top:25%;
left:60%;
border:1px solid black;
background-color:darkgrey;
width:28%;
height:55%;
border-radius:5px;
box-shadow:5px 5px 5px black;
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
    -moz-box-shadow: 0 0 8px red;
    -webkit-box-shadow: 0 0 8px red;
        box-shadow: 0 0 8px red;
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
top:90%;
left:0px;
width:100%;
background-color:mintcream;
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
<body style="background:url('p2.jpg') no-repeat fixed">
<div class="required1"><h1 >&nbsp &nbsp &nbsp CHANGE YOUR PASSWORD</h1></div>
<div id="id4" >
<h2><center> Change Password</h2></center>
<hr>
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
<div id="home" style="cursor:pointer">
<img src="home.png" height="50px" width="50px" style="align:left;"/>
<button onclick="fun1()" style="width:100px;height:40px;position:absolute;top:15%;left:110%;cursor:pointer">HOME</button>
</div>
<div id="note">
<span style="color:darkblue;float:left;"><h3>ENTER</h3> </span><br>&nbsp&nbsp new password for your account<br><br>
we recommend you to create a unique &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp password<hr>
<br><span style="color:red;text-decoration:underline;float:left;"><h3>NOTE:-</h3></span><br>Once you change your password,you can not reuse your old password
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
if(($_SESSION['au']!=$qs)&&($_SESSION['au']!="ADMIN") &&($_SESSION['au']!="BSH"))
	echo "<script>location='login_form.php'</script>";
if(isset($_POST['sub1']))
{
mysql_connect("localhost","root","");
mysql_select_db("test");
$opwd="ab12".$_POST['op']."21ba";
$opwd=md5(crc32($opwd));
$npwd="ab12".$_POST['np1']."21ba";
$npwd=md5(crc32($npwd));
$data=mysql_query("select * from dept_login where dept_name='$qs' and dept_pass='$opwd' ");
if(mysql_num_rows($data)==1)
{
	mysql_query("update dept_login set dept_pass='$npwd' where dept_name='$qs' and dept_pass='$opwd'");
	ini_set("date.timezone","Asia/Calcutta");
	$fp=fopen("log/logfile1.log","a");
	$dt=date('Y-m-d h:i:sa');
	$dt=$qs." Changed His Password On ".$dt."<br>\n";
	fwrite($fp,$dt);
	if($qs=="ADMIN")
		echo "<script>alert('Password is Changed Successfully');location='admin1.php?$qs'</script>";
	else if($qs=="BSH")
		echo "<script>alert('Password is Changed Successfully');location='homebsh.php?$qs'</script>";
	else
		echo "<script>alert('Password is Changed Successfully');location='homeex1.php?$qs'</script>";
}
else
{
echo "<script>alert('Old Password does not matches')</script>";
}
}
?>