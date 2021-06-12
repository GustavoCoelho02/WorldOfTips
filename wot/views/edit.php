<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                    <form action="../php/updatePost.php" class="form-group" method="post">
                        <input type="text" name="title" placeholder="Título do Tópico" class="form-control" required><br />
                        <input type="text" name="game" placeholder="Nome do Jogo" class="form-control" required><br />
                        <input type="text" name="category" placeholder="Categoria" class="form-control" required><br />
                        <textarea name='spot' cols='50' rows='10' class="form-control"></textarea><br />
                        <center>
                            <input type="submit" value="Editar" class="btn" style='background-color: #4f4f4f; color: #C7C7C7;'>
                        </center>
                    </form>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>