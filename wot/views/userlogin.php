<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <?php
    include('../php/linkBar.php');
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
                    <form action="../php/login.php" class="form-group" method="post">
                        <input type="text" name="user" placeholder="Nome de Usuário" class="form-control" required><br />
                        <input type="email" name="mail" placeholder="E-Mail" class="form-control" required><br />
                        <input type="password" name="pass" placeholder="Senha" class="form-control" required><br />
                        <center>
                            <input type="submit" value="Logar" class="btn" style='background-color: #4f4f4f; color: #C7C7C7;'>
                        </center>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>