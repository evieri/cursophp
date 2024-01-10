<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="justify-content-center shadow-lg gx-0 vh-100 d-flex">
        <pre class="shadow p-5">
            <?php 
                echo "<h2>Superglobal GET</h2>";
                var_dump($_GET);

                echo "<h2>Superglobal POST</h2>";
                var_dump($_POST)
            ?>
        </pre>
    </main>
</body>
</html>