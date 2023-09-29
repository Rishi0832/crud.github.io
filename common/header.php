<?php
session_start();
?>
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
    <form action="register.php" method="post">
      <div class="mb-3">
        <div class="top text-center">
          <h2>Registration Form</h2>
        </div>
        <?php
        if (isset($_SESSION['success'])) {
        ?>
          <script>
            Swal.fire(
              'Data Inserted',
              '',
              'success'
            )
          </script>

        <?php
          unset($_SESSION['success']);
        } else if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        }
        ?>
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" value="<?php
                                              if (isset($_SESSION['name'])) {
                                                echo $_SESSION['name'];
                                                unset($_SESSION['name']);
                                              }
                                              ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <?php
        if (isset($_SESSION['name_error'])) {
          echo $_SESSION['name_error'];
          unset($_SESSION['name_error']);
        }
        ?>


      </div>
      <div class="mb-3">
        <label for="" class="form-label">Mob no.</label>
        <input type="text" name="mob" value="<?php
                                              if (isset($_SESSION['mob']))
                                                echo $_SESSION['mob'];
                                              unset($_SESSION['mob']);
                                              ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <?php
        if (isset($_SESSION['mob_error']))
          echo $_SESSION['mob_error'];
        unset($_SESSION['mob_error']);
        ?>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">E-mail</label>
        <input type="email" name="email" value="<?php
                                                if (isset($_SESSION['email']))
                                                  echo $_SESSION['email'];
                                                unset($_SESSION['email']);
                                                ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <?php
        if (isset($_SESSION['email_error']))
          echo $_SESSION['email_error'];
        unset($_SESSION['email_error']);
        ?>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Address</label>
        <input type="text" name="add" value="<?php
                                              if (isset($_SESSION['add']))
                                                echo $_SESSION['add'];
                                              unset($_SESSION['add']);
                                              ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <?php
        if (isset($_SESSION['add_error']))
          echo $_SESSION['add_error'];
        unset($_SESSION['add_error']);
        ?>
      </div>
      <button type="reset" class="btn btn-warning">Reset</button>
      <a href="view.php" class="btn btn-info">view data</a>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>