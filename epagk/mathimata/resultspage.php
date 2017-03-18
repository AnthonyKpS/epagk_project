<?php

include 'dbconn.php';

 if(isset($_POST['Submit'])) {

   $subject = trim(mysqli_real_escape_string($conn, $_POST['mathima']));
   $month = trim(mysqli_real_escape_string($conn, $_POST['minas']));

   $sql = "SELECT subject, month, comment FROM mathimata WHERE subject = '$subject' AND month = '$month'";

   $result = $conn->query($sql);

   $noresult = "Δεν έχει καταχωρηθεί το συγκεκριμένο μάθημα";

   if ($result->num_rows > 0) {
         // output data of each
         while($row = $result->fetch_assoc()) {
             $comment =  $row["comment"];
              }
            }
          }
  ?>
<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="../../favicon.ico">

    <title>E•Pagkrition</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet" >

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  </head>

    <body>
      <div class="container">
        <h2>Αποτελέσματα αναζήτησης</h2>
        <p>Εδώ είναι το μάθημα που επέλεξες</p>
        <table class="table">
          <thead>
            <tr>
              <th>Μάθημα</th>
              <th>Μήνας</th>
              <th>Περιγραφή</th>
            </tr>
          </thead>
          <tbody>
        <tr>
          <td><?php echo "$subject"; ?></td>
          <td><?php echo "$month"; ?></td>
          <td><?php if (isset($comment)) {
            echo $comment;
          } else {
            echo $noresult;
          }?></td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
