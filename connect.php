<?php
$servername = "mysql-tine.alwaysdata.net";
// Enter your MySQL username below(default=root)
$username = "tine";

// Enter your MySQL password below
$password = "Rifche221";
$dbname = "tine_netbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
   
 die($conn->connect_error);
}
?>
