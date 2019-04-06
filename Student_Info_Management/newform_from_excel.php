<?php
require_once 'script_for_excel_parse/reader.php';
$master5 = new Spreadsheet_Excel_Reader();
$master5->setOutputEncoding('CP1251');
$master5->read('info.xls');
$no_rows= count($master5->sheets[0]["cells"]);
$no_cols = $master5->sheets[0]["cells"][2][1];
for($i=3;$i<=$no_rows;$i++)
{
	error_reporting(0);
	$v1=mysql_real_escape_string(strtoupper(chop($master5->sheets[0]["cells"][$i][1]))); //mysql_real_escape_string(strtoupper(trim($_POST['field1']," ")));
	$v2=mysql_real_escape_string(strtoupper(chop($master5->sheets[0]["cells"][$i][2])));//mysql_real_escape_string(strtoupper(trim($_POST['field2']," ")));
	$v3=mysql_real_escape_string(strtoupper(chop($master5->sheets[0]["cells"][$i][3])));//mysql_real_escape_string(strtoupper(trim($_POST['field3']," ")));
	$v4=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][4]));//mysql_real_escape_string(trim($_POST['field4']," "));
	$v5=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][5]));//mysql_real_escape_string(trim($_POST['field4']," "));
	$v6=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][6]));//mysql_real_escape_string(trim($_POST['field5']," "));
	$v7=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][7]));//mysql_real_escape_string(trim($_POST['field6']," "));
	$v8=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][8]));//mysql_real_escape_string(trim($_POST['field7']," "));
	$v9=chop($master5->sheets[0]["cells"][$i][9]);//$_POST['field12'];
	$v10=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][10]));//mysql_real_escape_string(trim($_POST['field8']," "));
	$v11=chop($master5->sheets[0]["cells"][$i][11]);//$_POST['field13'];
	$v12=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][12]));//mysql_real_escape_string(strtoupper(trim($_POST['field9']," ")));
	$v13=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][13]));//mysql_real_escape_string(trim($_POST['field10']," "));
	$v14=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][14]));//mysql_real_escape_string(trim($_POST['field11']," "));
	$v15=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][15]));//mysql_real_escape_string(trim($_POST['field11']," "));
	$v16=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][16]));//$_POST['field14']."-".$_POST['field15']."-".$_POST['field16'];
	$v17="EEE";
	$v18="2013-17";
	$v19=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][17]));//mysql_real_escape_string($_POST['field19']);
	$v20=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][18]));//$_POST['field20'];
	$rank=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][19]))."-".mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][20]));//$_POST['erank']." :- ".mysql_real_escape_string(strtoupper(trim($_POST['rank']," ")));
	$jeeroll=mysql_real_escape_string(chop($master5->sheets[0]["cells"][$i][21]));
	$qs=$v17;
	include_once "select_db.php";
	if(mysql_query("CREATE TABLE IF NOT EXISTS `$v18` (`rollno` varchar(15) NOT NULL,`regsno` varchar(15) NOT NULL,`name` varchar(50) NOT NULL,`stud_phno` varchar(15) ,`stud_phno_op` varchar(15) ,`stud_emailp` varchar(50) ,`stud_emaili` varchar(50) ,`tenth` varchar(10)  ,`yr_of_10` int(4) ,`plus2` varchar(10) ,`yr_of_12` int(4) ,`fm_name` varchar(50) ,`pc_no` varchar(15) ,`pc_no_op` varchar(15) ,`pemail` varchar(50) ,`dob` varchar(20) ,`branch` varchar(30) ,`syr` varchar(10) ,`gender` varchar(20) ,`address` varchar(300) ,`erank` varchar(15) ,`jeeroll` varchar(15) ,PRIMARY KEY (`rollno`),UNIQUE KEY `rollno` (`rollno`),UNIQUE KEY `regsno` (`regsno`))"))
	{
		if(mysql_query("insert `$v18` values('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8',$v9,'$v10',$v11,'$v12','$v13','$v14','$v15','$v16','$v17','$v18','$v19','$v20','$rank','$jeeroll')"))
		{
			//echo "<script>alert('Form Submitted Successfully')</script> for $v1";
			echo "insertion done for $v1<br>";
		}
		else
		{
			//echo "<script>alert('Roll Number And Registration Should Be Unique')</script>";
			echo "Roll Number And Registration Should Be Unique for $v1<br>";
		}
	}
	else
	{
		echo "<script>alert('Error Occured In Creating New Table')</script>";
	}
}


/*
  Roll Number: ="field1" 
   Registration Number: name="field2" 
   Name: name="field3" 
gender:  name="field20" 
Branch : name="field17"
    Session: 	name="field18" 
    Student Contact Number: name="field4" 
    Student Email:name="field5" 
    
     Date Of Birth : 
         Day name="field14" 
         Month  name="field15" 
			Year  name="field16"
   10th %: name="field7" 
    10th Year Of Passing:name="field12" 
	


12th%: name="field8" 
   12th Year Of Passing: name="field13" 
		
	Entrance Rank: name="erank" 
	 name="rank" 
    Contact Address: name="field19" 
    Father/Mother's Name: name="field9" 
    Parent's Contact Number: name="field10" 
  Parent's E-mail:name="field11" 
   */
?>