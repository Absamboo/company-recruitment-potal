<?php
$host_name = "localhost";
$email = "root";
$password = "";
$db_name = "abdulbashir";

// database connection
$conn = new mysqli($db_name, $email, $password, $host_name);
//check connection
if ($conn->connect_error)die("connecton failed");

// registration document
$email = $_POST['email'];
$password = $_POST['password'];

//query to insert  kashere2024
$query = "INSERT INTO kashere2024 (email, password) value('$email', '$password)'";

// execute query
if ($conn->http_build_query($query)===TRUE){
    echo "registration successfully";
    header("location: login page.html");
}
// close connection
$conn->close();
?>