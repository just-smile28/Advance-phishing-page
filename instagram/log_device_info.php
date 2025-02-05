<?php
if (isset($_POST['ip']) && isset($_POST['device'])) {
    $ip = $_POST['ip'];
    $device = $_POST['device'];

    // Save IP and Device Info
    $logData = "IP: $ip, Device: $device\n";
    file_put_contents('device_info.txt', $logData, FILE_APPEND);
}
?>

