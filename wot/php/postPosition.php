<?php
include("database.php");
include("avalies.php"); //checarr se o mesmo usuário já avaliou
session_start();
if (!isset($_SESSION['errors'])) {
    $_SESSION['errors'] = array();
}

function postData($id)
{
    $query = array();
    $con = connector();
    $query = "SELECT users_id, title, game, category, content, situation from tips where id = $id";
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_array($result);
    return $data;
}
function avalCheck()
{
    $tip_id = $_SESSION['tip_id'];
    $user_id = $_SESSION['user_id'];
    $con = connector(); //primeiro verificar se já n foi avaliado
    $query = "SELECT aval from avalies where tips_id = $tip_id and users = $user_id";
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_array($result);
    if ($data != null) {
        return avalMedia($tip_id, $con);
    } else {
        return null;
    }
}
//código para posicionar os dados
dataPositon(); // página post vai chamar
function dataPositon()
{
    $con = connector(); //mudar tudo
    $id = $_SESSION['tip_id'];
    $data = postData($id);
    $_SESSION['user_id_owner'] = $data[0];
    $title = $data[1];
    $game = $data[2];
    $category = $data[3];
    $dataContent = $data[4];
    $forReplace = array('"', "'");
    $replace = array("§", "¬");
    $content = str_replace($replace, $forReplace, $dataContent);
    $situation = $data[5];
    if ($situation == 0) {
        $_SESSION['topicPage'] = "<label style='color: #C7C7C7;'>Página Banida</Label>";
        formLogued(0);
        header("Location: ../views/post.php");
    } else {
        $query = "SELECT user_name from users where id = $data[0]";
        $user = mysqli_fetch_row(mysqli_query($con, $query));
        if ($_SESSION['loged'] == true && ($_SESSION['user_id'] == $data[0] || $_SESSION['user_type_id'] == 1)) {
            formLogued(1);
        }
        if ($_SESSION['loged'] == true) {
            if ((avalCheck()) || (tipOwner($_SESSION['user_id'], $_SESSION['tip_id']))) {
                $aval = avalCheck();
                if ($aval == null) {
                    $aval = 0;
                }
                $page = "<div class='container-fluid'>
                <div class='row' style='background-color: #151515;'>
                    <div class='col-md-3'>
                        <label style='color: #C7C7C7;'>$user[0]</label>
                    </div>
                    <div class='col-md-6'>
                        <label style='color: #C7C7C7;'>$title</label>
                        <div class='classification'>
                        <label style='color: #C7C7C7;'>#$game  #$category</label>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <label style='color: #C7C7C7;'>Média de Avaliações: $aval</label>
                    </div>
                </div>
                <div class='row justify-content-center vh-100'>
                <div class='col-md-2' style='background-color: #151515;'></div>
                <div class='col-md-8' style='background-color: #4f4f4f;'>
                <pre>
                    <p style='color: #C7C7C7;
                    word-wrap: break-word;'>$content</p>
                </pre>    
                </div>
                <div class='col-md-2' style='background-color: #151515;'></div>
                </div>
            </div>";
            } else {
                $page = "<div class='container-fluid'>
                <div class='row' style='background-color: #151515;'>
                    <div class='col-md-3'>
                        <label style='color: #C7C7C7;'>$user[0]</label>
                    </div>
                    <div class='col-md-6'>
                        <label style='color: #C7C7C7;'>$title</label>
                        <div class='classification'>
                            <label style='color: #C7C7C7;'>#$game  #$category</label>
                        </div>
                    </div>
                    
                    <div class='col-md-3'>
                    <div class='row justify-content-center'>
                        <form action='php/avalier.php' method='post'>
                            <input type='hidden' name='avaliate' value='1'>
                            <input type='submit' class='btn aval' value=''>
                        </form>
                        <form action='php/avalier.php' method='post'>
                            <input type='hidden' name='avaliate' value='2'>
                            <input type='submit' class='btn aval' value=''>
                        </form>
                        <form action='php/avalier.php' method='post'>
                            <input type='hidden' name='avaliate' value='3'>
                            <input type='submit' class='btn aval' value=''>
                        </form>
                        <form action='php/avalier.php' method='post'>
                            <input type='hidden' name='avaliate' value='4'>
                            <input type='submit' class='btn aval' value=''>
                        </form>
                        <form action='php/avalier.php' method='post'>
                            <input type='hidden' name='avaliate' value='5'>
                            <input type='submit' class='btn aval' value=''>
                        </form>
                    </div>    
                    </div>
                </div>
                <div class='row justify-content-center vh-100'>
                <div class='col-md-2' style='background-color: #151515;'></div>
                <div class='col-md-8' style='background-color: #4f4f4f;'>
                <pre>
                    <p style='color: #C7C7C7;
                    word-wrap: break-word;'>$content</p>
                </pre>   
                </div>
                <div class='col-md-2' style='background-color: #151515;'></div>
                </div>
            </div>";
            }
            $_SESSION['topicPage'] = $page;
            header("Location: ../views/post.php");
        } else {
            $aval = avalMedia($id, $con);
            $page = "<div class='container-fluid'>
                <div class='row' style='background-color: #151515;'>
                    <div class='col-md-3'>
                        <label style='color: #C7C7C7;'>$user[0]</label>
                    </div>
                    <div class='col-md-6'>
                        <label style='color: #C7C7C7;'>$title</label>
                        <div class='classification'>
                            <label style='color: #C7C7C7;'>#$game  #$category</label>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <label style='color: #C7C7C7;'>Média de Avaliações: $aval</label>
                    </div>
                </div>
                <div class='row justify-content-center vh-100'>
                <div class='col-md-2' style='background-color: #151515;'></div>
                <div class='col-md-8' style='background-color: #4f4f4f;'>
                <pre>
                    <p style='color: #C7C7C7;
                    word-wrap: break-word;'>$content</p>
                </pre>   
                </div>
                <div class='col-md-2' style='background-color: #151515;'></div>
                </div>
            </div>";
            $_SESSION['topicPage'] = $page;
            header("Location: ../views/post.php");
        }
    }
}

