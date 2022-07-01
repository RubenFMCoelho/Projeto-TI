<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("refresh:5;url=index.php");
    die("Acesso restrito.");
}
$nome_temperatura = file_get_contents("api/files/temperatura/nome.txt");
$valor_temperatura = file_get_contents("api/files/temperatura/valor.txt");
$hora_temperatura = file_get_contents("api/files/temperatura/hora.txt");
$data_temperatura = file_get_contents("api/files/temperatura/data.txt");

$nome_luminosidade = file_get_contents("api/files/luminosidade/nome.txt");
$valor_luminosidade = file_get_contents("api/files/luminosidade/valor.txt");
$hora_luminosidade = file_get_contents("api/files/luminosidade/hora.txt");
$data_luminosidade = file_get_contents("api/files/luminosidade/data.txt");

$nome_estacionamento = file_get_contents("api/files/estacionamento/nome.txt");
$valor_estacionamento = file_get_contents("api/files/estacionamento/valor.txt");
$hora_estacionamento = file_get_contents("api/files/estacionamento/hora.txt");
$data_estacionamento = file_get_contents("api/files/estacionamento/data.txt");

$nome_radar = file_get_contents("api/files/radar/nome.txt");
$valor_radar = file_get_contents("api/files/radar/valor.txt");
$hora_radar = file_get_contents("api/files/radar/hora.txt");
$data_radar = file_get_contents("api/files/radar/data.txt");


$nome_humidade = file_get_contents("api/files/humidade/nome.txt");
$valor_humidade = file_get_contents("api/files/humidade/valor.txt");
$hora_humidade = file_get_contents("api/files/humidade/hora.txt");
$data_humidade = file_get_contents("api/files/humidade/data.txt");

$nome_poluicao = file_get_contents("api/files/poluicao/nome.txt");
$valor_poluicao = file_get_contents("api/files/poluicao/valor.txt");
$hora_poluicao = file_get_contents("api/files/poluicao/hora.txt");
$data_poluicao = file_get_contents("api/files/poluicao/data.txt");

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

