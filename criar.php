<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php

	$nome = $_POST['nome'];
	$end = $_POST['end'];
	$rg = $_POST['rg'];

	$query = "INSERT INTO pessoa (nome,end,rg) VALUES ('$nome','$end','$rg')";

	$ok = mysqli_query($conn,$query);

	if($ok){
		echo "Cadastrado com sucesso!!!";
	}else{
		echo "Não cadastrado!!!";
	}

	mysqli_close($conn);
?>