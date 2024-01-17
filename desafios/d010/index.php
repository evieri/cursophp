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
        $idade = $_GET['idade'] ?? 0;
        $ano = $_GET['ano'] ?? 2024;
    ?>

    <main class="d-flex justify-content-center vh-50">

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" class="p-5 shadow card">

            <h2>Calculando a sua idade</h2>

            <label for="idade" class="form-label mt-3">Em que ano você nasceu?</label>
            <input type="number" name="idade" value="<?= $idade ?>" class="form-control mb-3">

            <label for="ano" class="form-label mt-3">Quer saber sua idade em qual ano?</label>
            <input type="number" name="ano" value="<?= $ano ?>" class="form-control mb-3">

            <input type="submit" value="Calcular raízes" class="btn btn-primary">

        </form>

    </main>

    <section class="d-flex align-items-center flex-column mt-5 w-50 m-auto">

        <h2>Resultado</h2>

        <?php 
            $idade_nova = $ano - $idade;

            echo "<br><p>O corno que nasceu em $idade vai ter $idade_nova em $ano</p>";
        ?>

    </section>

</body>
</html>