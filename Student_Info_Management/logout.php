<?php
session_start();
//setcookie("PHPSESSID","",time()-1);
session_destroy();
echo "<script>location='index.php'</script>";
?>