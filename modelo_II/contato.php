<?php
include_once("cabecalho.php");
?>
<div class="container">
    <h1>Contato</h1>
    <form class="form-horizontal contato">
        <div class="row">        
            <div class="col-md-6">
                <div class="formulario">
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
                </div>
            </div>
            <div class="col-md-6"> 

              <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=-54.57029342651368%2C-20.44082663794142%2C-54.56207513809205%2C-20.434754338450784&amp;layer=mapnik&amp;marker=-20.437790518173376%2C-54.566184282302856" style="border: 1px solid black"></iframe>

            </div>
        </div>

        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
</div>

<?php
include_once("rodape.php");
?>