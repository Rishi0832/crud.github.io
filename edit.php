<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>

<div class="container mt-5">
<?php
include('connection.php');

$id=$_GET['id'];

$sql = "SELECT * FROM `rishi_table` WHERE `cid`=".$id;

$result= mysqli_query($conn, $sql);


if(mysqli_num_rows($result)> 0){
    while($row =mysqli_fetch_assoc($result)){
      $id = $row['cid'];
        $name = $row['name'];
        $mob = $row['mobile'];
        $email = $row['email'];
        $address =$row['address'];
    }
}


?>

    <form action="update.php" method="post">
      
        <div class="top text-center">
          <h2>Registration Form</h2>
        </div>
        
          <input type="number" id="" name="id" value="<?php echo $id ?>" class="form-control d-none">
        <div  class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" value="<?php echo $name ?>" id="" class="form-control">
        <!-- <?php
        if (isset($_SESSION['name_error'])) {
          echo $_SESSION['name_error'];
          unset($_SESSION['name_error']);
        }
        ?> -->


      </div>
      <div class="mb-3">
        <label for="" class="form-label">Mob no.</label>
        <input type="text" name="mob" value="<?php echo $mob ?>" id="" class="form-control">
        <?php
        if (isset($_SESSION['mob_error']))
          echo $_SESSION['mob_error'];
        unset($_SESSION['mob_error']);
        ?>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">E-mail</label>
        <input type="email" name="email" value="<?php echo $email ?>" id="" class="form-control">
        <?php
        if (isset($_SESSION['email_error']))
          echo $_SESSION['email_error'];
        unset($_SESSION['email_error']);
        ?>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Address</label>
        <input type="text" name="add" value="<?php echo $address ?>" id="" class="form-control">
        <?php
        if (isset($_SESSION['add_error']))
          echo $_SESSION['add_error'];
        unset($_SESSION['add_error']);
        ?>
      </div>
      <button type="reset" class="btn btn-warning">Reset</button>
      <button type="submit" class="btn btn-info">Update</button>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>