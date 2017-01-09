<?php
include_once("cabecalho.php");
?>
<div class="container">
<h1>Contato</h1>
 <div class="formulario">
	<form class="form-horizontal">
		<div class="form-group">
		<label class="control-label col-sm-2" for="email">Nome:</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" placeholder="Enter email">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="pwd">Email:</label>
			<div class="col-sm-10">          
				<input type="password" class="form-control" id="pwd" placeholder="Enter password">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="pwd">Telefone:</label>
			<div class="col-sm-10">          
				<input type="password" class="form-control" id="pwd" placeholder="Enter password">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="pwd">Descrição:</label>
			<div class="col-sm-10">          
				<textarea class="form-control" rows="8" cols="60"></textarea>
			</div>
		</div>
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-warning">Enviar</button>
			</div>
		</div>
	</form>
 	</div>
</div>

<?php
include_once("rodape.php");
?>