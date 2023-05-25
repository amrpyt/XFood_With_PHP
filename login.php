<?php

// Check if the login form has been submitted
if (isset($_POST['login'])) {

    // If it has, include the file that connects to the database
    include 'connect.php';

    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Build the SQL statement to check if the email and password are correct
    $stm = "SELECT * FROM users where email='$email' and password='$password'";

    // Query the database to execute the SQL statement
    $result = mysqli_query($con, $stm);

    // Count the number of rows returned by the SQL statement
    $count = mysqli_num_rows($result);

    // If there is one row returned, the email and password are correct
    if ($count == 1) {
        // Display a message indicating that the input is correct
        echo "your input is correct";

        // Redirect the user to the main page
        header('Location:http://localhost/XFood_main/index.html');
    }

    // If there are no rows returned, the email and/or password are incorrect
    else {
        // Redirect the user to the login page
        header('Location:http://localhost/XFood_main/login.html');
    }
}

// Check if the register form has been submitted
else if (isset($_POST['register'])) {
    
    // If it has, redirect the user to the register page
    header('Location:http://localhost/XFood_main/register.html');
}

/*The code checks whether the login or register form has been submitted, using the 
isset() function on the $_POST array.
 If the login form has been submitted, it includes a file that connects to the database using include. 
 It then gets the email and password from the form using $_POST and stores them in variables.

Next, the code builds an SQL statement using the email and password variables,
 and queries the database using mysqli_query().

 It then counts the number of rows returned by the query using mysqli_num_rows().
  If the count is one, it means that the email and password are correct,
   so the code displays a message using echo and redirects the user to the main page using header().
    If the count is not one, it means that the email and/or password are incorrect,
     so the code redirects the user to the login page.

If the register form has been submitted,
 the code simply redirects the user to the register page using header().*/