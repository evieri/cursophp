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
        $valor1 = $_GET['valor1'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $valor2 = $_GET['valor2'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 1;
    ?>

    <main class="d-flex justify-content-center vh-50">

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" class="p-5 shadow card">

            <h2>Médias Aritméticas</h2>

            <label for="valor1" class="form-label mt-3">1° valor</label>
            <input type="number" name="valor1" value="<?= $valor1 ?>" class="form-control mb-2">

            <label for="peso1" class="form-label mt-2">1° peso</label>
            <input type="number" name="peso1" value="<?= $peso1 ?>" class="form-control mb-2">

            <label for="valor2" class="form-label mt-2">2° valor</label>
            <input type="number" name="valor2" value="<?= $valor2 ?>" class="form-control mb-2">

            <label for="peso2" class="form-label mt-2">2° peso</label>
            <input type="number" name="peso2" value="<?= $peso2 ?>" class="form-control mb-4">

            <input type="submit" value="Calcular Médias" class="btn btn-primary">

        </form>

    </main>

    <section class="d-flex align-items-center flex-column mt-5 w-50 m-auto">

        <h2>Cálculo de Médias</h2>

        <?php 
            $media_simples = ($valor1 + $valor2) / 2;
            $media_ponderada = ($valor1 * $peso1 + $valor2 * $peso2 ) / $peso1 + $peso2;

            echo "<br><p>Analisando os valores entre $valor1 e $valor2:</p>";
            echo "<ul><li>A Média Aritimética Simples entre os valores é igual a $media_simples</li>";
            echo "<li>A Média Aritimética Ponderada entre os valores é igual a $media_ponderada</li></ul>";
        ?>

    </section>

</body>
</html>