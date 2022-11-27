<?php
$id =$_GET['id'];
include_once('connection.php');
$sql = "DELETE FROM todo WHERE id= $id";

if (mysqli_query($db_connection,$sql)){
    header('location: index.php');
}else{
    echo 'There was an error!';
}

