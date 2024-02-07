<?php
// what to with the data goes here

if(isset($_POST["submit"])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city  = $_POST['city'];
    $grpid = $_POST['groupid'];

    // Connect to the dabase server

include 'db.php';
 // wirte SqL to insert data to the relvant table

   // Define an SQL query to insert data into the 'studentsinfo' table
   $sql = "INSERT INTO studentsinfo (first_name, last_name, city, groupId)
   VALUES ('$fname', '$lname', '$city', '$grpid')";

// Execute the SQL query using the database connection
    if ($conn->query($sql)===TRUE) {
// If the query was successful, display a success message
        echo "New record added";
    } 
    else {
// If there was an error in the query, display an error message
        echo "Error: " .$sql . "<br>" . $conn->error;

        
    }

// Close the database connection

$conn->close();

   
}
?>
