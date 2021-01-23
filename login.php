<?php
  include_once 'header.php';
?>
<br>
<div>
<section>
  <div>
  <h2>Login</h2>
  <form action="..\loginincludes\login.inc.php" method="post">
  <div>
    <input type="text" name="uid" placeholder=" Email/Username...">
    <br>    
    <input type="password" name="pwd" placeholder=" Password...">
    <br>
    <br>
    <button type="submit" name="submit">Login</button>
    <p>Don't Have An Account? <a href="signup.php">Sign Up Here</a></p>
  </div>
  </form>
  </div>
</section>

<?php
  if(isset($_GET["error"]))
  {
    if($_GET["error"]=="emptyinput")
    {
      echo '<p style="color:red; font-size:20px; text-align: center">Fill In All Fields!</p>';
    }
    else if($_GET["error"]=="wronglogin")
    {
      echo '<p style="color:red; font-size:20px; text-align: center">Sorry, You\'re Login Details Don\'t Match. Please Enter Them Again</p>';
    }
  }
?>
</div>

<?php
  include_once 'footer.php';
?>