$username = $_SESSION['username'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="10">
    <title>Cidade Inteligente</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1909/1909849.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>

        .selector-for-some-widget {
            box-sizing: content-box;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }


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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                <p class="card-text">Bem vindo <b><?php echo $username ?></b></p>
                <p class="card-text">Tecnologias de Internet - Engenharia Informática</p>

            </div>
        </div>
    </div>
</header>
<!--------------------------------------------Atuadores-------------------------------------------->
<br>
<hr>
<h2 style="text-align: center">Atuadores</h2>
<hr>
<div class="container">
    <div class="row">

        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/semaforo.png" alt="semaforo">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_semaforo ?></h6>
                <p class="card-text"><?php echo $valor_semaforo ?></p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/barreira.png" alt="">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_barreira ?></h6>
                <p class="card-text"><?php echo $valor_barreira ?></p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/fechadura.png" alt="">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_fechadura; ?></h6>
                <p class="card-text"><?php echo $valor_fechadura ?></p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/valvula.jpg" alt="">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_valvula ?></h6>
                <p class="card-text"><?php echo $valor_valvula ?></p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center;">
            <img class="card-img-top" src="./img/ponte.jpg" alt="">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_ponte ?></h6>
                <p class="card-text"><?php echo $valor_ponte ?></p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center;">
            <img class="card-img-top" src="./img/poste.png" alt="">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_postes ?></h6>
                <p class="card-text"><?php echo $valor_postes ?></p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
</div>
<!--------------------------------------------Collapse button e tabela-------------------------------------------->
<br>
<hr>
<br>
<p style="text-align:center;">
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
        Mais detalhes
    </button>
</p>

<div class="collapse" id="collapseExample">
    <div class="container" style="margin-left: auto; margin-right: auto; width: 50%;">

        <div class="card">
            <div class="card-header">
                <p class="card-text; text-left"><b>Tabela de Atuadores</b></p>

            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Atuador</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $nome_semaforo; ?></td>
                        <td><?php echo $valor_semaforo; ?></td>
                        <td><?php echo $hora_semaforo; ?></td>
                        <td><?php echo $data_semaforo; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><?php echo $nome_barreira; ?></td>
                        <td><?php echo $valor_barreira; ?></td>
                        <td><?php echo $hora_barreira; ?></td>
                        <td><?php echo $data_barreira; ?></td>
                    </tr>
                    <tr>

                        <th scope="row">3</th>
                        <td><?php echo $nome_fechadura; ?></td>
                        <td><?php echo $valor_fechadura; ?></td>
                        <td><?php echo $hora_fechadura; ?></td>
                        <td><?php echo $data_fechadura; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><?php echo $nome_ponte ?></td>
                        <td><?php echo $valor_ponte ?></td>
                        <td><?php echo $hora_ponte ?></td>
                        <td><?php echo $data_ponte; ?></td>

                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td><?php echo $nome_postes ?></td>
                        <td><?php echo $valor_postes ?></td>
                        <td><?php echo $hora_postes; ?></td>
                        <td><?php echo $data_postes; ?></td>

                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td><?php echo $nome_valvula ?></td>
                        <td><?php echo $valor_valvula ?></td>
                        <td><?php echo $hora_valvula ?></td>
                        <td><?php echo $data_valvula; ?>
                        </td>

                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!--------------------------------------------Sensores-------------------------------------------->

<hr>
<h2 style="text-align: center;">Sensores</h2>
<hr>
<br>
<div class="container">
    <div class="row">

        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/temperature.png" alt="termometro">
            <div class="card-body">
                <h6 class="card-title">Temperatura</h6>
                <p class="card-text"><?php echo $valor_temperatura ?>º</p>
                <a class="button" type="submit"
                   href="http://127.0.0.1/ti/historico2.php?nome=temperatura">Temperatura</a>
            </div>
        </div>
        <div class="card" style="width:180px; margin:20px; text-align:center">
            <img class="card-img-top" src="./img/dia.png" alt="">
            <div class="card-body">
                <h6 class="card-title"><?php echo $nome_luminosidade ?></h6>
                <p class="card-text"><?php echo $valor_luminosidade ?></p>
                <a class="button" type="submit"
                   href="http://127.0.0.1/ti/historico2.php?nome=luminosidade">Luminosidade</a>
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
                <a class="button" type="submit" href="http://127.0.0.1/ti/historico2.php?nome=radar">Radar
                    Velocidade</a>
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
<!--------------------------------------------Collapse button e tabela-------------------------------------------->

<p style="text-align:center;">
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1"
            aria-expanded="false" aria-controls="collapseExample1">
        Mais detalhes
    </button>
</p>

<div class="collapse" id="collapseExample1">
    <div class="container" style="margin-left: auto; margin-right: auto; width: 50%;">

        <div class="card">
            <div class="card-header">
                <p class="card-text; text-left"><b>Tabela de Sensores</b></p>

            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sensores"</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $nome_temperatura; ?></td>
                        <td><?php echo $valor_temperatura; ?></td>
                        <td><?php echo $hora_temperatura; ?></td>
                        <td><?php echo $data_temperatura; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><?php echo $nome_luminosidade; ?></td>
                        <td><?php echo $valor_luminosidade; ?></td>
                        <td><?php echo $hora_luminosidade; ?></td>
                        <td><?php echo $data_luminosidade; ?></td>
                    </tr>
                    <tr>

                        <th scope="row">3</th>
                        <td><?php echo $nome_humidade; ?></td>
                        <td><?php echo $valor_humidade; ?></td>
                        <td><?php echo $hora_humidade; ?></td>
                        <td><?php echo $data_humidade; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><?php echo $nome_estacionamento ?></td>
                        <td><?php echo $valor_estacionamento ?></td>
                        <td><?php echo $hora_estacionamento ?></td>
                        <td><?php echo $data_estacionamento; ?></td>

                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td><?php echo $nome_radar ?></td>
                        <td><?php echo $valor_radar ?></td>
                        <td><?php echo $hora_radar; ?></td>
                        <td><?php echo $data_radar; ?></td>

                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td><?php echo $nome_poluicao ?></td>
                        <td><?php echo $valor_poluicao ?></td>
                        <td><?php echo $hora_poluicao ?></td>
                        <td><?php echo $data_poluicao; ?>
                        </td>

                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<hr>
</body>
</html>
