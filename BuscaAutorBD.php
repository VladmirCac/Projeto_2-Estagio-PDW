

<?php
	
	

	if (!empty($_POST['buscaAutor'])){


		if (strlen($_POST['buscaAutor']) > 3){

			$busca = $_POST['buscaAutor'];

			include_once("conecta.inc.php");

			$sql = "SELECT * FROM autor WHERE nomeAutor LIKE '%$busca%'";
	
			$query = mysqli_query($conexao, $sql);

			if ($query->num_rows == 0) {

				echo "<div class='alert alert-danger espacoForm'><strong>Autor não encontrado!</strong> Verifique a busca.</div>";

			}else{

?>
<table class="table table-bordered table-striped">
	<thead class="thead-dark">
    	<tr>
      		<th>Excluir</th>
      		<th>Editar</th>
      		<th>Código</th>
     		<th>Nome</th>	
    	</tr>
  	</thead>
  	<tbody>
		<?php 
				while($tabela = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><a href=""><i class="fa fa-trash-o text-danger" style="font-size: 150%;"></i></a></td>
			<td><a href=""><i class="fa fa-pencil-square-o text-primary" style="font-size: 150%;"></i></a></td>
			<td><?=$tabela['codigoAutor'];?></td>
			<td><?=$tabela['nomeAutor'];?></td>
		</tr>
		<?php 
				}
			}
			}else{
				echo "<div class='alert alert-danger espacoForm'><strong>Busca inválida!</strong> Digite mais de 3 caracteres.</div>";
			}
		}	 	
			?>
	</tbody>
</table>
				



	