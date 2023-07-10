<?php
include('addreview.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $servername="localhost";
    $root="root";
    $password="";
    $dbname="test1";
    $review=$_POST["r1"];
    $id=$_POST['id'];
    $id=(int)$id;
    // Create connection
    $conn=mysqli_connect($servername,$root,$password,$dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE farmersdata SET review='{$review}' WHERE id='{$id}'";
}
?>
