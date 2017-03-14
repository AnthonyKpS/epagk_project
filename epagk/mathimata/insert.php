<?php

header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$username = "root";
$password = "Kapas16ole";
$dbname = "epagk2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$subject = $_POST['mathima'];
$month = $_POST['minas'];
$comment = $_POST['perigrafi'];

$sql="INSERT INTO mathimata (subject, month, comment)
VALUES
(N'$subject','$month','$comment')";

if ($conn->query($sql) === TRUE) {
    echo "<br><br>", "added";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
