<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>EduStream</title>
  </head>
  <body>
    <ol>
      <?php
        if(isset($_SESSION["useruid"]))
        {
	  echo "<li><a href='#'>Profile</a></li>";
          echo "<li><a href='../loginincludes/logout.inc.php'>Logout</a></li>";
        }
        else
	{
          echo '<li><a href="signup.php">Sign Up</a></li>';
	  echo '<li><a href="login.php">Login</a></li>';
        }
       ?>
     </ol>