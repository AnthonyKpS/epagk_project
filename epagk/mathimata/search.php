<?php

 if(isset($_POST['Submit'])) {

   $servername = "localhost";
   $username = "root";
   $password = "Kapas16ole";
   $dbname = "epagk";


   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   echo "Connected successfully", "<br><br>";

   $subject = trim(mysqli_real_escape_string($conn, $_POST['mathima']));
   $month = trim(mysqli_real_escape_string($conn, $_POST['minas']));

   $sql = "SELECT subject, month, comment FROM mathimata";

   //WHERE subject =...z AND month = ...y ";
  if ($month && $subject) {
     $sql .= " WHERE subject = '$subject'
             AND month = '$month'";
   }
   else if ($month) {
     $sql .= " WHERE month = '$month'";
   }
   else if ($subject) {
     $sql .= " WHERE subject = '$subject'";
   }
   else {
     echo 'error';
   }



   $result = $conn->query($sql);

   if ($result->num_rows > 0) {

       // output data of each
       while($row = $result->fetch_assoc()) {
            echo " περιγραφή: " . $row["comment"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}
  ?>
