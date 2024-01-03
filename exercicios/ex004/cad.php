<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resutado do procesamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? 'pessoa';
            $snome = $_GET["sobrenome"] ?? 'anônima';

            echo "<p>Seu nome completo é $nome $snome</p>";
        ?>

        <a href="javascript:history.go(-1)"><button type="button">Voltar</button></a>
    </main>
</body>
</html>