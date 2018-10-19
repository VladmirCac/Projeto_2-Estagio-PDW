
<h2 class="espacoForm">
	<center>
		<i class="fa fa-pencil"></i>
		CADASTRO DE AUTOR
	<center>
</h2>
	<div class="container1">
		<form action="" method="post">	
			<div class="form-row align-items-center espacoForm">
		      	<div class="col-sm-6">
		     		 <input type="text" class="form-control" id="inputBusca" name="buscaAutor" placeholder="">
		    	</div>
		  		<div class="col-auto my-1">
			      	<button type="submit" class="btn btn-primary">
			      		<i class="fa fa-search-plus"></i>
			      		Consultar
			      	</button>
			      	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
			      		<i class="fa fa-floppy-o"></i>
			      		Cadastrar
			      	</button>
			    </div>
			</div>
		</form>
		<?php
			include_once("BuscaAutorBD.php");
			include_once("CadastraAutorBD.php");

		?>	
	</div>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Cadastrar Autor</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="" method="post">	
			<div class="form-row align-items-center espacoForm">
		      	<div class="col-sm-9">
		     		 <input type="text" class="form-control" id="inputBusca" name="inserirAutor" placeholder="">
		    	</div>
		  		<div class="col-auto my-1">
			      	<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal">
						<i class="fa fa-floppy-o"></i>
						Salvar
					</button>
			    </div>
			</div>
		</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>
