<?php include "cabecalho.php"; ?>

<form action="criar.php" method="POST">
	<label>Nome</label>
	<input type="text" name="nome" id="nome" maxlength="30"><br><br>

	<label>Endereço</label>
	<input type="text" name="end" id="end" maxlength="50"><br><br>

	<label>RG</label>
	<input type="text" name="rg" id="rg" maxlength="20"><br><br>

	<input type="submit" value="Enviar" id="enviarbtn">

</form>	