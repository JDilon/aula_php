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
				for($lin = 0; $lin < 2; $lin++)
				{
					echo "<tr>";
					for ($col = 0; $col < 2; $col++)
					{
						echo "<td>{$lin[$lin][$col]}</td>";
					}
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>