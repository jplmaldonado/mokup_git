<?php
include_once("cabecalho.php");
?>


<div class="container">
<h2>Produtos</h2>
<div class="carousel-psg">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/download.jpg">
      <div class="carousel-caption">
        <h3>Breve Texto Produto 1</h3>
        <p><a href="#" data-toggle="modal" data-target="#myModal">Mais Detalhes</a></p>
      </div>
    </div>
    <div class="item">
      <img src="img/download.jpg">
      <div class="carousel-caption">
        <h3>Breve Texto Produto 2</h3>
        <p><a href="#" data-toggle="modal" data-target="#myModal">Mais Detalhes</a></p>
      </div>
    </div>
    <div class="item">
      <img src="img/download.jpg">
      <div class="carousel-caption">
        <h3>Breve Texto Produto 3</h3>
        <p><a href="#" data-toggle="modal" data-target="#myModal">Mais Detalhes</a></p>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
       <p>- Texto Explicativo produto</p><br/>
       <div class="items-modal">
       <img src="img/play-button.png"/>
       <img src="img/photo-camera.png"/>
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