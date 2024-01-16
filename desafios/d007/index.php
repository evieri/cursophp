<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Analisador de Salário</title>
</head>
<body class="d-flex justify-content-center flex-column">

    <?php 
        //Capturando os dados do formulário retroalimentado
        $salario = $_GET['salario'] ?? 0;
    ?>

    <main class="d-flex justify-content-center vh-50">

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" class="p-5 shadow card">

            <h2>Informe seu salário</h2>

            <label for="salario" class="form-label mt-3">Salário</label>
            <input type="number" name="salario" value="<?= $salario ?>" class="form-control mb-3">

            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>

            <input type="submit" value="Analisar" class="btn btn-primary">

        </form>

    </main>

    <section class="d-flex align-items-center flex-column mt-5 w-50 m-auto">

        <h2>Resultado final</h2>

        <?php 
            $minimo = 1380;
            $final_int = (int) ($salario / $minimo);
            $final_float = $salario % $minimo;

            $salario = number_format($salario, 2, ',', '.');
            $final_float = number_format($final_float, 2, ',', '.');

            echo "<br><p>Quem recebe um salário de R$ $salario ganha $final_int salários mínimos + R$ $final_float.</p>";
        ?>

    </section>

</body>
</html>