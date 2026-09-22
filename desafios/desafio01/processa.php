<?php
$numero = filter_input(INPUT_GET, 'numero', FILTER_VALIDATE_INT);
?>
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

	<main>
		<?php if ($numero === false || $numero === null): ?>
			<p>Informe um número inteiro válido.</p>
			<a href="index.html">Voltar</a>
		<?php else: ?>
			<p>O número informado foi <strong><?= $numero ?></strong>.</p>
			<p>Antecessor: <strong><?= $numero - 1 ?></strong></p>
			<p>Sucessor: <strong><?= $numero + 1 ?></strong></p>
			<a href="index.html">Voltar</a>
		<?php endif; ?>
	</main>
</body>
</html>