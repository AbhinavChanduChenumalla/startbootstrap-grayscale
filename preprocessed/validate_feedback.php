<?php

// define variables and set to empty values

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rejolt";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $feedback = $_POST["Feedback"];
}

$sql = "INSERT INTO myfeedback
VALUES ('$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "<center>"."Your Response recorded successfully"."</center>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>