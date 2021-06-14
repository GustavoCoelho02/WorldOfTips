<?php

/* cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT identificador, nome, telefone FROM cadastro");
// executa a query
$dados = mysqli_query($query, connector()) or die(mysqli_error($query));
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>

função para redirecionamento de página após login e logoff
function setReplace(){
    $url = $_SERVER['SCRIPT_NAME'];
    $_SESSION['currentPage'] = $url;
}

function replace(){
    $page = $_SESSION['currentPage'];
    header("Location: $page");
}
@font-face {
  font-family: "Still-6-but-almost-7";
  src: url('https://cdn.jsdelivr.net/gh/ErvinsS/maketrumpjsagain@latest/css/Still-6-but-almost-7.ttf');
}

html, * {
font-family: "Still-6-but-almost-7" !important;
}
/*