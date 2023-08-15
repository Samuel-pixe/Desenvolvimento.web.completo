<!DOCTYPE html>
	<html>
	
	<head>
		<title></title>
	</head>
	
	<body>
		
	<?php
		$numeros = array();

		while (cout($numeros) <= 5) {
			
			$num = rand(1, 60);
				if(!in_array($num, $numeros)){
					$numeros[] = $num;
				}
		}

		print_r($numeros);
		?>
	</body>
	
	</html>
	