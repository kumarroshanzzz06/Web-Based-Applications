<?php
session_start();
if(!isset($_SERVER['PHP_AUTH_USER'])||$_COOKIE['isin']!="3")
{
	header('WWW-Authenticate: Basic realm="Enter Your UserName And Password"');
    header('HTTP/1.0 401 Unauthorized');
	setcookie ("isin", "3");
    echo "<script>location='index.php'</script>";
    exit(0);
}
else
{
	$uname=$_SERVER['PHP_AUTH_USER'];
	$pwd=md5(crc32($_SERVER['PHP_AUTH_PW']."pwd"));
	$qs="test";
	include "select_db.php";
	$data=mysql_query("select * from `college_login` where uname='$uname' and password='$pwd'");
	if(mysql_num_rows($data)==1)
	{
		//$_SESSION['student_logined']=true;
		echo "<script>location='college.php'</script>";
	}
	else
	{	
		echo "<script>alert('Invalid UserName And Password Please Re-Login')</script>";
		setcookie ("isin", "", time()-3600);
		echo "<script>location='index.php'</script>";
	}
}
?>