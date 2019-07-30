<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    header("Location: ../test.php");
  } else {
    session_destroy();
    header("Location: ../test.php");
  }
 ?>
