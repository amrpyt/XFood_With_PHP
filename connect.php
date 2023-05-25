<?php
    // database connection credentials
    $username = "root";
    $password = "";
    $dbname = "restraunt";
    $hostname = "localhost";

    // connect to the MySQL database server
    $con = mysqli_connect($hostname, $username, $password, $dbname);

    // check if the connection is established successfully
    if (!$con) {
        echo "Not connected";
    } else {
        echo "Connected";
    }
?>

<!-- This code is used to connect to a MySQL database server using PHP.
 The variables $username, $password, $dbname, and $hostname hold the credentials required to
  establish a connection to the database.

The mysqli_connect() function is then called to create a new connection to the database server.
 The function takes four parameters: the host name, the database user name,
 the password, and the name of the database to be connected.

The if statement is then used to check if the connection is established successfully or not.
 If $con is false (not connected), the "Not connected" message is displayed,
  otherwise, the "Connected" message is displayed. -->