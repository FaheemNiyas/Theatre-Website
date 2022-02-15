<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "u_theatre";
$conn = new mysqli($server_name, $user_name, $password, $db_name);
if ($conn->connect_error) {
    die("Error connecting to the database");
} else {
// Create the users table
    $sql_ut = "CREATE TABLE user
( uname VARCHAR(20) NOT NULL,
password VARCHAR(20),
role VARCHAR(20),
PRIMARY KEY(uname) )";
    if ($conn->query($sql_ut) === TRUE) {
        echo "User table successfully created";
    } else {
        echo "Error creating user table " . $conn->error;
    } // Create the microblog table
    $sql_mbt = "CREATE TABLE microblog
( blogid INTEGER NOT NULL,
imageurl VARCHAR(100),
blogtext VARCHAR(200),
PRIMARY KEY(blogid) )";
    if ($conn->query($sql_mbt) === TRUE) {
        echo "Microblog table successfully created";
    } else {
        echo "Error creating microblog table " . $conn->error;
    }
}
?>

