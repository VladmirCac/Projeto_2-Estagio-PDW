<?php

	if (!empty($_POST['inserirAutor'])) {

		$autor = strtoupper($_POST['inserirAutor']);
		
		include_once("conecta.inc.php");

		$sql1 = "SELECT * FROM autor WHERE nomeAutor = '$autor'";

		$verificar = mysqli_query($conexao, $sql1);


		if ($verificar->num_rows == 0) {

			$sql = "INSERT INTO autor (nomeAutor) VALUES ('$autor')";

			$insert = mysqli_query($conexao, $sql);

			if(!$insert){
	    		echo "<div class='alert alert-danger espacoForm'><strong>Cadastro não realizado!</strong> Ocorreu um erro com o banco de dados.</div>";
			}else{
	   			echo "<div class='alert alert-success espacoForm'><strong>Ok!</strong> Cadastro realziado com sucesso.</div>";
			}
		}else{
			echo "<div class='alert alert-danger espacoForm'><strong>Cadastro não realizado!</strong> Autor ja existente. .</div>";
		}

	}

?>