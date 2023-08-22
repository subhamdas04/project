<?php
    $relDate = $_GET['p'];
    $brandName = $_GET['r'];
    $deviceName = $_GET['q'];
    $uploadDate = date('d-m-Y');

    $con = mysqli_connect("localhost", "root", "", "latestphones");
    $sql = "INSERT INTO basics (uploadDate, brand, deviceName, releaseDate) VALUES ('$uploadDate', '$brandName', '$deviceName', '$relDate')";

    if(mysqli_query($con, $sql)){
        echo "success";
    }else{
        echo "failed";
    }
?>