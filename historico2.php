<?php

/*$nome_temperatura = file_get_contents("api/files/temperatura/nome.txt");
$valor_temperatura = file_get_contents("api/files/temperatura/valor.txt");
$hora_temperatura = file_get_contents("api/files/temperatura/hora.txt");

$nome_luminosidade = file_get_contents("api/files/luminosidade/nome.txt");
$valor_luminosidade = file_get_contents("api/files/luminosidade/valor.txt");

$nome_estacionamento = file_get_contents("api/files/estacionamento/nome.txt");
$valor_estacionamento = file_get_contents("api/files/estacionamento/estado.txt");
$hora_estacionamento = file_get_contents("api/files/estacionamento/hora.txt");

$warning_estado_tempo = file_get_contents("api/files/estado_tempo/warning.txt");
$nome_estado_tempo = file_get_contents("api/files/estado_tempo/nome.txt");
$valor_estado_tempo = file_get_contents("api/files/estado_tempo/valor.txt");

$nome_humidade = file_get_contents("api/files/humidade/nome.txt");
$valor_humidade = file_get_contents("api/files/humidade/valor.txt");

$nome_poluicao = file_get_contents("api/files/poluicao/nome.txt");
$valor_poluicao = file_get_contents("api/files/poluicao/valor.txt");


/* -----------------------variavel com localizacao dos logs----------------------- */
$username = $_SESSION['username'];

$nome = $_GET['nome'];

$filepath = "api/files/" . $nome . "/log.txt";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="10">
    <title>Cidade Inteligente</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1909/1909849.png" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>

        .selector-for-some-widget {
            box-sizing: content-box;

    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>


</body>
<!--------------------------------------------navbar-------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://127.0.0.1/ti/dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="http://127.0.0.1/ti/historico.php">Histórico</a>
                </li>
            </ul>
            <form class="d-flex">
                <a class="btn btn-outline-success" type="submit" href="http://127.0.0.1/ti/logout.php">Logout</a>
            </form>
        </div>
    </div>
</nav>
<!--------------------------------------------Header-------------------------------------------->

<header style="margin: 0">
    <div class="container">

        <div class="card">
            <div class="card-body">
                <img src="./img/cidade.png" class="float-end" alt="estg" width="300px">
                <h1 class="card-title">Cidade Inteligente</h1>
                <h2>Marinha Grande</h2>
                <p class="card-text"></p>
                <p class="card-text">Tecnologias de Internet - Engenharia Informática</p>

            </div>
        </div>
    </div>
</header>
<br>
<h2 style="text-align: center">Historico</h2>
<br>
<hr>
<br>
<br>

<?php

tabela_generico($filepath);
//--------------------------------------------Funcao table, explode no fim de linha(PHP_EOL) e em ; --------------------------------------------

function tabela_generico($filepath)
{
    $file = file_get_contents($filepath);
    $file = explode(PHP_EOL, $file);
    echo '<table class="table" style="margin-right: auto; margin-left: auto; width: 50%;">
    <thead>
    <tr>
        <td><b>Data</b></td>
        <td><b>Valor</b></td>
        <td><b>Hora</b></td>
    </tr>
    </thead>
    <tbody>';
    foreach ($file as $line) {
        echo "<tr>";
        $line2 = explode(';', $line);
        foreach ($line2 as $part) {
            echo "<td> $part </td>";
        }
        echo "</tr>";
    }

    echo '</tbody>
</table>';
} ?>
</html>