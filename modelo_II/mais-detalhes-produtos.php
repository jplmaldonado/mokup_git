<?php include_once("cabecalho.php"); ?> 

<div class="container">
	<h1>Produtos - modelo 2</h1>
	<div class="conteudo-principal">
		<div class="detalhesProdutos">
			<h2> Produto Selecionado</h2>
			<p> - Texto explicativo sobre o produto </p>
			<hr/>
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<a href="#" data-toggle="modal" data-target="#myModal"><img src="img/play-button.png"/> Video</a></p>
				</div>
				<div class="col-sm-6 col-md-6">
					<a href="galeria-produtos.php"><img src="img/photo-camera.png"/> Galeria</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Produtos</h4>
				</div>
				<div class="modal-body">
					<div class="item-modal">
						<div class="row">
							<div class="video">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/XVfOe5mFbAE" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once('rodape.php'); ?> 