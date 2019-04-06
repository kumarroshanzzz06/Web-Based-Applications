<?php
session_start();
if(!isset($_SERVER['PHP_AUTH_USER'])||$_COOKIE['isin']!="2")
{
	header('WWW-Authenticate: Basic realm="Enter Your UserName (i.e, Registration Number) And Password"');
    header('HTTP/1.0 401 Unauthorized');
	setcookie ("isin", "2");
    echo "<script>location='index.php'</script>";
    exit(0);
}
else
{
	$uname=$_SERVER['PHP_AUTH_USER'];
	$pwd=$_SERVER['PHP_AUTH_PW'];
	if($uname=="Roshan" && $pwd=="Roshan")
	{
		//$_SESSION['student_logined']=true;
		echo "<script>location='admin.php'</script>";
	}
	else
	{
		echo "<script>alert('Invalid UserName And Password Please Re-Login')</script>";
		setcookie ("isin", "", time()-3600);
		echo "<script>location='index.php'</script>";
	}
}
?>