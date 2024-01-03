<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Desafio PHP 2</title>
</head>
<body>
    
    <main class="container-sm justify-content-center shadow-lg gx-0 vh-100 d-flex">
        <div action="resposta.php" method="get" class="p-5 m-auto" style="width: 50%;">
            <div class="mb-5">
                <h3>Gerador de números aleatórios</h3>
            </div>
            <div class="p-3 card">
                <p>Gerando um número aleatório entre 0 e 100...</p>
                <br>
                <p>
                    <?php 
                        $num = mt_rand(0, 100);
                        
                        echo "O número gerado foi <strong>$num</strong>";
                    ?>
                </p>
                <br>
                <button class="btn btn-primary" onclick="location.reload()">&#x1F504; Repetir</button>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>