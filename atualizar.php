<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php

	$id = $_POST['rg'];
	$nome = $_POST['nome'];
	$end = $_POST['end'];

	$query = "UPDATE pessoa SET nome='$nome', end='$end' WHERE rg='$id'";

	$ok = mysqli_query($conn, $query);

	if($ok && mysqli_affected_rows($conn) == 0){
		echo "RG não encontrado na tabela!!!";
	}elseif($ok && mysqli_affected_rows($conn) > 0){
		echo "Atualizado com sucesso!!!";
	}else{
		echo "Não foi possível atualizar!!!";
	}
	

	mysqli_close($conn);

?>	