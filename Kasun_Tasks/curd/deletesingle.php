<?php 
    $title ="Exercise 7: Update Data - Kasun ";
include '../header.php';
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id= '$a'");
$row= mysqli_fetch_array($result); ?>

        <section id="plan">
            <div class="tourPlan text-center">
                <div class="row">
                    <div class="col">
                        <h1>EXERCISE 7- Delete Data</h1>
                    </div>
                </div>
                <div class="container text-left">
                    <div class="row tourPlanCards">
                        <div class="col-md-12">
                        <h2>Input Your Information Below:</h2>
                        <form name= "form1" method="post" action="">
                            <div class="row">
                                <div class="col">
                                <label for="fname">First Name:</label>
                                <input type="text" class="form-control" placeholder="First name" name="fname" required value="<?php echo $row['first_name']; ?>">
                                </div>
                                <div class="col">
                                <label for="lname">Last Name:</label>
                                <input type="text" class="form-control" placeholder="Last name" name="lname" required value="<?php echo $row['last_name']; ?>" >
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                <label for="city">City:</label>
                                <input type="text" class="form-control" placeholder="City" name="city" required value="<?php echo $row['city']; ?>">
                                </div>

                                <div class="col">
                                <label for="groupid">Group ID:</label>
                                <!--<input type="text" class="form-control" placeholder="City" name="city" required value="<?php echo $row['groupId']; ?>"> -->
                                <select class="form-control" id="groupid" name="groupid">
                                    <option value="BBCAP19">BBCAP19</option>
                                    <option value="BBCAP20">BBCAP20</option>
                                    <option value="BBCAP21">BBCAP21</option>
                                    <option value="BBCAP22">BBCAP22</option>
                                    <option value="Others">Others</option>
                                </select>   
                                </div>

                            </div>
                            <br>
                            <div class="row">
                            <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your Information</button></div>
                            </div>
                            </form>
                            <?php 
                            /* 
                            The isset() function is used to check if a variable is set and not NULL.
                            In this case, it's checking if the $_POST['submit'] 
                            value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
                            and the code inside the if block will be executed. If the form has not been submitted, 
                            the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
                            */


                                if (isset($_POST['delete'])){
                                    $query = mysqli_query($conn,"DELETE FROM studentsinfo where id='$a'");
                                    if($query){
                                        echo "Record Deleted with id: $a <br>";
                                        // if you want to redirect to update page after updating
                                        //header("location: update.php");
                                    }
                                    else { echo "Record Not Deleted";}
                                    }

                            $conn->close();

                            ?>
                        
                                   

                            </div>
                        </div>
                    </div> <!--newsletter-->
<?php include '../footer.php'; ?>