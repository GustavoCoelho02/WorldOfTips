<?php
include("database.php");
session_start();
/*      $_SESSION['loged'] = true;
        $_SESSION['user_id'] = $data[0];
        $_SESSION['user_situation'] = $data[5];
        $_SESSION['user_type_id'] = $data[6];*/
//(id, user_name, birthdate, mail, pass, situation, user_type_id)
$tip_id = $_SESSION['tip_id'];
$con = connector();
$query = "DELETE FROM tips where id = $tip_id";
mysqli_query($con, $query);

$query = "DELETE from avalies where tips_id = $tip_id";
mysqli_query($con, $query);
header("Location: ../index.php");