<?php
include("database.php");
session_start();


avalImput();
function avalImput()
{
    $aval = $_POST['avaliate'];
    $tip_id = $_SESSION['tip_id'];
    $user_id = $_SESSION['user_id'];
    $con = connector();
    $query = "INSERT INTO avalies(tips_id, users, aval, situation) values ($tip_id, $user_id, $aval, 1)";
    $result = mysqli_query($con, $query);
    var_dump($result);
    header("Location: ../index.php");
}
