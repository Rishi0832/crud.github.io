<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<div class="container mt-5">
    <div class="row">
        <div class="col">

<?php
include('connection.php');

$sql = "SELECT * FROM `rishi_table`";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){

    $data = '';
    $i =0;

    while($row = mysqli_fetch_assoc($result)){
        $i++;

        $data .= '<tr>
        <th>'.$i.'</th>
        <th>'.$row['name'].'</th>
        <th>'.$row['mobile'].'</th>
        <th>'.$row['email'].'</th>
        <th>'.$row['address'].'</th>
        <th><a class="btn btn-primary" href="edit.php?id='.$row['cid'].'">Edit</a></th>
        <th><a class="btn btn-danger" href="delete.php?id='.$row['cid'].'">Delete</a></th>
        </tr>';
    }
}



?>

            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>cid</th>
                    <th>Name</th>
                    <th>Mob no.</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php 
                if(isset($data)){
                    echo $data;
                }else{
                echo '<tr><th class="text-center" colspan="7">No Data Found</th></tr>';
                }
                 ?>
            </table>
        </div>
    </div>
</div>