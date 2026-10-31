<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Sorteio de Números</h1>
    </header>
    <main>
        <?php
            $min = 0;
            $max = 100;
            $num_sorteado = mt_rand($min, $max);
            echo "<p>Gerando um número entre $min e $max ...</p>";
            echo "<p>Número sorteado:<strong>    $num_sorteado</strong></p>";        
        ?>
        <button onclick="javascript:window.location.reload()"><strong>Sortear Novo Número</strong></button>
    </main>
</body>
</html>