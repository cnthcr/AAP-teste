<?php
	if( isset($_POST["nome_user"]) ) {
		
		$nome_digitado = $_POST["nome_user"];
		$nascimento = $_POST["nasc_user"];
		
		$date = DateTime::createFromFormat('Y-m-d', $nascimento);
        // Formatar a data no formato dd/mm/aaaa
        $formatted_date = $date->format('d/m/Y');
		
		echo "Bom dia, " . $nome_digitado . "!";
		echo "<br>";
		echo "Você nasceu em: " . $formatted_date;
		echo "<hr>";
	}
?>

<h3>Formulario</h3>

<form method="POST" action="teste2.php">
	<input type="text" name="nome_user" placeholder="Digite seu nome">
	<input type="date" name="nasc_user">
	<button>Enviar</button>
</form>



