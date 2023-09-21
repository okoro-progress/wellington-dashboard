<?php
include "dbh.php";


$e_mail = $_GET['peopemail'];
echo "$e_mail";


if (isset($_POST['submit'])) {
    // Retrieve form data using $_POST
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to_email = "progressewokoro@gmail.com";

    $sent = mail($email, $subject, $message);
    if ($sent) {
        echo'<div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong> message sent.
    </div> ';
    }


    // Use a prepared statement to update the specific row

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
        <h1>Send Email</h1>
        <form method="post" >
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" value="WELLINGTON" name="name" placeholder="Enter name">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" value="<?php echo $e_mail; ?>" name="email"
                    placeholder="Enter Email">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <input type="text" class="form-control" value="relpy from WELLINGTON" name="subject"
                    placeholder="Enter Subject">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Message</label>
                <textarea id="" cols="30" rows="5" name="message" class="form-control"></textarea>

            </div>

            <!-- <div class="form-group">
    <label for="exampleInputEmail1">profile</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter picture">
    
            </div> -->


            <button name="submit"  type="submit" class="btn btn-primary">Send</button>


            
        </form>
    </div>
</body>