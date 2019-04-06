//IMPORTANT ONE
//http://www.domain.com/page.php?x=100&y=200 this code:
//parse_str($_SERVER['QUERY_STRING']);
//will automatically create variables $x and $y with values 100 and 200 which you can then use in your code.
//------------------------------------------------------------------------------
//
//
//SELECT  `COLUMN_NAME` FROM  `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='yourdatabasename' AND  `TABLE_NAME` =  'b.tech_2014-18_1st';
<?php echo date("Y-m-d") ?>
<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}
?>
<?php
//echo round(98.980254158441,2);
//printf("%.2f",98.987654);
//echo substr("a.b.c",strrpos("a.b.c",".")+1);	
switch(2)
{
case 2:echo "hii";
case 3:echo "hello";
}
?>