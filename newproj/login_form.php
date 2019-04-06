<html>
<head>
<title>
login form
</title>
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
left:35%;
border:1px solid black;
background-color:darkgrey;
width:25%;
height:40%;
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
.form-style-1 input[type=submit]{
    background: blue;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
   border-radius:5%;
   margin:0 0 0 25;
   position:absolute;
   width:80%;
}
.form-style-1 input[type=submit]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .field-divided{
    width: 84%;
   margin:0 0  0 25;
}
#foot
{
position:fixed;
top:94%;
left:0px;
width:100%;
background-color:black;
}
</style>
</head>
<body bgcolor="lightgrey">
<div class="required1"><h1 >&nbsp &nbsp &nbsp DATA MANIPULATION FORM</h1></div>
<div id="id4" >
<center><h2>Log in to Proceed</h2></center>
<hr>
<form method="post" class="form-style-1" >
<label>User_ID</label>
<select class="field-divided" name="op1" style="cursor:pointer">
	<option>ADMIN</option>
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
	<option>GAYATRI-1</option>
	<option>GAYATRI-2</option>
	<option>MM-1</option>
	<option>MM-2</option>
	<option>SS</option>
	<option>KRUPASINDHU</option>
</select>
<br>
<br>
<input type="password" placeholder="Enter Password" name="op2" required>
<br><br>
<input type="submit" value="Log in" name="sub1" style="cursor:pointer">
</form>
</div>
<div id="foot">
<object type="text/html" data="footer.html" width="100%" height="100%"></object>
</div>
</body>
</html>
<?php
//error_reporting(0);
	if(isset($_POST['sub1']))
	{
		$uname=strtoupper($_POST['op1']);
		$pwd="hstl".$_POST['op2']."ltsh";
		$pwd=md5(crc32($pwd));
		mysql_connect("localhost","root","");
		mysql_select_db("test");
		$row=mysql_query("select * from hostel_login where hostel_name='$uname' and passwd='$pwd'");
		if(mysql_num_rows($row)==1)
		{
			session_start();
			$_SESSION['au']=$uname;
			if($uname=="ADMIN")
				echo "<script>location='admin1.php?$uname'</script>";
			else
			//echo "<script>alert('$uname')</script>";
				echo "<script>location='homeex1.php?$uname'</script>";
		}
		else
			echo "<script>alert('Invalid Password')</script>";
			
		
	}
	?>