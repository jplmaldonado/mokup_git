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
            </li>

            <li><img src="img/printer-.png"/>
                <h4>DIGITALIZAÇÃO</h4>
                <p>Convertemos aquivos físicos para digital.</p>
            </li>
            
            <li><img src="img/printer-.png"/>
                <h4>DIGITALIZAÇÃO</h4>
                <p>Convertemos aquivos físicos para digital.</p>
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