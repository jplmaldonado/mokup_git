<?php
include_once("cabecalho.php");
?>
<div id="master-servicos">
<div class="container">
<h2>Serviços</h2>

<ul>
    <li><img src="img/printer-.png"/>
        <h4>DIGITALIZAÇÃO</h4>
        <p>Convertemos aquivos físicos para digital.</p>
        <a href="#" data-toggle="modal" data-target="#myModal">+ Mais Detalhes</a>
    </li>

    <li><img src="img/film-roll.png"/>
        <h4>MICROFILMAGEM</h4>
        <p>Armazenamos e conservamos os documentos em filmes.</p>
        <a href="#" data-toggle="modal" data-target="#myModal">+ Mais Detalhes</a>
    </li>

    <li><img src="img/folder.png"/>
        <h4>ARQUIVO</h4>
        <p>Breve texto sobre este serviço.</p>
        <a href="#" data-toggle="modal" data-target="#myModal">+ Mais Detalhes</a>
    </li>
</ul>


<!-- Modal  data-target="#myModal" -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Serviços</h4>
            </div>
            <div class="modal-body">
                <p>Texto Explicativo sobre o Serviço</p><br/>
                <div class="items-modal">
                    <div class="row">
                        <div class="col-sm-6">
                        <a href="#">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/XVfOe5mFbAE" frameborder="0" allowfullscreen></iframe>
                        </div>
                                <h4>Video</h4>
                                </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="galeria-servicos.php" >
                                <img src="img/photo-camera.png"/>
                                <h4>Galeria</h4>
                            </a>
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
</div>
<?php
include_once("rodape.php");
?>