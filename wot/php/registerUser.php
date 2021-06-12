<?php
include("database.php"); //criar bootstrap pra quando der ruim

$u_name = $_POST['user_name'];
$age = $_POST['age'];
$mail = $_POST['mail'];
$pass = trim($_POST['pass']);
$c_pass = trim($_POST['c_pass']);
validates($u_name, $age, $mail, $pass, $c_pass);
function validates($u_name, $age, $mail, $pass, $c_pass)
{
    if ((!isset($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL))) {
        echo "E-mail inválido
        <a href='../index.php'>Retornar à página</a>";
        die;
    } else {
        $con = connector();
        $query = "SELECT * from users where mail = '$mail'";
        $data = mysqli_query($con, $query);
        if (!$data) {
            echo "
        <div class='container'>
            <div class='center'>
                <center>
                <h1 style='color: #C7C7C7;'>E-mail inválido</h1></br>
                <a href='../index.php' style='color: #C7C7C7;'>Retornar à Página Inicial</a>
                <center>
            </div>
        </div>";
            die;
        }
    }


    if ($pass == $c_pass) {
        $con = connector();
        $data = [$u_name, $age, $mail, md5($pass), 1, 2];
        $sql = "INSERT INTO users(user_name, birthdate, mail, pass, situation, user_type_id) values ('$data[0]', '$data[1]', '$data[2]', '$data[3]', $data[4], $data[5])";
        //var_dump($sql);
        if (mysqli_query($con, $sql)) {
            console_log('New record created successfully');
            echo "
            <div class='container'>
                <div class='center'>
                    <center>
                    <h1 style='color: #C7C7C7;'>Usuário criado com sucesso</h1></br>
                    <a href='../index.php' style='color: #C7C7C7;'>Retornar à Página Inicial</a>
                    </center>
                </div>
            </div>";
        } else {
            $error = mysqli_error($con);
            console_log($error);
            //echo "<script>alert('Error: ' . '<br>' . $error);</script>";
            echo "
            <div class='container'>
                <div class='center'>
                    <center>
                    <h1 style='color: #C7C7C7;'>Não foi possível criar sua conta</h1></br>
                    <a href='../index.php' style='color: #C7C7C7;'>Retornar à Página Inicial</a>
                    </center>
                </div>
            </div>";
        }
    }
}

//id do type é estrangeira no user
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body style="background-color: #151515;">

</body>

</html>