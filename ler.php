<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
	
	$nome = $_POST['nome'];
	$query = "SELECT * FROM pessoa WHERE Nome = '$nome'";

	$dados = mysqli_query($conn,$query);

	if($linha = mysqli_fetch_array($dados)){
				echo "Ok <br>";
	}else{
		echo "Nenhum usuário encontrado com esse nome";
	}

	$dados = mysqli_query($conn,$query);
	
		while($linha = mysqli_fetch_array($dados)) {
			echo "<form action='atualizar.php' method='post'>";
			echo "Nome: <input type='text' name='nome' value='" . $linha["nome"] . "'><br>";
			echo "Endereço: <input type='text' name='end' value='" . $linha["end"] . "''><br>";
			echo "RG: <input type='text' name='rg' value='" . $linha["rg"] . "' readonly><br>";
			echo "<input type='submit' value='Atualizar'></form>";
			echo "<a href='deletar.php?rg=" . $linha["rg"] . "'>Excluir</a>";

		}
	

	mysqli_close($conn);

?>	