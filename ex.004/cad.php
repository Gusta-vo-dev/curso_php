<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <?php 
        // var_dump($_REQUEST); // JUNÇÃO DE $_GET + $_POST + $_COOKIE
        $nome = $_GET["nome"] ?? "Sem Nome";
        $sobrenome = $_GET["sobrenome"] ?? "Sem Sobrenome";
        echo "<p>É um prazer conhece-lo <strong>$nome $sobrenome</strong>, este é o meu site!!</p>";
    ?>
</body>
</html>