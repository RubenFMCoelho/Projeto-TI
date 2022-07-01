<?php session_start();
$username = "ruben";
$password = "ruben";
$username2 = "diogo";
$password2 = "diogo";
$username3 = "david";
$password3 = "benfica";

$autenticacaoF = "";


if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password || $_POST['username'] == $username2 && $_POST['password'] == $password2 || $_POST['username'] == $username3 && $_POST['password'] == $password3) {

        $_SESSION["username"] = $_POST['username'];
        $_SESSION["username2"] = $_POST['username2'];
        $_SESSION["username3"] = $_POST['username3'];
        header("Location: dashboard.php");
    } else {
        $autenticacaoF = "Autenticação falhada! Nome ou password inválidos";
    }
}

?>

<DOCTYPE html>


    <html>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <head>
        <title>Cidade Inteligente</title>
        <link rel="icon" type="image/x-icon" href="icon.ico">
        <link rel="stylesheet" href="style1.css">


    </head>


    <body style="background-image: url(./img/wallpaper.png);">

    <br><br><br>
    <h1 style="text-align:center; font-size: 80px;">Cidade Inteligente</h1>

    <form action="index.php" method="post">

        <div class="container-style"
             style="position: absolute;top: 50%;left: 50%;  -ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);margin:0 auto;padding:15px;background-color: whitesmoke;border-radius: 15px;opacity: 1;border: solid;  border-color: white;border-width: 3px;"
             ;>

            <div class="container-style" style="margin:0 auto;width:350px;padding:15px;">
                <a href="index.php">
                    <img alt="Cidade Inteligente" src="./img/cidade.png" style="width:100%; border-radius: 15px;">
                </a>
            </div>

            <div class="container-style" style="margin:0 auto;width:350px;padding:15px;">

                <label for="usr">Nome:</label>
                <input type="text" class="form-control" id="usr" placeholder="Inserir o nome" name="username" required>


            </div>
            <div class="container-style" style="margin:0 auto;width:350px;padding:15px">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Inserir a password" name="password"
                       required>
            </div>
            <div style="color: indianred; text-align:center;"><?php echo $autenticacaoF; ?>
                <div class="container-style" style="margin:0 auto;width:350px;padding:15px">
                    <input type="submit" class="btn btn-primary" value="Log In" style="width: 250px;">
                </div>
            </div>

    </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    </body>


    </html>

    <!--HORAS DO ESTACIONAMENTO GRATUITO NA CIDADE
    EVENTOS
    CONTACTOS IMPORTANTES DA CIDADE
    CITIE BIKE APP-->
