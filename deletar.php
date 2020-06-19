<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
	if($_POST['rg'])
		$rg = $_POST['rg'];
	else
		$rg = $_GET['rg'];

	$query = "DELETE FROM pessoa WHERE rg = '$rg'";

	$ok = mysqli_query($conn,$query);

	if($ok && mysqli_affected_rows($conn) == 0){
		echo "RG não encontrado na tabela!!!";
	}elseif($ok && mysqli_affected_rows($conn) > 0){
		echo "Excluído com sucesso!!!";
	}else{
		echo "Não foi possível excluir!!!";
	}

	mysqli_close($conn);

?>