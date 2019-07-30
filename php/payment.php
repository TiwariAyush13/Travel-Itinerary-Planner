
<html>
<?php
include 'connection.php';
session_start();

$email = $_SESSION['username'];
$amt = $_SESSION['price'] * $_POST['person'];
$dept = $_POST['depart-date'];
$arr = $_POST['arr-date'];
$city = $_POST['depart-city'];
$card = $_POST['card'];
$person = $_POST['person'];
$for = $_SESSION['city'];

$sql = "INSERT INTO payment
            VALUES('$email', $amt, $person, '$dept', '$arr', '$city', '$card', '$for');";

if ($conn->query($sql)) {
    echo "<script>
            alert('Payment Sucessful');
            window.location.href='../test.php';
          </script>";
} else {
    echo "<script>
            alert('Payment Failed');
            window.location.href='../test.php';
         </script>";
}

$conn->close();
?>
</html>