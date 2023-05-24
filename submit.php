<!DOCTYPE html>
<html>
<body>

<?php
// Fetch form data
$name = $_POST['name'];
$rollno = $_POST['rollno'];
$regimentalno = $_POST['regimentalno'];
$contactno = $_POST['contactno'];
$yearinncc = $_POST['yearinncc'];

// Create a new line of form data
$formData = array($name, $rollno, $regimentalno, $contactno, $yearinncc);

// Open or create the CSV file
$file = fopen('enrollment_data.csv', 'a');

// Write the form data to the CSV file
fputcsv($file, $formData);

// Close the file
fclose($file);
?>

</body>
</html>
