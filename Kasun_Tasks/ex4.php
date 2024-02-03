<?php 
     $title ="Exercise 4: Control flow and loops - Kasun ";
    include 'header.php'; ?>

    <section id="plan">
            <div class="tourPlan text-center">
                <div class="row">
                    <div class="col">
                        <h1>EXERCISE 4</h1>
                    </div>
                </div>
                <div class="container text-left">
                        <br>
                            <h3>1. Create a file (ex3.php): Create a file named ex3.php in your exercise folder. Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h3> <br>
                            <h3>2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she 
                                    is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h3>
                                <br>
                            <div class="container mt-2">
                            <div class="row tourPlanCards">
                                <div class="col">
                                    <form name="bootstrapForm" class="mt-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="mb-3">
                                        <label for="Name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="number" name="age" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            
                                <div class="col">
                                    <?php
                                        if (isset($_POST['name']) && isset($_POST['age'])) {
                                            $name = $_POST['name'];
                                            $age = $_POST['age'];
                
                                            if ($age >= 18) {
                                                echo "<h4>Congratulations, {$name}! You are eligible for voting.</h4>";
                                            } else {
                                                echo "<h4>Sorry, {$name}. You are not yet eligible for voting. You must be at least 18 years old to vote.</h4>";
                                            }
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div> <br>

                            <h3>3. Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
                                    depending on whether it's August or not:</h3>
                                    It's August, so it's still holiday. <br>
                                    Not August, this is Month-name so I don't have any holidays <br>
                                    Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page. <br>

                                    <?php
                                        $thisMonth = date('F');
                                        switch ($thisMonth) {
                                            case 'August':
                                            echo "<h3>It's August, so it's still holiday.</h3>";
                                            break;
                                        default:
                                        echo "<h3>Not August, this is $thisMonth so I don't have any holidays</h3>";
                                        }
                                    ?> <br> <br>

                            <h3> 4. For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>
                            <div class="container mt-2">
                            <div class="row tourPlanCards">
                                <div class="col">
                                    <form name="bootstrapForm" class="mt-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="mb-3">
                                        <label for="Number" class="form-label">Give A Number</label>
                                        <input type="number" name="number" class="form-control" min="1" required>
                                    </div>
                                   <!-- <div class="mb-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="number" name="age" class="form-control" required>
                                    </div>-->
                                    <button type="submit" class="btn btn-primary">Generate</button>
                                    </form>
                                </div>
                            
                                <div class="col">
                                    <?php
                                        if (isset($_POST['number'])) {
                                            $number = $_POST['number'];
                                                 for ($i = 1; $i <= 12; $i++) {
                                                echo "$number x $i = " . $number * $i . "<br>";
                                                }
                                            }

                                    ?>
                                    </div>
                                </div>
                            </div> <br>
                            <h3>5. While Loop: Write a PHP script that will print all the numbers from 1 to n. 
                                (use form to get user input).</h3>
                                <div class="container mt-2">
                            <div class="row tourPlanCards">
                                <div class="col">
                                    <form name="bootstrapForm" class="mt-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="mb-3">
                                        <label for="Number" class="form-label">Give A Number</label>
                                        <input type="number" name="number" class="form-control" min="1" required>
                                    </div>
                                        <button type="submit" class="btn btn-primary">Generate</button>
                                    </form>
                                </div>
                            
                                <div class="col">
                                    <?php
                                        if (isset($_POST['number'])) {
                                            $number = $_POST['number'];
                                            $i = 1;
                                            while ($i <= $number) {
                                                echo $i ."<br>";
                                                $i++;
                                            }
                                        }

                                    ?>
                                    </div>
                                </div>
                            </div> <br>

                            <h3>6.Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>
                                <?php
                    
                                    $myarray= array("HTML", "CSS", "PHP", "JavaScript");
                                    foreach ($myarray as $myValue) {
                                    echo "<h3> $myValue </h3> <br> "  ;
                                    }
                                ?>
                        
                        </div>
                    </div>
                    
                     <br>
                    </div>

                </div>
                        
                       
                         

        </div>
    </div>

        
<?php include 'footer.php'; ?>