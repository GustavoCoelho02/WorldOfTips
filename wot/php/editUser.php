<?php
include("database.php");
session_start();

$u_name = $_POST['user_name'];
$age = $_POST['age'];
$mail = $_POST['mail'];
$pass = trim($_POST['pass']);
$c_pass = trim($_POST['c_pass']);
$id = $_SESSION['user_id'];

if ($pass = $c_pass) {
    $con = connector();
    $data = [$u_name, $age, $mail, md5($pass), 1, $_SESSION['user_type_id']];
    $sql = "UPDATE users set user_name = '$data[0]', birthdate = '$data[1]', mail = '$data[2]', pass = '$data[3]', situation = $data[4], user_type_id = $data[5] where id = $id";
    //var_dump($sql);
    if (mysqli_query($con, $sql)) {
        console_log('New record created successfully');
        echo "  
            <div class='container'>
                <div class='center'>
                    <center>
                    <h1 style='color: #C7C7C7;'>Conta de usuário editada com sucesso</h1></br>
                    <a href='../index.php' style='color: #C7C7C7;'>Retornar à Página Inicial</a>
                    </center>
                </div>
            </div>";
        session_unset();
        session_destroy();
    } else {
        $error = mysqli_error($con);
        console_log($error);
        //echo "<script>alert('Error: ' . '<br>' . $error);</script>";
        echo "
        <div class='container'>
            <div class='center'>
                <center>
                <h1 style='color: #C7C7C7;'>Não foi possível editar sua conta</h1></br>
                <a href='../index.php' style='color: #C7C7C7;'>Retornar à Página Inicial</a>
                </center>
            </div>
        </div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body style="background-color: #151515;">
</body>

</html>