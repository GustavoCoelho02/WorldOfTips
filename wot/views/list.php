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
                    <?php echo linkpos();
                    ?>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="p-5"></div>
            <?php //print_r($_SESSION['searchList']);
            include('../php/database.php');
            if (isset($_SESSION['searchList'])) {
                console_log($_SESSION['searchList']);
                foreach ($_SESSION['searchList'] as $list) {
                    //console_log($_SESSION['errors']);
                    echo $list;
                }
            } else {
                print_r($_SESSION['error']);
                //print_r($_SESSION['errors']);
            }

            ?>
        </div>
        <div>

        </div>
    </div>
</body>

</html>
