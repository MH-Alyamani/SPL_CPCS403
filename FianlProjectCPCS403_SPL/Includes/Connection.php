<?php
$DB_Host = 'localhost';
$DB_Username = 'root';
$DB_Password = '';
$DB = 'spl';

$conn = new mysqli($DB_Host, $DB_Username, $DB_Password, $DB);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>