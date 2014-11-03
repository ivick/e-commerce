<?php
	echo "<html><head><title>Operador: Subtração</title></head>";
	echo '<form method="post" action="operacoes.php">';
		echo '<label for="a">Valor A:</label><input type="text" maxlength="5" name="a" /><br/>';
		echo '-<br/>';
		echo '<label for="b">Valor B:</label><input type="text" maxlength="5" name="b" /><br/>';
		echo '<input type="submit" value="Subtrair!" />';
	echo '</form>';
	if(isset($_POST['a'])){
		$a = $_POST['a'];
		$b = $_POST['b'];
		echo '<h3>'.$a.' - '.$b.' = '.($a-$b);
	}
	echo "</body></html>";
	
?>