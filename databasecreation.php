
<?php
$server_name = "localhost";
$user_name = "root";
$password ="";



$conn = new mysqli($server_name, $user_name , $password);



if ($conn->connect_error)
{
die ("Error connecting to the database");
}
else
{
$sql_query = "CREATE DATABASE u_theatre";
if ($conn->query($sql_query) === TRUE)
{
echo "Database Created ";
}
else
{
echo "Error " . $conn->error;
}



$conn->close();
}



?>