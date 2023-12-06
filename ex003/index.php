<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal
        // 0b = binário
        // 0 = octal

        // false = null
        // true = 1

        // $num = 0b1011;
        // echo "O valor da variável é $num";

        // $v = 45.2;
        // var_dump($v);

        $num = (integer) 3e2;
        echo "O valor é $num <br>";
        var_dump($num);
    ?>
</body>
</html>