<?php include "cabecalho.php"; ?>

<form action="atualizar.php" method="POST">

	<label>RG</label>
	<input type="text" name="rg" id="rg" maxlength="20"><br><br>
	
	<label>Nome</label>
	<input type="text" name="nome" id="nome" maxlength="30"><br><br>

	<label>Endereço</label>
	<input type="text" name="end" id="end" maxlength="50"><br><br>

	<input type="submit" value="Enviar" id="enviarbtn">

</form>	