<?php
include("database.php");
session_start();

$tip_id = $_SESSION['tip_id'];
$user_id = $_SESSION['user_id_owner'];
$title = $_POST['title'];
$game = $_POST['game'];
$category = $_POST['category'];
$content = $_POST['spot'];
$con = connector();
$data = [$title, $game, $category, $content, 1];
$sql = "UPDATE tips 
        set
        title = '$data[0]', 
        game = '$data[1]', 
        category = '$data[2]',
        content = '$data[3]', 
        situation = $data[4] 
        where id = $tip_id";

if (mysqli_query($con, $sql)) {
    console_log('New record created successfully'); //"<script>alert('New record created successfully');</script>";
} else {
    $error = mysqli_error($con);
    console_log("'Error: ' . $data . '<br>' . $error"); //"<script>alert('Error: ' . $data . '<br>' . $error);</script>";
}
header("Location: index.php");
