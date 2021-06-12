<?php
include("database.php");
session_start();

$tip_id = $_SESSION['tip_id'];
$con = connector();
$query = "UPDATE tips set situation = 0 where id = $tip_id";
mysqli_query($con, $query);
$query = "UPDATE avalies set situation = 0 where tips_id = $tip_id";
mysqli_query($con, $query);
header("Location: ../index.php");