<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ModalGR</title>
</head>
<body>
	<form action="" method="post">
		<label for="valor_quilo">Digite o valor do quilo: </label>
		<input type="text" class="moeda" name="valor_quilo" id="valor_quilo" value="<?= $valor_prato ?>">
		<label for="taxa_prato">Digite a taxa do prato em porcentagem: </label>
		<input type="text" class="porcentagem" name="taxa_prato" id="taxa_prato" value="<?= $taxa_prato ?>">
		<label for="peso_prato">Digite o peso do prato em gramas: </label>
		<input type="text" class="gramas" name="peso_prato" id="peso_prato" value="<?= $peso_prato ?>">
		<input type="submit" value="Calcular" name="acao">
	</form>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.moeda').maskMoney({
				prefix: 'R$ ',
				decimal: ',',
				thousands: '.'
			});
			$('.porcentagem').mask('##0.00%', { reverse: true });
			$('.gramas').mask('0000g', { reverse: true });
		});
	</script>
	<?php
	if (isset($_POST['acao'])) {
		$valor_prato = $_POST['valor_quilo'];
		$taxa_prato = $_POST['taxa_prato'];
		$peso_prato = $_POST['peso_prato'];
		$valor_prato = str_replace('R$ ', '', $valor_prato);
		$valor_prato = str_replace(',', '.', $valor_prato);
		$taxa_prato = str_replace('%', '', $taxa_prato);
		$peso_prato = str_replace('g', '', $peso_prato);
		if (!empty($valor_prato) && !empty($taxa_prato) && !empty($peso_prato)) {
			$valor_liquido = $peso_prato - (($peso_prato * $taxa_prato) / 100);
			$valor_final = ($valor_liquido / 1000) * $valor_prato;
			$valor_final = number_format($valor_final, 2, ',', '.');
			echo "<p>O prato {$peso_prato} gramas custa R$: {$valor_final}</p>";
		}
		else {
			echo '<p>Preencher os 3 campos.</p>';
		}
	}
	?>
</body>
</html>
