<?php

header('Content-Type: text/html; charset=utf-8');



if($_SERVER["REQUEST_METHOD"] == "POST") {
 echo " recebido um post "; 

if(isset($_POST['valor']) && ($_POST['nome']) && ($_POST['hora']) && ($_POST['data'])){

 file_put_contents("files/".$_POST['nome']."/valor.txt", $_POST['valor']);

 file_put_contents("files/".$_POST['nome']."/hora.txt", $_POST['hora']);

 file_put_contents("files/".$_POST['nome']."/data.txt", $_POST['data']);

file_put_contents("files/".$_POST['nome']."/log.txt", $_POST['hora'].";".$_POST['valor'] .";".$_POST['data'] . PHP_EOL, FILE_APPEND);


}
else{
    echo "Falta parametros no envio";
}

}
else if($_SERVER["REQUEST_METHOD"] == "GET"){


    if (isset($_GET["nome"])){

    echo file_get_contents("files/".$_GET['nome']."/valor.txt");

    }else

        echo "faltam parametros no GET";


}
else {

    echo "metodo nao permitido!";

}



?>