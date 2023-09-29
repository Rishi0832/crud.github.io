<?php
include('connection.php');
$id = $_GET['id'];

$sql= "DELETE FROM `rishi_table` WHERE `cid`=$id";

if(mysqli_query($conn, $sql)){
    header('Location: view.php');
 
}else{
    echo 'Data not Deleted';
}

?>