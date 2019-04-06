<?php
error_reporting(0);
require_once '../script_for_excel_parse/reader.php';
$master5 = new Spreadsheet_Excel_Reader();
$master5->setOutputEncoding('CP1251');
$master5->read('some_excel_file.xls');
$no_rows= count($master5->sheets[0]["cells"]);
$no_cols = $master5->sheets[0]["cells"][2][1];
for($i=3;$i<=$no_rows;$i++)
{
	
	$v1=$master5->sheets[0]["cells"][$i][1]; //mysql_real_escape_string(strtoupper(trim($_POST['field1']," ")));
	$v2=$master5->sheets[0]["cells"][$i][2];//mysql_real_escape_string(strtoupper(trim($_POST['field2']," ")));
	$v3=$master5->sheets[0]["cells"][$i][3];//mysql_real_escape_string(strtoupper(trim($_POST['field3']," ")));
	$v4=$master5->sheets[0]["cells"][$i][4];//mysql_real_escape_string(trim($_POST['field4']," "));
	$v5=$master5->sheets[0]["cells"][$i][5];//mysql_real_escape_string(trim($_POST['field4']," "));
	$v6=$master5->sheets[0]["cells"][$i][6];//mysql_real_escape_string(trim($_POST['field5']," "));
	$v7=$master5->sheets[0]["cells"][$i][7];//mysql_real_escape_string(trim($_POST['field6']," "));
	$v8=$master5->sheets[0]["cells"][$i][8];//mysql_real_escape_string(trim($_POST['field7']," "));
	$v9=$master5->sheets[0]["cells"][$i][9];//$_POST['field12'];
	$v10=$master5->sheets[0]["cells"][$i][10];//mysql_real_escape_string(trim($_POST['field8']," "));
	echo("insert DATA values('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10'<br>");
		
}


