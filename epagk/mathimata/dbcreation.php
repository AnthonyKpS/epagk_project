<?php
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

// sql to create table
$sql = "CREATE TABLE mathimata (
id INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
subject VARCHAR(30) NOT NULL,
month VARCHAR(30) NOT NULL,
comment NVARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table mathimata created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
