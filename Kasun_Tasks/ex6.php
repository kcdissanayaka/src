<?php 
    $title ="Exercise 7: Read Data - Kasun ";
include 'header.php';
include 'db.php'; ?>

        <section id="plan">
            <div class="tourPlan text-center">
                <div class="row">
                    <div class="col">
                        <h1>EXERCISE 7- Read Data From the Database</h1>
                    </div>
                </div>
                <div class="container text-left">
                    <div class="row tourPlanCards">
                        <div class="col-md-12">
                       <? // SQL query to retrieve data from the 'studentsinfo' table
                                $sql = "SELECT * FROM studentsinfo";

                                // Execute the SQL query and store the result
                                $result = $conn->query($sql);

                                // Check if there are any results
                                if ($result->num_rows > 0) {
                                    echo "<table class='table'>
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>City</th>
                                                    <th>Group ID</th>
                                                </tr>
                                            </thead>
                                            <tbody>";

                                    // Loop through the result set and display data in rows
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr> 
                                                <td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
                                                <td>{$row['first_name']}</td>
                                                <td>{$row['last_name']}</td>
                                                <td>{$row['city']}</td>
                                                <td>{$row['groupId']}</td>
                                            </tr>";
                                    }

                                    echo "</tbody></table>";
                                } else {
                                    // Display a message if no results are found
                                    echo "No results";
                                }
                                // close the connection when done
                                $conn->close(); 
                                ?>
                                   

                            </div>
                        </div>
                    </div> <!--newsletter-->
<?php include 'footer.php'; ?>