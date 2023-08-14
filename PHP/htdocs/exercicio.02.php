<!DOCTYPE html>
	<html>
	
	<head>
		<title></title>
	</head>
	
	<body>
		
	<?php
		function calcularIRPF($ssalario) { 
			Simposto = 0;
			
			if($salario <= 1903.98) { 
				$imposto = O;
			}
			
			else if($salario >= 1903.99 && $salario <= 2826.65) { 
				$imposto = ($salario * 7.5) / 100;
			}
			
			else if($salario >= 2826.66 && $salario <= 3751.05) {
				$imposto = ($salario * 15) / 100;
			}
			
			else if($salario >= 3751.06 && $salario <= 4664.08) {
				$imposto = ($salario * 22.5) / 100;	
			}
			else{ 
			Simposto = ($salario * 27.5) / 100;
			}
		return $imposto;
		}

		//chama/imprime o retorno da função passando o salário por parâmetro
		echo calcularIRPF(5000);
		?>
	</body>
	
	</html>
	