<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alternativas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<?php

include "conexao.php";
include('./cabecalho.php');

if (isset($_POST) && !empty($_POST)) {
    if (empty($_POST["1"]) || empty($_POST["2"]) || empty($_POST["3"]) || empty($_POST["4"]) || empty($_POST["5"])) {
?>
        <div class="alert alert-danger">
            O campo nome não pode estar vazio
        </div>;
    <?php
    } else if (empty($_POST["correto"])) {
    ?>
        <div class="alert alert-danger">
            O campo correto deve estar marcado
        </div>;
<?php
    } else {

        $alternativa1 = $_POST["1"];
        $alternativa2 = $_POST["2"];
        $alternativa3 = $_POST["3"];
        $alternativa4 = $_POST["4"];
        $alternativa5 = $_POST["5"];
        $radioCorreto = $_POST["correto"];
        $pergunta_id = $_POST["pergunta_id"];

        $correta1 = 0;
        $correta2 = 0;
        $correta3 = 0;
        $correta4 = 0;
        $correta5 = 0;
        switch ($radioCorreto) {
            case "1":
                $correta1 = 1;
                break;
            case "2":
                $correta2 = 1;
                break;
            case "3":
                $correta3 = 1;
                break;
            case "4":
                $correta4 = 1;
                break;
            case "5":
                $correta5 = 1;
                break;
        }
        $query = "insert into alternativas (alternativa, pergunta_id, correta)values";
        $valores1 = "('$alternativa1', $pergunta_id, $correta1 )";
        $valores2 = "('$alternativa2', $pergunta_id, $correta2 )";
        $valores3 = "('$alternativa3', $pergunta_id, $correta3 )";
        $valores4 = "('$alternativa4', $pergunta_id, $correta4 )";
        $valores5 = "('$alternativa5', $pergunta_id, $correta5 )";

        $query = $query . $valores1 . "," . $valores2 . "," . $valores3 . "," . $valores4 . "," . $valores5;
        //echo $query;
        $resultado = mysqli_query($conexao, $query);
        header("location: ok.php");
    }
}

if (isset($_GET["pergunta_id"]) && !empty($_GET["pergunta_id"])) {
    $pergunta_id = $_GET["pergunta_id"];
    $query = "select * from perguntas where id = $pergunta_id";
    $resultado = mysqli_query($conexao, $query);

    $pergunta = mysqli_fetch_array($resultado)["pergunta"];

    $query = "select * from alternativas where pergunta_id = " . $pergunta_id;
    $resultadoAlternativas = mysqli_query($conexao, $query);
} else {
    //header("location: perguntas.php");
}
?>

<body style="background-color: #d3d3d3;">
    <div class="p-3 mt-4 mx-auto pb-5" style="background-color: #F8F9FA; width: 75%; border-radius: 10px;">
        <div class="mx-auto mt-3" style="width: 75%">
            <h5> <?php echo $pergunta; ?> </h5>
        </div>
        <div class="mx-auto mt-3" style="width: 75%">
            <p>Preencha nos campos abaixo as alternativas desejadas, selecione a correta e clique em salvar.</p>
        </div>

        <form class="mx-auto mt-3" style="width: 75%" action="alternativas.php?pergunta_id=<?php echo $_GET["pergunta_id"]; ?>" method="post">
            <input type="hidden" name="pergunta_id" value="<?php echo $_GET["pergunta_id"]; ?>" />
            <div class="d-flex">
                <input class="form-control border border-dark " type text name="1" />
                <input type="radio" name="correto" value="1">
            </div>
            <br>
            <br>
            <div class="d-flex">
                <input class="form-control border border-dark " type text name="2" />
                <input type="radio" name="correto" value="2">
            </div>
            <br>
            <br>
            <div class="d-flex">
                <input class="form-control border border-dark " type text name="3" />
                <input type="radio" name="correto" value="3">
            </div>
            <br>
            <br>
            <div class="d-flex">
                <input class="form-control border border-dark " type text name="4" />
                <input type="radio" name="correto" value="4">
            </div>
            <br>
            <br>
            <div class="d-flex">
                <input class="form-control border border-dark " type text name="5" />
                <input type="radio" name="correto" value="5">
            </div>
            <br>
            <br>
            <button class="btn btn-warning" type="submit">
                Salvar
            </button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>