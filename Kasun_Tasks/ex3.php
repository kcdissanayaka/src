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
                            <h3>3. Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your tag.</h3> <br>
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

                            <h3>04. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table 
                        in Exercise 1. If you wish, you can use the same table.</h3>
                        <div class="row">
                        <div class="col m-4">
                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                        </table>

                        <table class="table">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                        </table>
                        </div>
                    </div>
                    
                     <br>
                    </div>
                    <h3>5. String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
                        Join them together and print the length of the string.</h3>

                   
                        <?php
                            $str1 = "Hello";
                            $str2 = "World";
                            $stringConcat = $str1 . " " . $str2;
                            echo "<h4>Concat String: $stringConcat</h4>";
                        ?>
                    <br>
                    <h3>6. Number Addition: Write a script to add up the numbers: 298, 234, 46. Use 
                        variables to store these numbers and an echo statement to output your answer.</h3>
                    
                        <?php
                            $value1 = 298;
                            $value2 = 234;
                            $value3 = 46;
                            $total = $value1 + $value2 + $value3; 
                            echo "<h4>Totola Sum is: $total</h4>";
                        ?>
                    <br>
                    <h3>7. Browser Detection: Write a PHP script to detect the 
                        browser being used to view your pages. Hint: Use predefined variables: $_SERVER.</h3>

                    <?php 
                        // Get the user agent first
                        $user_agent = $_SERVER['HTTP_USER_AGENT'];

                        // Then Detect the browser based on the user agent
                        switch (true) {

                            case (preg_match('/Chrome/i', $user_agent)):
                                $browser = 'Google Chrome';
                                break;
                            case (preg_match('/Safari/i', $user_agent)):
                                    $browser = 'Apple Safari';
                                    break;
                            case (preg_match('/MSIE/i', $user_agent)):
                                $browser = 'Internet Explorer' ;
                                break;
                            case (preg_match('/Firefox/i', $user_agent)):
                                    $browser = 'Mozilla Firefox';
                                    break;

                            case (preg_match('/Opera/i', $user_agent)):
                                $browser = 'Opera';
                                break;
                            default:
                                $browser = 'Unknown';
                        }

                        // Display the identified browser
                        echo "<h4>Detected browser: $browser</h4>";
                    ?>
                    <br>
                    <h3>8. File Modification Time: Write a PHP script in the footer section of your 
                        universal footer to display the last modification time of a file. Hint: Use predefined 
                        variable $_SERVER, basename function  to get the filename , filetime function to get the 
                        last modified time & date function to print the date and time</h3>
                </div>
                        
                       
                         

        </div>
    </div>

        
<?php include 'footer.php'; ?>