<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>PRODUTO</h1>
		<table border ="1">
			<tr>
				<th>Nome</th>
				<th>preços (R$)</th>
			</tr>
			<?php
				$mat = array(
								array("nome" => "caderno", "preco"=> 31.56),
								array("nome" => "lapis", "preco"=> 2.30),
								array("nome" => "agenda", "preco"=> 25.41)
							);
				foreach($mat as $vet)
				{
					echo "<tr>";
					foreach ($vet as $dado)
					{
						echo "<td>{$dado}</td>";
					}
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>