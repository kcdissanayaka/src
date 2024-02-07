<?php
$servername = "phpsrv-db-1";
$username   = "crud_app";
$password   = "Abc@112211";
$dbname     = "crud_app";

//created a database connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Verify the DB Connection
if($conn->connect_error){
    die("connection Failed:". $conn->connect_error);
}
echo "Connection to DB Successful";

?>