<?php
    session_start();
    include("database.php");
    $user_id = $_SESSION['user_id'];
    //var_dump($user_id);
	$title = $_POST['title'];
	$game = $_POST['game'];
	$category = $_POST['category'];
	$content = $_POST['spot'];
    $con = connector();
    $forReplace = array('"', "'");
    $replace = array("§", "¬");
    $trueContent = str_replace($forReplace, $replace, $content);
    $sql = "INSERT INTO tips(users_id, title, game, category, content, situation) values ($user_id,'$title','$game','$category','$trueContent', 1)";
    $result = mysqli_query($con, $sql);
    //var_dump($result, $sql);
    if ($result) {
        console_log('New record created successfully'); //"<script>alert('New record created successfully');</script>";
        header("Location: ../index.php");
    } else {
        $error = mysqli_error($con);
        echo("'Error: <br>' . $error"); //"<script>alert('Error: ' . $data . '<br>' . $error);</script>";
    }
    mysqli_close($con);