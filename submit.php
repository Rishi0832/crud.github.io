<?php

session_start();

if($_POST['name'] !=''){
    $name = $_POST['name'];
    $_SESSION['name'] = $_POST['name'];
}
else{
    $_SESSION['name_error'] = "<p>name feild is required</p>";
}

if($_POST['mob'] != ''){
    $mob = $_POST['mob'];
    $_SESSION['mob'] = $_POST['mob'];
}
else{
    $_SESSION['mob_error'] = "<p>mob  field is required</P>";
}

if($_POST['email'] != ''){
    $name = $_POST['email'];
    $_SESSION['email'] = $_POST['email'];
}
else{
    $_SESSION['email_error'] = "<p>email  field is required</P>";
}

if($_POST['add'] != ''){
    $add = $_POST['add'];
    $_SESSION['add'] = $_POST['add'];
}
else{
    $_SESSION['add_error'] = '<p>add  field is required</P>';
}

if(isset($name)&& isset($mob)&& isset($email)&& isset($add)){
    echo '<p> my name is '.$name.'<p> my name is '.$mob.'<p> my name is ' .$email. '<p> my name is ' .$add.';
}
?>