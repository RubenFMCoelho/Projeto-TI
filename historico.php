<?php
$nome_temperatura = file_get_contents("api/files/temperatura/nome.txt");
$valor_temperatura = file_get_contents("api/files/temperatura/valor.txt");
$hora_temperatura = file_get_contents("api/files/temperatura/hora.txt");

$nome_luminosidade = file_get_contents("api/files/luminosidade/nome.txt");
$valor_luminosidade = file_get_contents("api/files/luminosidade/valor.txt");

$nome_estacionamento = file_get_contents("api/files/estacionamento/nome.txt");
$valor_estacionamento = file_get_contents("api/files/estacionamento/valor.txt");
$hora_estacionamento = file_get_contents("api/files/estacionamento/hora.txt");

$nome_radar = file_get_contents("api/files/radar/nome.txt");
$valor_radar = file_get_contents("api/files/radar/valor.txt");

$nome_humidade = file_get_contents("api/files/humidade/nome.txt");
$valor_humidade = file_get_contents("api/files/humidade/valor.txt");

$nome_poluicao = file_get_contents("api/files/poluicao/nome.txt");
$valor_poluicao = file_get_contents("api/files/poluicao/valor.txt");

$nome_semaforo = file_get_contents("api/files/semaforo/nome.txt");
$valor_semaforo = file_get_contents("api/files/semaforo/valor.txt");
$hora_semaforo = file_get_contents("api/files/semaforo/hora.txt");
$data_semaforo = file_get_contents("api/files/semaforo/data.txt");

$nome_barreira = file_get_contents("api/files/barreira/nome.txt");
$valor_barreira = file_get_contents("api/files/barreira/valor.txt");
$hora_barreira = file_get_contents("api/files/barreira/hora.txt");
$data_barreira = file_get_contents("api/files/barreira/data.txt");

$nome_fechadura = file_get_contents("api/files/fechadura/nome.txt");
$valor_fechadura = file_get_contents("api/files/fechadura/valor.txt");
$hora_fechadura = file_get_contents("api/files/fechadura/hora.txt");
$data_fechadura = file_get_contents("api/files/fechadura/data.txt");

$nome_postes = file_get_contents("api/files/postes/nome.txt");
$valor_postes = file_get_contents("api/files/postes/valor.txt");
$hora_postes = file_get_contents("api/files/postes/hora.txt");
$data_postes = file_get_contents("api/files/postes/data.txt");

$nome_valvula = file_get_contents("api/files/valvula/nome.txt");
$valor_valvula = file_get_contents("api/files/valvula/valor.txt");
$hora_valvula = file_get_contents("api/files/valvula/hora.txt");
$data_valvula = file_get_contents("api/files/valvula/data.txt");

$nome_ponte = file_get_contents("api/files/ponte/nome.txt");
$valor_ponte = file_get_contents("api/files/ponte/valor.txt");
$hora_ponte = file_get_contents("api/files/ponte/hora.txt");
$data_ponte = file_get_contents("api/files/ponte/data.txt");


/* -----------------------Warnings----------------------- */

//$warning1 = file_get_contents("api/files/estacionamento/warning.txt");
$username = $_SESSION['username'];
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
<!--------------------------------------------Navbar-------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
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
                    <a class="nav-link active" href="#">Histórico</a>
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
<!--------------------------------------------Sensores-------------------------------------------->
<br>
<hr>
<h2 style="text-align: center;">Sensores</h2>
<hr>
<div class="container">
    <div class="row">

        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/temperature.png" alt="termometro">
            <div class="card-body">
                <h6 class="card-title">Temperatura</h6>
                <p class="card-text"><?php echo $valor_temperatura ?>º</p>
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=temperatura">Temperatura</a>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/dia.png" alt="">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_luminosidade ?></h6>
                <p class="card-text"><?php echo $valor_luminosidade ?></p>
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=luminosidade">Luminosidade</a>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/humidade.png" alt="">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_humidade ?></h6>
                <p class="card-text"><?php echo $valor_humidade ?>%</p>
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=humidade">Humidade</a>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/estacionamento.png" alt="">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_estacionamento ?></h6>
                <p class="card-text"><?php echo $valor_estacionamento ?> Lugares</p>
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=estacionamento">Estacionamento</a>
            </div>
        </div>

        <div class="card" style="width:180px; margin:20px; text-align:center;">
            <img class="card-img-top" src="./img/radar.jpg" alt="">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_radar ?></h6>
                <p class="card-text"><?php echo $valor_radar ?> Km/h</p>
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=radar">Radar Velocidade</a>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center;">
            <img class="card-img-top" src="./img/poluicao.png" alt="">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_poluicao ?></h6>
                <p class="card-text"><?php echo $valor_poluicao ?></p>
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=poluicao">Nevel de CO</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------------------------Atuadores-------------------------------------------->
<br>
<hr>
<h2 style="text-align: center;">Atuadores</h2>
<hr>
<br>

<div class="container">
    <div class="row">

        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/ponte.jpg" alt="ponte">
            <div class="card-body">
                <h6 class="card-title">Ponte</h6>
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=ponte">Ponte Movel</a>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/fechadura.png" alt="fechadura">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_fechadura ?></h6>
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=fechadura">Fechadura</a>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/barreira.png" alt="barreira">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_barreira ?></h6>
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=barreira">Barreira de Transito</a>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/semaforo.png" alt="semaforo">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_semaforo ?></h6>
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=semaforo">Semaforo</a>
            </div>
        </div>

        <div class="card" style="width:180px; margin:20px; text-align:center;">
            <img class="card-img-top" src="./img/valvula.jpg" alt="valvula">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_valvula ?></h6>
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=valvula">Valvula</a>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center;">
            <img class="card-img-top" src="./img/poste.png" alt="poste">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_postes ?></h6>
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=postes">Postes de luz</a>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------Funcao Historico-------------------------------------------->


<?php

tabela_generico($filepath);

function tabela_generico($filepath)
{
    $file = file_get_contents($filepath);
    $file = explode(PHP_EOL, $file);
    echo '<table class="table" style="text-align: center; width: 75%;">
    <thead>
    <tr>
        <td>Data</td>
        <td>Valor</td>
        <td>Hora de acesso</td>
    </tr>
    </thead>
    <tbody>';
    foreach ($file as $line) {
        echo "<tr>";
        $line2 = explode(';', $line);
        foreach ($line2 as $part) {
            echo "<td> $part </td>";
        }
        //echo $line2;
        echo "</tr>";
    }

    echo '</tbody>
</table>';
} ?>
</html>