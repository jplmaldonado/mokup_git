<?php
include_once("cabecalho.php");
?>


<div class="container">
<div class="conteudo-principal">
<h2>Produtos - modelo 2</h2>
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
      <img src="img/teste.jpg">
      <div class="carousel-caption">
        <h3>Breve Texto Produto 1</h3>
        <p><a href="mais-detalhes-produtos.php" >Mais Detalhes</a></p>
      </div>
    </div>
    <div class="item">
      <img src="img/teste.jpg">
      <div class="carousel-caption">
        <h3>Breve Texto Produto 2</h3>
        <p><a href="mais-detalhes-produtos.php" >Mais Detalhes</a></p>
      </div>
    </div>
    <div class="item">
      <img src="img/teste.jpg">
      <div class="carousel-caption">
        <h3>Breve Texto Produto 3</h3>
        <p><a href="mais-detalhes-produtos.php" >Mais Detalhes</a></p>
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
</div>
</div>

<?php
include_once("rodape.php");
?>