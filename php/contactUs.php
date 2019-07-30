
<?php

include 'connection.php';

$name = $_POST['contact-name'];
$message = $_POST['contact-message'];
$email = $_POST['contact-email'];

$sql = "INSERT INTO contactus 
                    VALUES('$name', '$email', '$message');";

if ($conn->query($sql))
    echo "<script>
            alert('Message Sent');
            window.location.href='../test.php';
         </script>";

$conn->close();
?>

