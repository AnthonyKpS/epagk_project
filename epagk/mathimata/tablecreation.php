<?php

include 'dbconn.php';

// sql to create table
$sql = "CREATE TABLE mathimata (
subject VARCHAR(30) NOT NULL,
month VARCHAR(30) NOT NULL,
comment TEXT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table mathimata created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
