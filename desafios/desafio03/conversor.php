<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas</h1>
        <?php
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=\'10-30-2026\'&$format=json';

            $dados = json_decode(file_get_contents($url), true);// TRUE = trata os dados em um array, enquanto FALSE trata os dados como objeto//

            $valor_dolar = $dados['value'][0]['cotacaoCompra'];
            $real = $_GET["reais"] ?? 0;
            $dolares = $real / $valor_dolar;

            echo "<p>Seus $real convertidos em dólar(" . number_format($valor_dolar, 2, ",") . ") deram: </p><br><p> U\$" . number_format($dolares, 2, ",", ".") . "</p>"
        ?>
    </section>
</body>
</html>