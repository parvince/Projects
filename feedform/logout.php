<?php
  include ("connection.php");
  session_star();
  unset($_SESSION['username']);
  session_destroy();
  echo "<script type='text/javascript'>document.location='login.php'";</script>;

?>