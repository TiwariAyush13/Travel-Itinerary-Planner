
<?php
$user = 'root';
$password = '';
$server = 'localhost';
$db = 'travel';
$conn = new mysqli($server, $user, $password, $db);

if (!$conn)
    echo "Connection Failed <br>";

?>