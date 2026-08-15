<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP!</title>
</head>
<body>
    <h1>Testando os Tipos Primitivos em PHP!</h1>
    <?php
        // 0x = hexadecimal
        // 0b = binário 
        // 0 = octal

        $v = "gustavopicklervieira";
        var_dump($v);
        echo "<br>";

        $num = (int) 3e2;
        var_dump($num); // coerção de tipo
        echo "<br>";
        $n = (int)"950";
        var_dump($n);

        echo "<br>";
        $nome = "Gustavo";
        $sobrenome = "Pickler Vieira";
        echo "Meu nome é $nome $sobrenome";

        echo "<br>";
        echo "Estamos no ano de " . date("Y");

        echo "<br>";
        echo "$nome \"Minotauro\" $sobrenome";
    ?>
</body>
</html>