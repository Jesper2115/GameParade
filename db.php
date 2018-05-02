<?php
$servername = "sql.itcn.dk:3306";
$username = "niko5603.EADANIA";
$password = "01u1B4DqrB";
$database = "niko56032.EADANIA"; 


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) { 
    die("Connection epic failed" . $conn->connect_error);
} 
echo "Connection established :-)<br>"; 
?>