<?php
include_once("database.php");
include("avalies.php");
session_start();
lister();

function searsher($search, $con)
{
    if ($search == null) {
        echo "<script>alert('nada foi escrito');</script>";
    } else {
        $research = explode(" ", $search);
        $data = array();
        $query = "SELECT id from tips where title like '%$search%'";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result)){
            $data[] = $row['id'];
        }
        var_dump($data);
        /*$rows = [];
        while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
            $rows[] = $row;
        } */
        if (!empty($data)) {
            return ($data);
        }
        //var_dump($data);
        if (empty($data)) { 
            for ($i = 0; $i < count($research); $i++) {
                $query = "SELECT id from tips where title like '%$research[$i]%'";
                $result = mysqli_query($con, $query);
                $data = mysqli_fetch_all($result);
                if (!empty($data)) {
                    return ($data);
                }
            }
        } else if (empty($data)) {
            return array();
        }
    }
}

function lister()
{
    if (isset($_SESSION['searchList'])) {
        unset($_SESSION['searchList']);
    }
    //$_SESSION['errors'][] = $_SESSION['searchList'];
    $con = connector();
    $search = $_POST['search'];
    $ids = searsher($search, $con);
    //var_dump($ids);
    //$_SESSION['errors'][] = $ids;
    if (empty($ids)) {
        $_SESSION['error'] = "
    <div class='container'>
        <div class='center'>
            <center>
                <h1 style='color: #C7C7C7;'>Nenhum tópico encontrado</h1>
            </center>
        </div>
    </div>";
    } else {
        for ($i = 0; $i < count($ids); $i++) {
            $id = $ids[$i];
            $query = "SELECT title, game, category, situation from tips where id = $id";
            $data = mysqli_fetch_array(mysqli_query($con, $query));
            if ($data[3] = true || $data[3] = 1) {
                popCreator($ids[$i], $data, avalMedia($ids[$i], $con));
            }
        }
    }
    header("Location: ../views/list.php");
}


function popCreator($id, $value, $aval)
{
    $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $_SESSION['tip_id'] = $id;
    $_SESSION['searchList'][] = "</div><div class='row justify-content-center' style='background-color: #4f4f4f; color: #C7C7C7;'>
    <div class='col-md-1'> </div>
    <div class='col-md-3'>
    <a href='../php/postPosition.php' style='color: #C7C7C7;'>$value[0]</a>
    </div>
    <div class='col-md-2'>
    <label style='color: #C7C7C7;'>Jogo:<br/> $value[1]</label>
    </div>
    <div class='col-md-2'>
    <label style='color: #C7C7C7;'>Categoria:<br/> $value[2]</label>
    </div>
    <div class='col-md-2'>
    <label style='color: #C7C7C7;'>Média de Avaliações: $aval</label>
    </div>
    <div class='col-md-2'> </div>
    </div><br/>
    <div class='p-1'/>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
    <div>
        <header>
            <div>
            </div>
        </header>
        <div>
            <?php
            ?>
        </div>
    </div>
</body>

</html>