<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php

                setcookie("dia-da-semana", "Quarta-Feira", time() + 3600);

                echo "<h1>Super Global GET</h1>";
                var_dump($_GET);

                echo "<h1>Super Global POST</h1>";
                var_dump($_POST);

                echo "<h1>Super Global Request</h1>";
                var_dump($_REQUEST);

                echo "<h1>Super Global Cookie</h1>";
                var_dump($_COOKIE);

                echo "<h1>Super Global Server</h1>";
                var_dump($_SERVER);
            ?>
        </pre>
    </main>
</body>
</html>