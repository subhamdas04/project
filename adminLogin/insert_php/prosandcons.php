<?php
    $pro1 = $_GET['p'];
    $pro2 = $_GET['q'];
    $pro3 = $_GET['r'];
    $pro4 = $_GET['s'];
    $con1 = $_GET['t'];
    $con2 = $_GET['u'];
    $con3 = $_GET['v'];
    $con4 = $_GET['w'];

    $con = mysqli_connect("localhost", "root", "", "latestphones");
    $sql = "INSERT INTO prosandcons (pro1, pro2, pro3, pro4, con1, con2, con3, con4) VALUES ('$pro1', '$pro2', '$pro3', '$pro4', '$con1', '$con2', '$con3', '$con4')";

    if(mysqli_query($con, $sql)){
        echo "success";
    }else{
        echo "failed";
    }
?>