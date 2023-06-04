<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ModalGR</title>
</head>
<body>
	<h1>Desafio 2</h1>
	<form action="" method="post">
		<label for="">Insira um texto</label>
		<textarea name="text_area" id="" cols="30" rows="10"><?= $text ?></textarea>
		<input type="submit" value="Enviar" name="acao">
	</form>
	<?php
	if (isset($_POST['acao'])) {
		$text = $_POST['text_area'];
		if (!empty($text)) {
			$count = substr_count($text, 'a');
			echo "<p>Quantidade de letras “a” minúscula: {$count}</p>";
		}
		else {
			echo '<p>Escreva algo no texarea.</p>';
		}
	}
	?>
</body>
</html>
