<?php
include 'php/connection.php';
session_start();
$user = $_SESSION['username'];
$sql = "SELECT * FROM payment WHERE email = '$user';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Lato|Titillium+Web" rel="stylesheet" type="text/css">

<style>
  .table {
    font-family: "nunito";
  }

  .empty {
    font-family: "Nunito";
    padding-top: 50px;
  }
</style>
<div class="heading">
  <center>
    <h2> PAYMENTS</h2>
  </center><br>
</div>
<?php if (empty($row)) { ?>
<div class="empty col-md-12 col-sm-12 col-lg-12">
  <center>
    <h3>No Payments Made Yet!</h3>
  </center>
</div>
<?php 
} else { ?>
<table class="table" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <th>Amount</th>
    <th>Person</th>
    <th>Departure</th>
    <th>Arrival</th>
    <th>City</th>
    <th>Card Number</th>
    <th>Destination</th>
  </tr>
  <?php do { ?>
  <tr>
    <td>
      <?php echo $row['amount']; ?>
    </td>
    <td>
      <?php echo $row['person']; ?>
    </td>
    <td>
      <?php echo $row['departure']; ?>
    </td>
    <td>
      <?php echo $row['arrival']; ?>
    </td>
    <td>
      <?php echo $row['city']; ?>
    </td>
    <td>
      <?php echo $row['card']; ?>
    </td>
    <td>
      <?php echo $row['destination']; ?>
    </td>
  </tr>
  <?php 
} while ($row = $result->fetch_assoc());
} ?>