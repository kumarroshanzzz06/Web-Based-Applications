<!DOCTYPE html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <link href="./css/style.css" rel="stylesheet"/>
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>CSS MenuMaker</title>
</head>
<body bgcolor='#8195E1'>

<div id='cssmenu'>
<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>B.Tech Results</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>2012-16</span></a>
            <ul>
               <li><a href='#'><span>1st</span></a></li>
               <li class='last'><a href='#'><span>2nd</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>2013-17</span></a>
            <ul>
               <li><a href='#'><span>1st</span></a></li>
               <li class='last'><a href='#'><span>2nd</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>About</span></a></li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
</ul>
</div>
<br>
<div align="right">
<button onclick="location='clg_login.php'" class='hvr-grow'>College Login</button> &nbsp;&nbsp;&nbsp;&nbsp;
<button onclick="location='alogin.php'" class='hvr-grow'>ADMIN LOGIN</button>
</div>
<br>
<div align="right">
<button onclick="location='slogin.php'" class='hvr-grow'>Login (Registered Student)</button> &nbsp;&nbsp;&nbsp;&nbsp;
<button onclick="location='new_stud_regs.php'" class='hvr-grow'>New Student Registration</button>
</div>
</body>
<html>
