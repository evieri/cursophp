<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Desafio PHP 4</title>
</head>
<body style="height: 100vh">
    
    <main class="container-sm justify-content-center shadow-lg gx-0 vh-100 d-flex">
        <div class="p-5 text-center m-auto card" style="width: 50%">
            <h2 class="mb-4">Resultado:</h2>
            <p class='m-3'>
                <?php
                    $spassada = $hoje = date("m-d-Y", strtotime("-7 days"));
                    $hoje = date("m-d-Y");

                    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $spassada .'\'&@dataFinalCotacao=\''. $hoje .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';

                    $dados = json_decode(file_get_contents($url), true);

                    $cotação = $dados["value"]["0"]["cotacaoCompra"];

                    $real = $_REQUEST["num"] ?? 0;
                    $dólar = $real / $cotação;

                    // Biblioteca de Intenacionalização intl
                    $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                    $real = numfmt_format_currency($padrão, $real, "BRL");
                    $dólar = numfmt_format_currency($padrão, $dólar, "USD");

                    echo "Seus $real equivalem a <strong>$dólar</strong>";
                ?>
            </p>
            <button class="btn btn-primary mt-4" onclick='history.go(-1)'>&#x2B05; Voltar</button>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>