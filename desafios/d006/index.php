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
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
    ?>

    <main class="d-flex justify-content-center vh-50">

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" class="p-5 shadow card">

            <h2>Anatomia de uma divisão</h2>

            <label for="dividendo" class="form-label mt-3">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>" class="form-control mb-3">

            <label for="divisor" class="form-label">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>" class="form-control mb-4">

            <input type="submit" value="Analisar" class="btn btn-primary">

        </form>

    </main>

    <section class="d-flex align-items-center flex-column mt-5 w-50 m-auto">

        <h2>Estrutura da divisão</h2>

        <?php 
            $quociente = (int)($dividendo / $divisor);
            $resto = $dividendo % $divisor;
        ?>

        <div class="container w-25 m-auto mt-3">
            <div class="row">
                <div class="col border border-dark"><?= $dividendo ?></div>
                <div class="col border border-dark"><?= $divisor ?></div>
            </div>
            <div class="row">
                <div class="col border border-dark"><?= $resto ?></div>
                <div class="col border border-dark"><?= $quociente ?></div>
            </div>
        </div>

    </section>

</body>
</html>