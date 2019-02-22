<?php
    $subscriber = $_POST['subscriber'];
    include('db_connect.php');
    $qry = mysqli_query($connection,"INSERT INTO subscriber_details (Email) VALUES ('$subscriber')");
    echo $qry;
?>