<?php


session_start();
 
  if (isset($_SESSION["uname"])) 
 {
    if (time() - $_SESSION["uname"] > 1800)
	{
        // last request was more than 30 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
    } 
	  else if (time() - $_SESSION["uname"] > 60) {
        $_SESSION["uname"] = time(); // update last activity time stamp
    }
}
 if(!isset($_SESSION["uname"]))
 {
	header("location:login.php");
 }
 ?>
 




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
</head>

<body bgcolor="#96CFE0">
<h1><u><center>Welcom to NIBM</center></u></h1>
</body>
</html>