<?php 
include("cabecalho.php");
?> 
<div class="container conteudo-principal">
    <div id="boxInstitucional" class="institucional">
        <h1> PSG Tecnologia Aplicada </h1>
        <hr>
    <div id="rowInstitucional" class="row">
        <div class="col-md-6">
        <p align="left">A PSG Tecnologia Aplicada Ltda é uma empresa consolidada, atuante no mercado de prestação de serviços há mais de 10 anos. Tem como principal segmento de atuação o ramo da informática, desenvolvendo soluções em TI para o Setor Público.<br/>
        
        <br/>Com sua experiência e capacidade ao longo desses anos, a PSG vem se destacando em sua trajetória de sucesso, acompanhando as tendências e inovações tecnológicas através de produtos líderes de mercado para desenvolver soluções eficazes e garantir aos seus clientes a plena satisfação.<br/>
        <br/>A PSG conta com uma equipe técnica altamente qualificada, com experiência reconhecida na área de TI, totalmente aptos à prestação de serviços de altíssimo nível, proporcionando resultados satisfatórios às reais necessidades de seus clientes.</p>  </div>
        <div class="col-md-6">
        <img src="img/integration.jpg">
        </div>    
    </div>
        <div class="row content-aside">
            <div class="col-sm-6 col-md-6 ">
            <a href="#" data-toggle="modal" data-target="#myModal">
                <img class="iconsdetalhe" src="img/play-button.png"/>
                <h4>Video institucional</h4>
            </a>
            </div>
            <div class="col-sm-6 col-md-6">
                <a href="galeria-institucional.php">
                <img class="iconsdetalhe" src="img/photo-camera.png"/>
                <h4>Galeria de Fotos</h4>
                </a>
            </div>
        </div>
        <form action="contato.php">
        <button class="btn btn-success" href="contato.php">Entre em Contato</button>
        </form>
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
<?php 
include("rodape.php");
?>