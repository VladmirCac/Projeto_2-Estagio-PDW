<h2 class="espacoForm">
	<center>
		<i class="fa fa-book"></i>
		CADASTRO DE LIVROS
	<center>
</h2> 
<div class="container1">
	<form action="#" method="post">
		<div class="form-row align-items-center espacoForm">
		    <label for="inputIsbn" class="col-sm-2 col-form-label">ISBN:</label>
	    	<div class="col-sm-2">
	     		 <input type="text" class="form-control" id="inputIsbn" name="isbn" placeholder="xxxxx">
	    	</div>
			<div class="col-auto my-1">
		    	<div class="form-check">
		     		<input class="form-check-input" type="checkbox" id="autoSizingCheck2">
		        	<label class="form-check-label" for="autoSizingCheck2">
		          	Livro sem ISBN
		        	</label>
		    	</div>
			</div>
		    <div class="col-auto my-1">
		      	<button type="submit" class="btn btn-primary">
		      		<i class="fa fa-cloud-download"></i>
		      		Buscar Informações
		      	</button>
		    </div>
		</div>
		<div class="form-row align-items-center espacoForm">
			<label for="inputTitulo" class="col-sm-2 col-form-label" name="titulo">Titulo:</label>
	    	<div class="col-sm-8">
	     		 <input type="text" class="form-control" id="inputTitulo" placeholder="...">
	    	</div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputAutor" class="col-sm-2 col-form-label" name="autor">Autor:</label>
	    	<div class="col-sm-6">
	     		 <input type="text" class="form-control" id="inputAutor" placeholder="...">
	    	</div>
	  		<div class="col-auto my-1">
		      	<button type="submit" class="btn btn-primary">
		      		<i class="fa fa-search-plus"></i>
		      		Consultar
		      	</button>
		    </div>
		    <div class="col-auto my-1">
		      	<button type="submit" class="btn btn-primary">
		      		<i class="fa fa-plus"></i>
		      		Cadastra
		      	</button>
		    </div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputEditora" class="col-sm-2 col-form-label">Editora:</label>
	    	<div class="col-sm-6">
	     		 <input type="text" class="form-control" id="inputEditora" placeholder="...">
	    	</div>
	  		<div class="col-auto my-1">
		      	<button type="submit" class="btn btn-primary">
		      		<i class="fa fa-search-plus"></i>
		      		Consultar
		      	</button>
		    </div>
		    <div class="col-auto my-1">
		      	<button type="submit" class="btn btn-primary">
		      		<i class="fa fa-plus"></i>
		      		Cadastra
		      	</button>
		    </div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputAssunto" class="col-sm-2 col-form-label">Assunto:</label>
	    	<div class="col-sm-6">
	     		 <input type="text" class="form-control" id="inputAssunto" placeholder="...">
	    	</div>
	  		<div class="col-auto my-1">
		      	<button type="submit" class="btn btn-primary">
		      		<i class="fa fa-search-plus"></i>
		      		Consultar
		      	</button>
		    </div>
		    <div class="col-auto my-1">
		      	<button type="submit" class="btn btn-primary">
		      		<i class="fa fa-plus"></i>
		      		Cadastra
		      	</button>
		    </div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputIdioma" class="col-sm-2 col-form-label">Idioma:</label>
	    	<div class="col-sm-6">
	     		 <input type="text" class="form-control" id="inputIdioma" placeholder="...">
	    	</div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputAno" class="col-sm-2 col-form-label">Ano de Publicação:</label>
	    	<div class="col-sm-1">
	     		 <input type="text" class="form-control" id="inputAno" placeholder="0000">
	    	</div>
	    	<label for="inputEdicao" class="col-sm-1 col-form-label">Edição:</label>
	    	<div class="col-sm-1">
	     		 <input type="text" class="form-control" id="inputEdicao" placeholder="00">
	    	</div>
	  	</div>	
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputPreco" class="col-sm-2 col-form-label">Preço:</label>
	    	<div class="col-sm-1">
	     		 <input type="text" class="form-control" id="inputPreco" placeholder="0,00">
	    	</div>
	    		<label for="inputMim" class="col-sm-1 col-form-label">Preço Mínimo:</label>
		    <fieldset disabled>		
		    	<div class="col-sm-6">
		     		 <input type="text" class="form-control" id="inputMim" placeholder="0,00">
		    	</div>
		    </fieldset> 
		   	<label for="inputMax" class="col-sm-1 col-form-label">Preço Máximo:</label>
		    <fieldset disabled>	
		    	<div class="col-sm-6">
		     		<input type="text" class="form-control" id="inputMax" placeholder="0,00">
		    	</div>
		    </fieldset>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputIdioma" class="col-sm-2 col-form-label">Condição:</label>
			<div class="col-sm-3">
				<select id="inputState" class="form-control">
	        		<option value="1">Usado</option>
	        		<option value="2">Novo</option>
	      		</select>
	      	</div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputPaginas" class="col-sm-2 col-form-label">Qtd. Páginas:</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="inputPaginas" placeholder="0">
	      	</div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputPeso" class="col-sm-2 col-form-label">Peso (g):</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="inputPeso" placeholder="0">
	      	</div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputColecao" class="col-sm-2 col-form-label">Coleção:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="inputColecao" placeholder="0">
	      	</div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputTraducao" class="col-sm-2 col-form-label">Tradução:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="inputTraducao" placeholder="0">
	      	</div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputIlustracao" class="col-sm-2 col-form-label">Ilustracao:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="inputIlustracao" placeholder="0">
	      	</div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputDimensao" class="col-sm-2 col-form-label">Dimensões:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="inputdimensao" placeholder="0">
	      	</div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputAcabamento" class="col-sm-2 col-form-label">Acabamento:</label>
			<div class="col-sm-5">
				<select id="inputState" class="form-control">
	        		<option value="1">Capa Comum</option>
	        		<option value="2">Capa Dura</option>
	        		<option value="3">Livro de Bolso</option>
	      		</select>
	      	</div>
	  	</div>
	  	<div class="form-row align-items-center espacoForm">
			<label for="inputSinopse" class="col-sm-2 col-form-label">Sinopse:</label>
			<div class="col-sm-7">
				<textarea class="form-control" id="inputSinopse" rows="3"></textarea>
	      	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="exampleFormControlFile1">Capa do Livro:</label>
	    	<input type="file" class="form-control-file" id="exampleFormControlFile1">
	  	</div>
	</form>
	<div style="margin:1%">
		<button type="button" class="btn btn-success btn-lg espacoForm">
			<i class="fa fa-floppy-o"></i>
			Salvar
		</button>
		<button type="button" class="btn btn-danger btn-lg espacoForm">
			<i class="fa fa-ban"></i>
			Cancelar
		</button>
	</div>
</div>


