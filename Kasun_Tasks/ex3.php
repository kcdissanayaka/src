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
                    <div class="row tourPlanCards">
                        <div class="col-md-12">
                         <h3>1. Create a file (ex3.php): Create a file named ex3.php in your exercise folder. Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h3>
                         <h3>2. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an <h3> tag. </h3>
                         <form>
                             
                               <div class="form-group"> 
                                <label for="First Name:">First Name </label> 
                                <input type="text" class= "form-control" name="Firstname" required placeholder="Enter First Name"><br><br>
                               <lable for= "Last Name:"> Last Name:</label>
                                <input type="text" class= "form-control" name="Lastname" requirerd placeholder="Enter Last Name"><br><br>
                                <input type="Submit" value="Submit">
                                </div> 
                         </form>
                        
                         <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, optio a reprehenderit perferendis quo rerum officiis ipsam laborum ad necessitatibus totam cum, nihil dignissimos? 
                            Facere ipsam ipsa omnis sapiente nisi?</p>

                        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, optio a reprehenderit perferendis quo rerum officiis ipsam laborum ad necessitatibus totam cum, nihil dignissimos? 
                        Facere ipsam ipsa omnis sapiente nisi?</p>

    </div>
    </div>
        
<?php include 'footer.php'; ?>