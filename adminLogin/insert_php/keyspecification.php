<?php
    $price = $_GET['p'];
    $processor = $_GET['q'];
    $battery = $_GET['r'];
    $ram = $_GET['s'];
    $rom = $_GET['t'];
    $backCam = $_GET['u'];
    $frontCam = $_GET['v'];
    $os = $_GET['w'];
    $screenSize = $_GET['x'];

    $con = mysqli_connect("localhost", "root", "", "latestphones");
    $sql = "INSERT INTO keyspecifications (price, processor, battery, ram, rom, backCam, frontCam, os, screenSize) VALUES ('$price', '$processor', '$battery', '$ram', '$rom', '$backCam', '$frontCam', '$os', '$screenSize')";

    if(mysqli_query($con, $sql)){
        echo "success";
    }else{
        echo "failed";
    }
?>