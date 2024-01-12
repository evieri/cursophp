<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="d-flex justify-content-center flex-column">

    <?php 
        //Capturando os dados do formulário retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>

    <main class="d-flex justify-content-center vh-50">

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" class="p-5 shadow card">

            <h2>Soma de inteiros</h2>

            <label for="v1" class="form-label mt-3">Valor 1:</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>" class="form-control mb-3">

            <label for="v2" class="form-label">Valor 2:</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>" class="form-control mb-4">

            <input type="submit" value="Somar" class="btn btn-primary">

        </form>

        

    </main>

    <section class="d-flex align-items-center flex-column mt-5">

        <h2>Resultado da soma</h2>

        <?php 
            $soma = $valor1 + $valor2;

            echo "<br><p>A soma entre os valores $valor1 e $valor2 é igual a <strong>$soma</strong></p>";
        ?>

    </section>

</body>
</html>