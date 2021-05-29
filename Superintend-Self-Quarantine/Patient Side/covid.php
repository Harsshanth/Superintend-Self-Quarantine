<?php
    include("connection.php");

    $date = $_POST["date"];
    $testpin = $_POST["testpin"];
    setcookie("test_pin", $testpin, time() + (86400 * 30), "/");
    setcookie("date_v", $date, time() + (86400 * 30), "/");

    header("Location: covidtesthospital.php");

?>