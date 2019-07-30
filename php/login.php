<?php
include 'connection.php';

$email = $_POST['login-email'];
$password = $_POST['login-password'];

$sql = "SELECT * FROM signup WHERE email = '$email';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

session_start();
if (!empty($row)) {
    if ($password == $row['password']) {
        session_start();
        $_SESSION['username'] = $row['email'];
        header("Location: ../test.php");
    } else
        echo "<script>
                alert('Password Incorrect');
                window.location.href='../test.php';
             </script>";
} else {
    echo "<script>
            alert('Email Not Registered');
            window.location.href='../test.php';
         </script>";
}

?>