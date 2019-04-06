<?php
session_start();
error_reporting(0);
// Connection 

//$conn=mysql_connect('localhost','root','');
//$db=mysql_select_db('excel',$conn);
//include_once "select_db.php";
$br=chop($_POST['branch']);
$yr=chop($_POST['year']);
$yr1=substr($yr,2,2);$yr1=$yr1+4;

$dt=date("Y_m_d");
$tm=time();
$filename="info_$br"."_$yr"."$dt$tm".".xls";


$link=mysql_connect("localhost","root","");
mysql_query("create database if not exists `$br`");
mysql_select_db($br);
$branch=$br;
if($br=="BT")
	$branch="bio";
else if($br=="METALLURGY")
	$branch="meta";
else if($br=="CHEMICAL")
	$branch="chem";
else if($br=="AEI")
	$branch="aeie";	
$excel_file_loc="../../"."GIET/student_portal/excel_files"."/".$branch."/".$yr;
// Create your database query
$query = "select rollno,regsno,name,stud_phno,stud_emailp,stud_emaili,tenth,yr_of_10,plus2,yr_of_12,dob,fm_name,pc_no,pc_no_op,address from `$yr-$yr1`";  

// Execute the database query
$result = mysql_query($query) or die(mysql_error());

require_once 'PHPExcel_1.8.0/Classes/PHPExcel.php';
// Instantiate a new PHPExcel object
$objPHPExcel = new PHPExcel(); 
// Set the active Excel worksheet to sheet 0
$objPHPExcel->setActiveSheetIndex(0); 
// Initialise the Excel row number
$objPHPExcel->getActiveSheet()->SetCellValue('A'.'1', "ROLL NO");
$objPHPExcel->getActiveSheet()->SetCellValue('B'.'1', "REG NO");
$objPHPExcel->getActiveSheet()->SetCellValue('C'.'1', "STUD NAME");
$objPHPExcel->getActiveSheet()->SetCellValue('D'.'1', "STUD PHONE");
$objPHPExcel->getActiveSheet()->SetCellValue('E'.'1', "STUD PER MAIL");
$objPHPExcel->getActiveSheet()->SetCellValue('F'.'1', "STUD ALT MAIL");
$objPHPExcel->getActiveSheet()->SetCellValue('G'.'1', "10th%");
$objPHPExcel->getActiveSheet()->SetCellValue('H'.'1', "10th YOP");
$objPHPExcel->getActiveSheet()->SetCellValue('I'.'1', "12th%");
$objPHPExcel->getActiveSheet()->SetCellValue('J'.'1', "12th YOP");
$objPHPExcel->getActiveSheet()->SetCellValue('K'.'1', "DOB");
$objPHPExcel->getActiveSheet()->SetCellValue('L'.'1', "PARENT NAME");
$objPHPExcel->getActiveSheet()->SetCellValue('M'.'1', "PARENT PHONE");
$objPHPExcel->getActiveSheet()->SetCellValue('N'.'1', "PARENT ALT PHONE");
$objPHPExcel->getActiveSheet()->SetCellValue('O'.'1', "Address");
$objPHPExcel->getActiveSheet()->SetCellValue('A'.'2', "15");
$rowCount = 3; 
// Iterate through each result from the SQL query in turn
// We fetch each database result row into $row in turn
while($row = mysql_fetch_array($result)){ 
    // Set cell An to the "name" column from the database (assuming you have a column called name)
    //    where n is the Excel row number (ie cell A1 in the first row)
    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $row['rollno']); 
    // Set cell Bn to the "age" column from the database (assuming you have a column called age)
    //    where n is the Excel row number (ie cell A1 in the first row)
    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $row['regsno']); 
    // Increment the Excel row counter
	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $row['name']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $row['stud_phno']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $row['stud_emailp']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $row['stud_emaili']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $row['tenth']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, $row['yr_of_10']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, $row['plus2']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, $row['yr_of_12']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, $row['dob']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, $row['fm_name']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, $row['pc_no']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount, $row['pc_no_op']); 
	$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount, $row['address']); 
    $rowCount++; 
} 

// Instantiate a Writer to create an OfficeOpenXML Excel .xlsx file
//$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel); 

// Write the Excel file to filename some_excel_file.xlsx in the current directory
//$objWriter->save('some_excel_file.xlsx'); 
$objWriter->save("$filename"); 
$dt=date("Y_m_d");
$tm=time();
rename("$excel_file_loc/info.xls","$excel_file_loc/info"."$dt$tm".".xls");
rename("$filename","$excel_file_loc/info.xls");
$temp=$_SESSION['au'];
//echo "<script>alert('$temp')</script>";
if($temp=="BSH")
{	
	echo "<script>alert('STUDENT PORTAL PERSONAL INFO UPDATED');location='../homebsh.php?$br'</script>";
}
else
{
	echo "<script>alert('STUDENT PORTAL PERSONAL INFO UPDATED');location='../homeex1.php?$br'</script>";
}
?>