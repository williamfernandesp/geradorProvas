<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body style="background-color: #d3d3d3;">

    <?php
    include('./cabecalho.php');
    include "conexao.php";
    if (isset($_POST) && !empty($_POST)) {
        $pergunta = $_POST["pergunta"];
        $query = "insert into perguntas (pergunta) values('$pergunta')";
        $resultado = mysqli_query($conexao, $query);
    }

    $query = "select * from perguntas";
    $resultado = mysqli_query($conexao, $query);
    ?>

    <div class="p-3 mt-4 mb-4 mx-auto" style="background-color: #F8F9FA; width: 75%; border-radius: 10px;">
        <div class="mx-auto mt-3" style="width: 75%">
            <h3>Gerador de Prova</h3>
        </div>
        <form class="table table-hover table-striped mx-auto mt-3" style="width: 75%" action="perguntas.php" method="post">
            <div>Digite no campo abaixo a pergunta desejada:</div>
            <input class="form-control" type="text" name="pergunta" />
            <br>

            <button class="btn btn-success" style="border-radius: 5px;" type="submit"> Salvar </button>
        </form>

        <table class="table table-hover table-striped mx-auto" style="width: 75%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pergunta</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($resultado)) {

                    echo "<tr style = 'border: 1px solid black'>";
                    echo "<td>" . $linha['id'] . "</td>";
                    echo "<td>" . $linha['pergunta'] . "</td>";
                    echo "<td> <a class='btn btn-info text-white ' href='editarPerguntas.php?pergunta_id=" . $linha['id'] . "'> Lista de Alternativas</a> </td>";
                ?>
                    <td><a href="./perguntaDelete.php?id=<?php echo $linha['id']; ?>" class="btn btn-danger">Excluir</a></td>
                <?php
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </div>

</body>

</html>