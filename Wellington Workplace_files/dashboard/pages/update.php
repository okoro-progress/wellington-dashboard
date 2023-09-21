<?php
include "dbh.php";


$id = $_GET['updatedid'];
echo "$id";
$pic_upload = 0;

if (isset($_POST['submit'])) {
// Retrieve form data using $_POST
    $name = $_POST['name'];
    //$picture = $_POST['pic'];
    $testimony = $_POST['testimony'];
    $status = $_POST['stat'];

    //////////////////////////////
    $passport = time() . $_FILES['pic']['name'];
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/wellington/Wellington Workplace_files/dashboard/assets/img/';
    $target_file = $target_dir . $passport;
    $imgfiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_extensions = array("jpg", "jpeg", "png");

    if (!in_array($imgfiletype, $allowed_extensions)) {
        ?>
        <script>
            alert("Please upload an image with png, jpeg, or jpg extension.");
        </script>
        <?php
    } elseif ($_FILES['pic']['size'] > 200000000) {
        echo "Image size is too large.";
    } else {
        if (move_uploaded_file($_FILES['pic']['tmp_name'], $target_file)) {
            $pic_upload = 1;
        }
    }


    if ($pic_upload) {

//////////////////////////////////
    
    $sql = "UPDATE `testimonies` SET name = '$name', status = '$status', testimony_message = '$testimony', picture = '$passport' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
       // echo "Update successful";
        header('location: ../pages/testimony.php');
    } else {
        echo "Error updating the record: " . $conn->error;
    }
  }
} 

?> 

<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>
    Document
  </title>
  <link href="../assets/img/icons/favicon.png" rel="icon" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="bootstrap/js/bootstrap.js"></script>
  
  
</head>
<body>
    

<div class="container">
  <h1>Update Testimonial</h1>
<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Enter name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">testimony</label>
    <input type="textarea" name="testimony" class="form-control" id="exampleInputEmail1"  placeholder="Enter testimony">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">status</label>
    <input type="text" name="stat" class="form-control" id="exampleInputEmail1"  placeholder="Enter status">
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" name="pic" class="form-control" id="exampleInputEmail1"  placeholder="Enter Image">
    
  </div>
  
  
  
  <button name="submit" type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</body>




















