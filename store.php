<?php
$todo_text = $_POST['todo_text'];
$complete = isset($_POST['complete'])? '1': '0';

include_once('connection.php');
$sql = "INSERT INTO todo VALUES(NULL ,'$todo_text','$complete')";
$result = mysqli_query($db_connection,$sql);

if (isset($result)){
    header("location:index.php");
}else{
    echo "There was an Error!";
}