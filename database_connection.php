<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_crud";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection is failed".mysqli_connect_error());
}
else
{
    //echo "Successfully Connected";
}



?>