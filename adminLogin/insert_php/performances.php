<?php
    $chipset = $_GET['p'];
    $cores = $_GET['q'];
    $cpu = $_GET['r'];
    $architecture = $_GET['s'];
    $fabrication = $_GET['t'];
    $ram = $_GET['u'];
    $ramType = $_GET['v'];
    $graphics = $_GET['w'];

    $con = mysqli_connect("localhost", "root", "", "latestphones");
    $sql = "INSERT INTO keyspecifications (chipset, cores, cpu, architecture, fabrication, ram, ramType, graphics) VALUES ('$chipset', '$cores', '$cpu', '$architecture', '$fabrication', '$ram', '$ramType', '$graphics')";

    if(mysqli_query($con, $sql)){
        echo "success";
    }else{
        echo "failed";
    }
?>