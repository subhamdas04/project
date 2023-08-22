<?php
    $verdict = $_GET['p'];

    $con = mysqli_connect("localhost", "root", "", "latestphones");
    $sql = "INSERT INTO verdict (verdict) VALUES ('$verdict')";

    if(mysqli_query($con, $sql)){
        echo "success";
    }else{
        echo "failed";
    }
?>