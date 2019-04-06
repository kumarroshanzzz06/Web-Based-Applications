<?php
$link=mysql_connect("localhost","root","");
mysql_query("create database if not exists `$qs`");
$db_selected=mysql_select_db($qs,$link);
if(!$db_selected)
	echo "cant use $qs" or die('Could not connect: ' . mysql_error());
?>