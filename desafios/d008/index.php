<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Analisador de Raízes</title>
</head>
<body class="d-flex justify-content-center flex-column">

    <?php 
        //Capturando os dados do formulário retroalimentado
        $num = $_GET['num'] ?? 0;
    ?>

    <main class="d-flex justify-content-center vh-50">

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" class="p-5 shadow card">

            <h2>Informe um número</h2>

            <label for="num" class="form-label mt-3">Número</label>
            <input type="number" name="num" value="<?= $num ?>" class="form-control mb-3">

            <input type="submit" value="Calcular raízes" class="btn btn-primary">

        </form>

    </main>

    <section class="d-flex align-items-center flex-column mt-5 w-50 m-auto">

        <h2>Resultado final</h2>

        <?php 
            $quadrada = sqrt($num);
            $cubica = pow($num, 1/3);

            $quadrada = number_format($quadrada, 3, ',', '.');
            $cubica = number_format($cubica, 3, ',', '.');

            echo "<br><p>Analisando o número $num, temos:</p>";
            echo "<ul><li>A sua raiz quadrada é $quadrada</li>";
            echo "<li>A sua raiz cúbica é $cubica</li></ul>";
        ?>

    </section>

</body>
</html>