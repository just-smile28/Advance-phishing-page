<?php
if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Save location info in a log file
    $logData = "Latitude: $latitude, Longitude: $longitude\n";
    file_put_contents('location_info.txt', $logData, FILE_APPEND);
}
?>

