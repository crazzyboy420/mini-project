<?php
$id = $_GET['id'];
$todo_text = $_POST['todo_text'];
$complete = isset($_POST['complete'])? '1': '0';
include_once('connection.php');
$sql = "UPDATE todo SET todo_text = '$todo_text',complete = '$complete' WHERE id= $id";

if (mysqli_query($db_connection,$sql)){
    header('location: index.php');
}else{
    echo 'There was an error!';
}

