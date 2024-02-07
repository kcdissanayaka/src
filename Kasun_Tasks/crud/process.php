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

    $sql= "insert into studentInfo (first_name,last_name,group_id,city) 
        values ('$fname','$lname','$grpid','$city')";

    // notify the user to transation status

    if ($conn->query($sql)===TRUE){
        echo "Record Saved successfully";
    } else{

        echo "Error :" .$sql . "<br>" . $conn->error;
    }

    // colse the DB connection once all done

    

}

?>
