<?php
session_start();


include('connection.php');
if($_POST['name']!=''){
    $name = $_POST['name'];
    $_SESSION['name'] = $_POST['name']; 
}
else{
    $_SESSION['name_error'] = "<p class='text-danger'><i class='fa-solid fa-circle-exclamation'></i> Name is required</p>";
}
if($_POST['email']!= ''){
    $email = $_POST['email'];
    $_SESSION['email'] = $_POST['email']; 
}
else{
    $_SESSION['email_error'] = "<p class='text-danger'><i class='fa-solid fa-circle-exclamation'></i> Email is required</p>";
}

if($_POST['mob']!= ''){
    $mob = $_POST['mob'];
    $_SESSION['mob'] = $_POST['mob']; 
}
else{
    $_SESSION['mob_error'] = "<p class='text-danger'><i class='fa-solid fa-circle-exclamation'></i> Mobile no. is required</p>";
}
if($_POST['add']!= ''){
    $add = $_POST['add'];
    $_SESSION['add'] = $_POST['add']; 
}
else{
    $_SESSION['add_error'] = "<p class='text-danger'><i class='fa-solid fa-circle-exclamation'></i> Address is required</p>";
}
    
if(isset($name)&& isset($mob)&& isset($email)&& isset($add)){
    
    $sql = "INSERT INTO `rishi_table`(`name`, `mobile`, `email`, `address`) VALUES ('$name','$mob','$email','$add')";
    session_destroy();
    session_start();
    if(mysqli_query($conn, $sql)){
        $_SESSION['success'] = '<p>connection successfully</p>';
    }else{
        $_SESSION['error'] = '<p>connection failed</p>';
    }
}



header('Location: index.php');
?>