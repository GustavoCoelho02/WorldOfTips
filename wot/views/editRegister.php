<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <?php
    include('../php/linkBar.php');
    include('../php/database.php');
    $id = $_SESSION['user_id'];
    $con = connector();
    $query = "SELECT user_name, birthdate, mail from users where id = $id";
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_array($result);
    $form = "<form action='../php/editUser.php' class='form-group' method='post'>
            <input type='text' name='user_name' placeholder='$data[0]' class='form-control' required><br/>
            <input type='date' name='age' placeholder='$data[1]' class='form-control' required><br/>
            <input type='email' name='mail' placeholder='$data[2]' class='form-control' required><br/>
            <input type='password' name='pass' placeholder='Senha' class='form-control' required><br/>
            <input type='password' name='c_pass' placeholder='Confirmação' class='form-control' required><br/>
            <center>
                <input type='submit' value='Atualizar' class='btn' style='background-color: #4f4f4f; color: #C7C7C7;'>
            </center>
        </form>";
    ?>
</head>

<body style="background-color: #151515;">
    <div>
        <header>
            <div class="conteiner-fluid">
                <?php echo logo(); ?>
                <div class="row justify-content-center p-0" style="background-color: #4f4f4f;">
                    <?php echo linkpos(); ?>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="p-5"></div>
            <div class="row justify-content-center">
                <div>
                    <?php echo $form; ?>
                </div>
            </div>
        </div>

    </div>
</body>

</html>