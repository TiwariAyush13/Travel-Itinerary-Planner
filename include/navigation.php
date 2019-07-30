<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Lato|Titillium+Web" rel="stylesheet" type="text/css">
<style>
  .navbar{
  font-family: "Nunito";
}
</style>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="test.php"><strong>Holiday Planner</strong></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navi" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php
        if (isset($_SESSION['username'])) {
          ?>
        <li><a href="cart.php"><strong> <span class="glyphicon glyphicon-bitcoin"></span>View Payments</strong></a></li>
        <li><a href="include/logout_script.php"><strong> <span class="glyphicon glyphicon-log-out"></span> Logout</strong></a></li>
        <?php 
      } else { ?>
        <li><a href="#login"><strong> <span class="glyphicon glyphicon-log-in"></span> Login</strong></a></li>
        <li><a href="signup.php"><strong> <span class="glyphicon glyphicon-user"></span> Signup</strong></a></li>
        <?php

      }
      ?>

      </ul>
    </div>
  </div>
</nav>