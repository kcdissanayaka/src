<?php 
     $title ="Exercise 3: Variable, Strings & Operators - Kasun ";
include 'header.php'; ?>

<section id="plan">
            <div class="tourPlan text-center">
                <div class="row">
                    <div class="col">
                        <h1>EXERCISE 3</h1>
                    </div>
                </div>
                <div class="container text-left">
                        <br>
                            <h3>1. Create a file (ex3.php): Create a file named ex3.php in your exercise folder. Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h3>
                            <h3>2. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an <h3> tag. </h3> <br>
                            <div class="container mt-2">
                            <div class="row tourPlanCards">
                                <div class="col">
                                    <form name="bootstrapForm" class="mt-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" name="firstName" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="   text" name="lastName" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            
                                <div class="col">
                                    <?php
                                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                            $firstName = $_POST['firstName'];
                                            $lastName = $_POST['lastName'];
                                            echo "<h3>Hello $firstName $lastName, You are welcome to my site.</h3>";
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                     <br>
                    </div>
                        
                       
                         

    </div>
    </div>
        
<?php include 'footer.php'; ?>