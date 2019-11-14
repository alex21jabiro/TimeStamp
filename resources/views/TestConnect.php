<?php
$dbname = 'timestampmulti';
$dbuser = 'timestamp';
$dbpass = 'timestamp';
$dbhost = 'localhost';

$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");

mysqli_select_db($connect, $dbname) or die("Could not open the db '$dbname'");
$play_query = "SELECT * FROM BUSINESS";

$play_results = mysqli_query($connect, $play_query);
global $connect;

 $bus_name = $_POST['bus_name'];
    $bus_address = $_POST['bus_address'];
    $bus_city = $_POST['bus_city'];
    $bus_state = $_POST['bus_state'];
     $bus_zip = $_POST['bus_zip'];
     $bus_tax_id = $_POST['bus_tax_id'];
     $bus_phone = $_POST['bus_phone'];
     $bus_email = $_POST['bus_email'];
    
        $sql = "insert into business (bus_address, bus_city, bus_state, bus_zip, bus_tax_id, bus_phone, bus_email)" .
                    " values (DEFAULT, '$bus_address', '$bus_city', '$bus_state', '$bus_zip', '$bus_tax_id', '$bus_phone', '$bus_email')";
        if ($connect->query ($sql) == TRUE) {
           
        }
        else
        {
            echo "Error" . $connect->connect_error . "<br>";
            
        }
?>