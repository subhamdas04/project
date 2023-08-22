<?php
    $processorChipset = $_GET['p'];
    $ram = $_GET['q'];
    $rearCam = $_GET['r'];
    $internamMemory = $_GET['s'];
    $screenSize = $_GET['t'];
    $battery = $_GET['u'];

    $con = mysqli_connect("localhost", "root", "", "latestphones");
    $sql = "INSERT INTO detailedspecifications (processorChipset, ram, rearCam, internamMemory, screenSize, battery) VALUES ('$processorChipset', '$ram', '$rearCam', '$internamMemory', '$screenSize', '$battery')";

    if(mysqli_query($con, $sql)){
        echo "success";
    }else{
        echo "failed";
    }
?>