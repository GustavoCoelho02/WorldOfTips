<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <?php
    include('../php/linkBar.php');
    include("../php/database.php");
    include("../php/avalies.php");

    ?>
</head>

<body style="background-color: #151515;">
    <div>
        <header>
            <div class="container-fluid">
                <?php echo logo(); ?>
                <div class="row justify-content-center p-0" style="background-color: #4f4f4f;">
                    <?php echo linkpos(); ?>
                </div>
            </div>
        </header>
        <div class="content">
            <div class='alterations'>
                <?php
                if (isset($_SESSION['formUser'])) {
                    echo $_SESSION['formUser'];
                }

                ?>
            </div>
            <?php

            //$error = print_r($_SESSION['errors']);
            //echo "<h1 class='text-light'>$error</h1>";
            console_log($_SESSION['errors']);
            echo $_SESSION['topicPage'];
            ?>
        </div>
    </div>
</body>

</html>