<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body style="background-color: #d3d3d3;">

    <?php
    include('./cabecalho.php');
    include "conexao.php";

    //echo '<pre>';
    //print_r($_POST);
    //echo '</pre>';

    if (empty($_POST["correto0"])) {
        $resposta0 = 'em branco';
    } else {
        $resposta0 = $_POST["correto0"];
    }

    if (empty($_POST["correto1"])) {
        $resposta1 = 'em branco';
    } else {
        $resposta1 = $_POST["correto1"];
    }

    if (empty($_POST["correto2"])) {
        $resposta2 = 'em branco';
    } else {
        $resposta2 = $_POST["correto2"];
    }

    if (empty($_POST["correto3"])) {
        $resposta3 = 'em branco';
    } else {
        $resposta3 = $_POST["correto3"];
    }

    if (empty($_POST["correto4"])) {
        $resposta4 = 'em branco';
    } else {
        $resposta4 = $_POST["correto4"];
    }

    $idUsado0 = $_POST["array0"];
    $idUsado1 = $_POST["array1"];
    $idUsado2 = $_POST["array2"];
    $idUsado3 = $_POST["array3"];
    $idUsado4 = $_POST["array4"];

    //$query = "select alternativa from alternativas where pergunta_id= $idUsado0 and correta=1";
    //$resultado = mysqli_query($conexao, $query);

    //$linha = mysqli_fetch_array($resultado);


    //echo $linha['alternativa'];

    $pontuacao = 0;


    $query = "select alternativa from alternativas where pergunta_id= $idUsado0 and correta=1";
    $resultado = mysqli_query($conexao, $query);

    $linha = mysqli_fetch_array($resultado);

    $correta = $linha['alternativa'];

    if ($resposta0 == $correta) {
        $pontuacao++;
    }

    $query = "select alternativa from alternativas where pergunta_id= $idUsado1 and correta=1";
    $resultado = mysqli_query($conexao, $query);

    $linha = mysqli_fetch_array($resultado);

    $correta = $linha['alternativa'];

    if ($resposta1 == $correta) {
        $pontuacao++;
    }

    $query = "select alternativa from alternativas where pergunta_id= $idUsado2 and correta=1";
    $resultado = mysqli_query($conexao, $query);

    $linha = mysqli_fetch_array($resultado);

    $correta = $linha['alternativa'];

    if ($resposta2 == $correta) {
        $pontuacao++;
    }

    $query = "select alternativa from alternativas where pergunta_id= $idUsado3 and correta=1";
    $resultado = mysqli_query($conexao, $query);

    $linha = mysqli_fetch_array($resultado);

    $correta = $linha['alternativa'];

    if ($resposta3 == $correta) {
        $pontuacao++;
    }

    $query = "select alternativa from alternativas where pergunta_id= $idUsado4 and correta=1";
    $resultado = mysqli_query($conexao, $query);

    $linha = mysqli_fetch_array($resultado);

    $correta = $linha['alternativa'];

    if ($resposta4 == $correta) {
        $pontuacao++;
    }



    ?>
    <br>
    <div class="mx-auto" style="background-color: #F8F9FA; width: 75%; border-radius: 10px;height:570px">
        <div class="d-flex justify-content-center">
            <h1 class="mt-5">Resultado:</h1>
        </div>
        <?php
        if ($pontuacao < 3) {
        ?>
            <div class="d-flex justify-content-center mt-4">
                <img src="img/5219070.png" alt="reprovado">
            </div>
            <div class="d-flex justify-content-center mt-5">
                <h1>Você foi reprovado!</h1>
            </div>
            <div class="d-flex justify-content-center">
                <p>Acertou <?php echo $pontuacao ?> de 5 questões.</p>
            </div>
        <?php
        } else {
        ?>
            <div class="d-flex justify-content-center mt-4">
                <img src="img/7799536.png" alt="aprovado">
            </div>
            <div class="d-flex justify-content-center mt-5">
                <h1>Você foi aprovado!</h1>
            </div>
            <div class="d-flex justify-content-center">
                <p>Acertou <?php echo $pontuacao ?> de 5 questões.</p>
            </div>

            <div class="d-flex justify-content-center">
                <a class="btn btn-success" href="perguntas.php">Retornar</a>
            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>