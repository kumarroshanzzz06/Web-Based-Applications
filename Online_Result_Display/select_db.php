<?php
mysql_connect("localhost","root","");
mysql_query("create database if not exists `$qs`");
mysql_select_db($qs);
?>