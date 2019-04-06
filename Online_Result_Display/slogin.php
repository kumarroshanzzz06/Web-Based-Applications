<?php
session_start();
if(!isset($_SERVER['PHP_AUTH_USER'])||$_COOKIE['isin']!="1")
{
	header('WWW-Authenticate: Basic realm="Enter Your UserName (i.e, Registration Number) And Password"');
    header('HTTP/1.0 401 Unauthorized');
	setcookie ("isin", "1");
    echo "<script>location='index.php'</script>";
    exit(0);
}
else
{
	$uname=$_SERVER['PHP_AUTH_USER'];
	$pwd=md5(crc32($_SERVER['PHP_AUTH_PW']."pwd"));
	mysql_connect("localhost","root","");
	$qs=substr($uname,0,2);
	if(substr($uname,2,1)=="2")
		$qs=$qs-1;
	$qs="20".$qs."-".($qs+4);
	if(mysql_select_db($qs))
	{
		$data=mysql_query("select * from `student_details` where regsno='$uname' and password='$pwd'");
		if(mysql_num_rows($data)==1)
		{
			//$_SESSION['student_logined']=true;
			echo "<script>location='student.php'</script>";
		}
		else
		{
			echo "<script>alert('Invalid UserName And Password Please Re-Login')</script>";
			setcookie ("isin", "", time()-3600);
			echo "<script>location='index.php'</script>";
		}
	}
	else
	{
		echo "<h3>Invalid Registration Number (OR) You Are Not Registered<br><a href='new_stud_regs.php'>Click Here</a> To Register Yourself<br><a href='index.php'>Click Here</a> To Go Back</h3>";
		setcookie ("isin", "", time()-3600);
	}
}
?>