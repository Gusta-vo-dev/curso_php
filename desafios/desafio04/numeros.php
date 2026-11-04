<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Reais em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Números Reais</h1>
        <?php
            $num = $_POST["num"] ?? 0;

            echo "<p>Analisando o número <strong>" . number_format("$num", 3, ",", "." ) . " </strong>informado pelo usuário...</p>";

            $n_inteiro = (int)$num;
            $n_resto = $num - $n_inteiro;

            
            echo "<ul><li>O inteiro deste número é: <strong>" . number_format($n_inteiro, 0, ",", ".") . "</strong></li>";

            echo "<br><li>O resto deste número é: <strong>" . number_format($n_resto, 3, ",", ".") . "</strong></li></ul>";
        ?>
        <button><a href="index.html">Voltar</a></button>
    </main>
</body>
</html>