<?php 

	function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = ""){
		echo "Destinatarios: " . $destinatarios. "<br>";
		echo "CC: " . $cc. "<br>";
		echo "Assunto: " . $assunto. "<br>";
		echo "Mensagem: " . $mensagem. "<br>";
	}

		sendEmail(
			destinatarios: "email-exemplo@teste.com",
			assunto: "Argumentos nomeados",
			mensagem:"Dominando a feature de argumentos nomeados do PHP 8" 
		)

		echo "<hr>";

		sendEmail(
			"email-exemplo@teste.com",
			"cc@teste.com"
			"Argumentos nomeados"
			"Dominando a feature de argumentos nomeados do PHP 8" 
		)

		echo "<hr>";

		sendEmail(
			"email-exemplo@teste.com",
			"Argumentos nomeados"
			"Dominando a feature de argumentos nomeados do PHP 8" 
		)

?>