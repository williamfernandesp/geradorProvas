<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pergunta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<?php

include "conexao.php";
include('./cabecalho.php');

$pergunta_id = $_GET["pergunta_id"];
$query = "select * from alternativas where pergunta_id = " . $pergunta_id;
$resultado = mysqli_query($conexao, $query);

$tamanho = mysqli_num_rows($resultado);

//echo $tamanho;

//echo '<pre>';
//print_r($resultado);
//echo '</pre>';

if ($tamanho < 5) {
    header("Location: ./alternativas.php?pergunta_id=" . $pergunta_id);
} else {
?>

    <?php

    if (isset($_POST) && !empty($_POST)) {
        if (empty($_POST["1"]) || empty($_POST["2"]) || empty($_POST["3"]) || empty($_POST["4"]) || empty($_POST["5"])) {
    ?>
            <div class="alert alert-danger">
                O campo nome não pode estar vazio
            </div>
        <?php
        } else if (empty($_POST["correto"])) {
        ?>
            <div class="alert alert-danger">
                O campo correto deve estar marcado
            </div>
    <?php
        } else {

            $alternativa1 = $_POST["1"];
            $alternativa2 = $_POST["2"];
            $alternativa3 = $_POST["3"];
            $alternativa4 = $_POST["4"];
            $alternativa5 = $_POST["5"];
            $radioCorreto = $_POST["correto"];
            $pergunta_id = $_POST["pergunta_id"];

            echo '<pre>';
            print_r($alternativa1);
            echo '</pre>';
            echo '<pre>';
            print_r($alternativa2);
            echo '</pre>';
            echo '<pre>';
            print_r($alternativa3);
            echo '</pre>';
            echo '<pre>';
            print_r($alternativa4);
            echo '</pre>';
            echo '<pre>';
            print_r($alternativa5);
            echo '</pre>';
            echo '<pre>';
            print_r($radioCorreto);
            echo '</pre>';
            echo '<pre>';
            print_r($pergunta_id);
            echo '</pre>';

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

            echo '<pre>';
            print_r($correta1);
            echo '</pre>';

            $query = "update alternativas set alternativa = '$alternativa1' where pergunta_id = " . $pergunta_id;
            $resultado = mysqli_query($conexao, $query);
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

            <form class="mx-auto mt-3" style="width: 75%" action="perguntaDelete.php?pergunta_id=<?php echo $_GET["pergunta_id"]; ?>" method="post">
                <input type="hidden" name="pergunta_id" value="<?php echo $_GET["pergunta_id"]; ?>" />
                <?php
                $linha = mysqli_fetch_array($resultadoAlternativas)
                ?>
                <div class="d-flex">
                    <input class="form-control border border-dark " type text name="1" value="<?php echo "" . $linha['alternativa'] ?>" />

                    <?php
                    if ($linha['correta'] == 1) { ?>
                        <input type="radio" name="correto" value="1" checked>
                    <?php
                    } else { ?>
                        <input type="radio" name="correto" value="1">
                    <?php
                    }
                    ?>

                </div>
                <br>
                <br>
                <?php
                $linha = mysqli_fetch_array($resultadoAlternativas)
                ?>
                <div class="d-flex">
                    <input class="form-control border border-dark " type text name="2" value="<?php echo "" . $linha['alternativa'] ?>" />
                    <?php
                    if ($linha['correta'] == 1) { ?>
                        <input type="radio" name="correto" value="2" checked>
                    <?php
                    } else { ?>
                        <input type="radio" name="correto" value="2">
                    <?php
                    }
                    ?>
                </div>
                <br>
                <br>
                <?php
                $linha = mysqli_fetch_array($resultadoAlternativas)
                ?>
                <div class="d-flex">
                    <input class="form-control border border-dark " type text name="3" value="<?php echo "" . $linha['alternativa'] ?>" />
                    <?php
                    if ($linha['correta'] == 1) { ?>
                        <input type="radio" name="correto" value="3" checked>
                    <?php
                    } else { ?>
                        <input type="radio" name="correto" value="3">
                    <?php
                    }
                    ?>
                </div>
                <br>
                <br>
                <?php
                $linha = mysqli_fetch_array($resultadoAlternativas)
                ?>
                <div class="d-flex">
                    <input class="form-control border border-dark " type text name="4" value="<?php echo "" . $linha['alternativa'] ?>" />
                    <?php
                    if ($linha['correta'] == 1) { ?>
                        <input type="radio" name="correto" value="4" checked>
                    <?php
                    } else { ?>
                        <input type="radio" name="correto" value="4">
                    <?php
                    }
                    ?>
                </div>
                <br>
                <br>
                <?php
                $linha = mysqli_fetch_array($resultadoAlternativas)
                ?>
                <div class="d-flex">
                    <input class="form-control border border-dark " type text name="5" value="<?php echo "" . $linha['alternativa'] ?>" />
                    <?php
                    if ($linha['correta'] == 1) { ?>
                        <input type="radio" name="correto" value="5" checked>
                    <?php
                    } else { ?>
                        <input type="radio" name="correto" value="5">
                    <?php
                    }
                    ?>
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
<?php
}
?>