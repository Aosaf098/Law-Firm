<?php
$username = $_POST['username'];
$phone = $_POST['phone'];
$services = $_POST['services'];
$date = $_POST['date'];
$lawyer = $_POST['lawyer'];

if(!empty($username)||!empty($phone)||!empty($services)||!empty($date)||!empty($lawyer)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "las";

    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(!mysqli_connect_error()){
        $SELECT = "SELECT username FROM lawyers where username=? and date=?";
        $INSERT = "INSERT INTO lawyers(username, phone, services, date, lawyer) values(?, ?, ?, ?, ?)";
        $SELECT2 = "SELECT username FROM lawyers where lawyer=? and date=?";
        
        $stmt = $conn ->prepare($SELECT);
        $stmt->bind_param("ss",$username, $date);
        $stmt->execute();
        $stmt->bind_result($date);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt = $conn ->prepare($SELECT2);
            $stmt->bind_param("ss",$lawyer, $date);
            $stmt->execute();
            $stmt->bind_result($date);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum<4){
                $stmt->close();
                $stmt = $conn ->prepare($INSERT);
                $stmt -> bind_param('sssss', $username, $phone, $services, $date, $lawyer);
                $stmt -> execute();
                echo "You have appointed this lawyer successfully";
                echo "<a href='index.html'><button>Go back</button></a> ";
            }
            else{
                echo "This lawyer is booked fully that day";
                echo "<a href='index.html'><button>Go back</button></a> ";
            }

        }
        else{
            echo "You already have a booking that day with this lawyer";
            echo "<a href='index.html'><button>Go back</button></a> ";
        }

        
        
    }
}else{
    echo "All fields are required";
    die();
}

?>
