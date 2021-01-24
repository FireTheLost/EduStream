
    <?php
      include 'header.php';
      echo '<h1>ADD CLASS </h1>';
    ?> 

<form action="..\loginincludes\addclass.inc.php" method="post">
<label for="sub">Subject going to be taught: 
  </label>
<input type="text" size="30" name="sub"id="sub" placeholder="Enter subject..."  ></input>
<br>
<br>
<label for="duration">Class duration:   </label>
<input type="text" size="30" name="duration" id="duration" placeholder="ie. number of minutes"  ></input>
<br>
<br>
<label for="start">Start date of class :  </label>
<input type="text" size="30" name="start" id="start" ></input>
<br>
<br>
<label for="end">End date of class :  </label>
<input type="text" size="30" name="end" id="end" ></input>
<br>
<br>
<label for="sched">Timing schedule of the class:  </label>
<input type="text" size="30" id="sched" name="sched" placeholder="ie 7:00-8:00 p.m EST "  ></input>
<br>
<br>
<label for="pin">Cost Per Student Per Class:</label>
<input type="text" name="cost" size="5" maxlength="2"  placeholder="$1-25"><br><br>
<label for="pin">Link To Class:</label>
<input type="text" style="width:300px;" name="link" placeholder="eg: https://meet.google.com/abc-lmn-xyz"><br><br>
  <input type="submit" name="newclass"value="Submit">
</form>

<?php
  if(isset($_GET["error"]))
  {
    if($_GET["error"]=="usercreationfailed")
    {
      echo '<p style="color:red; font-size:20px; text-align: center">Sorry, Something Went Wrong: Please Try Again/p>';
    }
    else if($_GET["error"]=="stmtfailed")
    {
      echo '<p style="color:red; font-size:20px; text-align: center">Sorry, Something Went Wrong: Please Try Again</p>';
    }
    else if($_GET["error"]=="none")
    {
      echo '<p style="color:green; font-size:20px; text-align: center">Class Creation Success.</p>';
    }
  }

  include 'footer.php';
?>