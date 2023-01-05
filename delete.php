<?php
include "database_connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM `simple_crud` WHERE id = $id";
$result =mysqli_query($conn,$sql);

if($result)
{
    header("Location: main.php?msg= Student Infromation Successfully Deleted!!");
}
else
{
    echo "Uncessfully Deleted :)" . mysqli_error($conn);
}


?>