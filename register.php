<?php

// include the file that contains the connection to the database
include 'connect.php';

// create an SQL statement to insert data into the users table, with values provided by the user in a form
$stm = "INSERT INTO users (name, email, password) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[password]')";

// execute the SQL query using the connection to the database and save the result in $sql
$sql = mysqli_query($con, $stm);

// if the query was executed successfully, display a success message, and redirect the user to the login page
if ($sql) {
    echo "done successfully";
    header('Location:http://localhost/XFood_main/login.html');
}
?>

<!--  this code inserts data into a database table named "users" based on input provided by the user in a form.
 The SQL query is executed using the mysqli_query() function and the result is saved in $sql.
  If the query was executed successfully,
 a success message is displayed and the user is redirected to the login page using the header() function. -->