function tipOwner($user_id, $tip_id)
{
    $con = connector();
    $query = "SELECT * FROM tips where id = $tip_id and users_id = $user_id";
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_array($result);
    if ($data != null) {
        return true;
    } else {
        return false;
    }
}

function formLogued($situation)
{
    if ($situation == 1) {
        if ($_SESSION['user_type_id'] == 1) { //permissôes de administrador
            $form = "<div class='p-1'></div>
                    <div class='container-fluid'>
                        <div class='row justify-content-center'>
                            <div class='exclude'>
                                <form action='php/exclude.php' method='post'>
                                    <input type='submit' class='btn' style='background-color: #4f4f4f; color: #C7C7C7;' value='excluir'>
                                </form>
                            </div>
                            <div class='edit'>
                                <form action='views/edit.php' method='post'>
                                    <input type='submit' class='btn' style='background-color: #4f4f4f; color: #C7C7C7;' value='editar'>
                                </form>
                            </div>
                            <div class='ban'>
                                <form action='php/ban.php' method='post'>
                                    <input type='submit' class='btn' style='background-color: #4f4f4f; color: #C7C7C7;' value='banir'>
                                </form>
                            </div>
                            <div class='unban'>
                                <form action='php/unban.php' method='post'>
                                    <input type='submit' class='btn' style='background-color: #4f4f4f; color: #C7C7C7;' value='desbanir'>
                                </form>
                            </div>
                        </div>
                    </div>";
            $_SESSION['formUser'] = $form;
        } elseif ($_SESSION['user_type_id'] == 2 and tipOwner($_SESSION['user_id'], $_SESSION['tip_id'])) { //permissões de usuários logados
            $form = "<div class='p-1'></div>
                    <div class='container-fluid'>
                        <div class='row justify-content-center'> 
                            <div class='exclude'>
                                <form action='../php/exclude.php' method='post'>
                                    <input type='submit' class='btn' style='background-color: #4f4f4f; color: #C7C7C7;' value='excluir'>
                                </form>
                            </div>
                            <div class='edit'>
                                <form action='edit.php' method='post'>
                                    <input type='submit' class='btn' style='background-color: #4f4f4f; color: #C7C7C7;' value='editar'>
                                </form>
                            </div>
                        </div>
                    </div>";
            $_SESSION['formUser'] = $form;
        } else {
            $_SESSION['errors'] = $_SESSION['user_type_id'];
        }
    } else {
        $_SESSION['errors'] = $_SESSION['user_type_id'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
</body>

</html>