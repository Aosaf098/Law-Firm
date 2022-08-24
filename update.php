<?php

    session_start();
 
    $rn = $_GET['rn'];
    $_SESSION["id"] = $rn;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="update2.php" method="POST">
      <table>
        <tr>
          <td>Appointment Date:</td>
          <td><input type="date" name="date" required /></td>
        </tr>
        <tr>
          <td>Select your desired Lawyer</td>
          <td>
            <input type="radio" name="lawyer" value="Saul Goodman" />Saul Goodman
            <input type="radio" name="lawyer" value="Matt Murdock" />Matt Murdock
            <input type="radio" name="lawyer" value="Kim Wexler" />Kim Wexler
            <input type="radio" name="lawyer" value="Jackie Chilles" />Jackie Chilles
            <input type="radio" name="lawyer" value="Vincent Gambini" />Vincent Gambini
            <input type="radio" name="lawyer" value="Camille Vasquez" />Camille Vasquez
          </td>
        </tr>
        <tr>
          <td><input type="submit" value="Update" /></td>
        </tr>
      </table>
    </form>
    
</body>
</html>