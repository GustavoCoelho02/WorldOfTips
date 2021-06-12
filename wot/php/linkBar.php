<?php
session_start();
$GLOBALS['root'] = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
function linkpos()
{
    $root = $GLOBALS['root'];
    if (isset($_SESSION['loged']) == true) {
        $linkBar = "<nav class='navbar w-100 p-0'>
                        <hr><ul class='nav'>
                            <li class='nav-item'><a href='" . $root . "php/logout.php' class='nav-link' style='color: #C7C7C7;'>Logout </a></li>
                            <label class='nav-link' style='color: #C7C7C7;'> | </label>
                            <li class='nav-item'><a href='" . $root . "views/editRegister.php' class='nav-link' style='color: #C7C7C7;'> Editar Conta </a>
                            </li><label class='nav-link' style='color: #C7C7C7;'> | </label>
                            <li class='nav-item'><a href='" . $root . "views/postcriation.php' class='nav-link' style='color: #C7C7C7;'> Registrar Tópico</a></li>
                        </ul><hr>
                    </nav>";
        return $linkBar;
    } else {
        $linkBar = "<nav class='navbar w-100 p-0'>
                        <hr><ul class='nav'>
                            <li class='nav-item'><a href='" . $root . "views/userlogin.php' class='nav-link' style='color: #C7C7C7;'>Login </a></li>
                            <label class='nav-link' style='color: #C7C7C7;'> | </label>
                            <li class='nav-item'><a href='" . $root . "views/userregister.php' class='nav-link' style='color: #C7C7C7;'> Registrar </a></li>
                            <label class='nav-link' style='color: #C7C7C7;'> | </label>
                            <li class='nav-item'><a href='" . $root . "views/postcriation.php' class='nav-link' style='color: #C7C7C7;'> Registrar Tópico</a></li>
                        </ul><hr>
                    </nav>";
        return $linkBar;
    }
}
function logo()
{
    $root = $GLOBALS['root'];
    $logo = "<div class='row'>
                <div class='col-sm-12' style='background-color: #151515;'><center>
                    <a href='" . $root . "index.php'><img class='rounded img-fluid' src='" . $root . "source/logo-removebg-preview.png'></a>
                    </center>
                </div>
            </div>";
    return $logo;
}
