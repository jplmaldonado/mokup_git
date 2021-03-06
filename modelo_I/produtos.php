<?php
include_once("cabecalho.php");
?>


<div class="container">
    <div class="jumbotron container-produtos">
        <h2>Produtos</h2>
        <h4>Breve texto explicativo</h4>
        <hr>
        <ul>
            <li>
                <img src="img/doc.png"/>
                <h4><a href="#" data-toggle="modal" data-target="#myModal">+ Mais Detalhes</a>
                </h4>
            </li>
            <li>
                <img src="img/doc.png"/>
                <h4><a href="#" data-toggle="modal" data-target="#myModal">+ Mais Detalhes</a>
                </h4>
            </li>
            <li>
                <img src="img/doc.png"/>
                <h4><a href="#" data-toggle="modal" data-target="#myModal">+ Mais Detalhes</a>
                </h4>
            </li>
        </ul>
    </div>
    
    <!-- Modal  data-target="#myModal" -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Produtos</h4>
                    </div>
                    <div class="modal-body">
                        <p>Texto Explicativo sobre o Produto</p><br/>
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