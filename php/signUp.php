
<?php

include 'connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$userid = $_POST['userid'];
$address = $_POST['city'];
$zipcode = $_POST['zipcode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['pass'];

$sql = "SELECT * FROM signup WHERE email = '$email';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (!empty($row)) {
    echo "<script>
            alert('User Already Registered');
            window.location.href='../test.php';
         </script>";
} else {
    $sql = "INSERT INTO signup
            VALUES('$fname', '$lname', '$userid', '$address', $zipcode, $phone, '$email', '$password');";

    if ($conn->query($sql)) {
        session_start();
        $_SESSION['username'] = $email;
        echo "<script>
                alert('Signup Sucessfull');
                window.location.href='../test.php';
             </script>";
    } else
        echo "<script>
                alert('Signup Failed');
                window.location.href='../test.php';
             </script>";
}

?>