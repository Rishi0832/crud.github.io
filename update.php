<?php
include('connection.php');
$id = $_POST['id'];
$name = $_POST['name'];
$mob  =$_POST['mob'];
$email =$_POST['email'];
$add =$_POST['add'];


$sql = "UPDATE `rishi_table` SET `name`='$name',`mobile`='$mob',`email`='$email',`address`='$add' WHERE `cid`=".$id;

$result =mysqli_query($conn, $sql);
 if($result){
    header('location:view.php');
 }else{
    echo 'Data not Found';
 }
 
?>