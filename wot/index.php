<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <?php
    include('php/linkBar.php');
    ?>
</head>

<body style="background-color: #151515;">
    <header>
        <div class="conteiner-fluid">
            <?php echo logo(); ?>
            <div class="row justify-content-center p-0" style="background-color: #4f4f4f;">
                <?php echo linkpos();
                //var_dump(isset($_SESSION['loged']));
                ?>
            </div>
        </div>
    </header>
    <div class="container-fluid mh-100">
        <div class="p-5"></div>
        <center>
            <form action="php/search.php" class="form-row" method="post">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <input type="text" name="search" placeholder="Pesquisar" style="width: 100%;" class="form-control">
                </div>
                <div class="col-md-1">
                    <input type="submit" id="bt_resarch" class="btn" value="">
                </div>
                <div class="col-md-2"></div>
            </form>
        </center>
    </div>
    </div>
</body>

</html>