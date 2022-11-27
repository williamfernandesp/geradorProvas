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

    $query = "select * from perguntas";
    $pergunta = mysqli_query($conexao, $query);

    $tamanho = mysqli_num_rows($pergunta);


    $random = rand(0, $tamanho);

    //echo '<pre>';
    //print_r($alternativa);
    //echo '</pre>';

    ?>

    <div class="p-3 m-4 p-5 mx-auto" style="background-color: #F8F9FA; width: 75%; border-radius: 10px;">
        <div class="mb-3 mx-auto" style="width: 75%;">
            <h5>Faça sua prova com calma. Boa sorte!</h5>
        </div>
        <?php
        $ids = [];

        for ($i = 1; $i <= $tamanho; $i++) {

            $linha = mysqli_fetch_array($pergunta);

            array_push($ids, $linha["id"]) ?>

        <?php }
        //echo '<pre>';
        //print_r($ids);
        //echo '</pre>';

        for ($i = 0; $i < 1; $i++) {
            shuffle($ids);
            $idsRandom = $ids[0];


            $query = "select * from perguntas where id = $idsRandom";
            $resultado = mysqli_query($conexao, $query);

            $pergunta = mysqli_fetch_array($resultado)["pergunta"];


        ?> <div class="p-3 mx-auto" style="background-color: #d3d3d3; border-radius: 10px; width: 75%">
                <h5> <?php echo $pergunta; ?> </h5>
                <?php
                $query = "select * from alternativas where pergunta_id = $idsRandom";
                $resultado1 = mysqli_query($conexao, $query);
                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto1" value="1">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto1" value="2">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto1" value="3">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto1" value="4">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto1" value="5">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>
            </div>
            <br>
            <?php
            unset($ids[0]);
            ?>

        <?php
        }

        for ($i = 0; $i < 1; $i++) {
            shuffle($ids);
            $idsRandom = $ids[0];


            $query = "select * from perguntas where id = $idsRandom";
            $resultado = mysqli_query($conexao, $query);

            $pergunta = mysqli_fetch_array($resultado)["pergunta"];


        ?> <div class="p-3 mx-auto" style="background-color: #d3d3d3; border-radius: 10px; width: 75%">
                <h5> <?php echo $pergunta; ?> </h5>
                <?php
                $query = "select * from alternativas where pergunta_id = $idsRandom";
                $resultado1 = mysqli_query($conexao, $query);
                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto2" value="1">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto2" value="2">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto2" value="3">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto2" value="4">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto2" value="5">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>
            </div>
            <br>
            <?php
            unset($ids[0]);
            ?>

        <?php
        }

        for ($i = 0; $i < 1; $i++) {
            shuffle($ids);
            $idsRandom = $ids[0];


            $query = "select * from perguntas where id = $idsRandom";
            $resultado = mysqli_query($conexao, $query);

            $pergunta = mysqli_fetch_array($resultado)["pergunta"];


        ?> <div class="p-3 mx-auto" style="background-color: #d3d3d3; border-radius: 10px; width: 75%">
                <h5> <?php echo $pergunta; ?> </h5>
                <?php
                $query = "select * from alternativas where pergunta_id = $idsRandom";
                $resultado1 = mysqli_query($conexao, $query);
                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto3" value="1">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto3" value="2">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto3" value="3">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto3" value="4">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>

                <?php
                $linha = mysqli_fetch_array($resultado1)
                ?>
                <div class="d-inline-flex">
                    <input type="radio" name="correto3" value="5">
                </div>
                <?php
                echo "" . $linha['alternativa'] . "<br>";

                ?>
            </div>
            <br>
            <?php
            unset($ids[0]);
            ?>

            <?php
            for ($i = 0; $i < 1; $i++) {
                shuffle($ids);
                $idsRandom = $ids[0];


                $query = "select * from perguntas where id = $idsRandom";
                $resultado = mysqli_query($conexao, $query);

                $pergunta = mysqli_fetch_array($resultado)["pergunta"];


            ?> <div class="p-3 mx-auto" style="background-color: #d3d3d3; border-radius: 10px; width: 75%">
                    <h5> <?php echo $pergunta; ?> </h5>
                    <?php
                    $query = "select * from alternativas where pergunta_id = $idsRandom";
                    $resultado1 = mysqli_query($conexao, $query);
                    ?>

                    <?php
                    $linha = mysqli_fetch_array($resultado1)
                    ?>
                    <div class="d-inline-flex">
                        <input type="radio" name="correto4" value="1">
                    </div>
                    <?php
                    echo "" . $linha['alternativa'] . "<br>";

                    ?>

                    <?php
                    $linha = mysqli_fetch_array($resultado1)
                    ?>
                    <div class="d-inline-flex">
                        <input type="radio" name="correto4" value="2">
                    </div>
                    <?php
                    echo "" . $linha['alternativa'] . "<br>";

                    ?>

                    <?php
                    $linha = mysqli_fetch_array($resultado1)
                    ?>
                    <div class="d-inline-flex">
                        <input type="radio" name="correto4" value="3">
                    </div>
                    <?php
                    echo "" . $linha['alternativa'] . "<br>";

                    ?>

                    <?php
                    $linha = mysqli_fetch_array($resultado1)
                    ?>
                    <div class="d-inline-flex">
                        <input type="radio" name="correto4" value="4">
                    </div>
                    <?php
                    echo "" . $linha['alternativa'] . "<br>";

                    ?>

                    <?php
                    $linha = mysqli_fetch_array($resultado1)
                    ?>
                    <div class="d-inline-flex">
                        <input type="radio" name="correto4" value="5">
                    </div>
                    <?php
                    echo "" . $linha['alternativa'] . "<br>";

                    ?>
                </div>
                <br>
                <?php
                unset($ids[0]);
                ?>

            <?php
            }
            for ($i = 0; $i < 1; $i++) {
                shuffle($ids);
                $idsRandom = $ids[0];


                $query = "select * from perguntas where id = $idsRandom";
                $resultado = mysqli_query($conexao, $query);

                $pergunta = mysqli_fetch_array($resultado)["pergunta"];


            ?> <div class="p-3 mx-auto" style="background-color: #d3d3d3; border-radius: 10px; width: 75%">
                    <h5> <?php echo $pergunta; ?> </h5>
                    <?php
                    $query = "select * from alternativas where pergunta_id = $idsRandom";
                    $resultado1 = mysqli_query($conexao, $query);
                    ?>

                    <?php
                    $linha = mysqli_fetch_array($resultado1)
                    ?>
                    <div class="d-inline-flex">
                        <input type="radio" name="correto5" value="1">
                    </div>
                    <?php
                    echo "" . $linha['alternativa'] . "<br>";

                    ?>

                    <?php
                    $linha = mysqli_fetch_array($resultado1)
                    ?>
                    <div class="d-inline-flex">
                        <input type="radio" name="correto5" value="2">
                    </div>
                    <?php
                    echo "" . $linha['alternativa'] . "<br>";

                    ?>

                    <?php
                    $linha = mysqli_fetch_array($resultado1)
                    ?>
                    <div class="d-inline-flex">
                        <input type="radio" name="correto5" value="3">
                    </div>
                    <?php
                    echo "" . $linha['alternativa'] . "<br>";

                    ?>

                    <?php
                    $linha = mysqli_fetch_array($resultado1)
                    ?>
                    <div class="d-inline-flex">
                        <input type="radio" name="correto5" value="4">
                    </div>
                    <?php
                    echo "" . $linha['alternativa'] . "<br>";

                    ?>

                    <?php
                    $linha = mysqli_fetch_array($resultado1)
                    ?>
                    <div class="d-inline-flex">
                        <input type="radio" name="correto5" value="5">
                    </div>
                    <?php
                    echo "" . $linha['alternativa'] . "<br>";

                    ?>
                </div>
                <br>
                <?php
                unset($ids[0]);
                ?>

        <?php
            }
        }
        ?>


        <div class="d-flex mx-auto justify-content-center">
            <button class="btn btn-warning">Finalizar</button>
        </div>
    </div>


</body>

</html>