<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
	</head>
	<body>
		<table border ="1">
			<?php
				$mat = array(
								array(1,2),
								array(3,4)
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

