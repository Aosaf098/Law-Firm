<?php require './config.php';

    $query="SELECT * from lawyers";
    $result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <div class="registration">
        <h2 style="text-align:center;">List of Appointments</h2>
        <table align="center" border="none"  style="width:1000px; line-height:50px; border-collapse:collapse;" >
            <tr>
                <th style="background-color:#ea1538; color:black; padding: 15px; text-align: left;">Client Name</th>
                <th style="background-color:#ea1538; color:black; padding: 15px; text-align: left;">Phone</th>
                <th style="background-color:#ea1538; color:black; padding: 15px; text-align: left;">Cases</th>
                <th style="background-color:#ea1538; color:black; padding: 15px; text-align: left;">Appointment Date</th>
                <th style="background-color:#ea1538; color:black; padding: 15px; text-align: left;">Lawyer Name</th>
                <th style="background-color:#ea1538; color:black; padding: 15px; text-align: left;">Operation</th>
            </tr>
            <?php
            while($rows=mysqli_fetch_assoc($result)){
             echo"
                <tr>
                    <td>".$rows['username']."</td>
                    <td>".$rows['phone']."</td>
                    <td>".$rows['services']."</td>
                    <td>".$rows['date']."</td>
                    <td>".$rows['lawyer']."</td>
                    <td><a href='update.php?rn=$rows[id]'><button>Edit</button></td></a>
                </tr>";
             
            }
            ?>
            
        </table>
    </div>
</body>
</html>

