<?php
include_once("cabecalho.php");
?>

<div class="container">
<h2>Serviços</h2>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div id="carousselBanner" class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/banner.jpg">
      <div class="carousel-caption">
        <h3>Digitalização</h3>
        <a href="#" data-toggle="modal" data-target="#myModal">Mais Detalhes</a>
      </div>
    </div>
    <div class="item">
      <img src="img/banner.jpg">
      <div class="carousel-caption">
        <h3>Microfilmagem</h3>
        <a href="#" data-toggle="modal" data-target="#myModal">Mais Detalhes</a>
      </div>
    </div>
    <div class="item">
      <img src="img/banner.jpg">
      <div class="carousel-caption">
        <h3>Arquivo</h3>
        <a href="#" data-toggle="modal" data-target="#myModal">Mais Detalhes</a>
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
        <h4 class="modal-title" id="myModalLabel">Serviços</h4>
      </div>
      <div class="modal-body">
       <p>Texto Explicativo sobre o Serviço</p><br/>
       <img src="img/ic_play.png"/>
       <img src="img/ic_photos.png"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
</div>
<?php
include_once("rodape.php");
?>