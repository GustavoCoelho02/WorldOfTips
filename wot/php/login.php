<?php
include("database.php");
session_start();
$name = $_POST['user'];
$mail = $_POST['mail'];
$pass = md5(trim($_POST['pass']));
function logIn($name, $mail, $pass)
{
    $con = connector();
    //var_dump($con);
    //var_dump($name, $pass);
    $query = "SELECT id, user_name, birthdate, mail, pass, situation, user_type_id from users where user_name = '$name' and pass = '$pass' and mail = '$mail'";
    //var_dump($query);
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_array($result);
    //echo "<pre>";
    //var_dump($data);
    if ($data == mysqli_error($con)) {
        $_SESSION['loged'] = false;
        session_unset();
        session_destroy();
        echo "
        <div class='container'>
            <div class='center'>
                <center>
                <h1 style='color: #C7C7C7;'>Algum erro ococrreu</h1></br>
                <a href='../index.php' style='color: #C7C7C7;'>Retornar à Página Inicial</a>
                </center>
            </div>
        </div>";
        //var_dump(mysqli_error($con));
    } else {
        $_SESSION['loged'] = true; //define a condição de usuário logado
        $_SESSION['user_id'] = $data[0]; //define o id do usuário
        $_SESSION['user_situation'] = $data[5]; //define a se o usuário está banido ou não
        $_SESSION['user_type_id'] = $data[6]; //define o tipo de usuário (logado ou administrador)
        if ($_SESSION['user_situation'] == false) {
            session_unset();
            session_destroy();
            echo "
            <div class='container'>
                <div class='center'>
                    <center>
                    <h1 style='color: #C7C7C7;'>Este usuário está banido</h1></br>
                    <a href='../index.php' style='color: #C7C7C7;'>Retornar à Página Inicial</a>
                    </center>
                </div>
            </div>";
            die;
        }
        header("Location: ../index.php");
    }
}



logIn($name, $mail, $pass);

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