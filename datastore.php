<?php 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['message'];
    include('db_connect.php');
    $qry = mysqli_query($connection,"INSERT INTO contact_details (First_name,Last_name,Email,Phone,Message) VALUES ('$first_name','$last_name','$email','$phone','$msg')");
    echo $qry;
?>