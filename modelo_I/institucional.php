<?php 
include("cabecalho.php");
?> 
<div id="master">
    <div class="container conteudo-principal"
         style="background:#7ED595;">
        <div class="jumbotron institucional">
            <h1> PSG Tecnologia Aplicada </h1>
            <hr>
            <h3>Texto sobre a empresa + Diretrizes estratégicas</h3>        
            <div class="row content-aside">
                <div class="col-sm-6 col-md-6 ">
                    <img class="iconsdetalhe" src="img/play-button.png"/>
                    <h4>Video institucional</h4>
                </div>
                <div class="col-sm-6 col-md-6">
                    <img class="iconsdetalhe" src="img/photo-camera.png"/>
                    <h4>Galeria de Fotos</h4>
                </div>
            </div>
            <form action="contato.php">
                <button class="btn btn-success" href="contato.php">Entre em Contato</button>
            </form>
        </div>
    </div>
</div>

<?php 
include("rodape.php");
?>