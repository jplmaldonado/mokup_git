<?php
include_once("cabecalho.php");
?>
<style>
    body{
        background: #324c33;
        color: white;
    }

    .conteudo-principal{
        text-align: center;        
    }

    .container-clientes-certificacoes{
        background: white;
        color: #5d9753;
        padding: 20px;
    }

    .container-clientes-certificacoes hr{
        color: gray;
        border-top:1px solid #777777;
        margin-left: 10px;
        margin-right: 10px;
    }

    .clientes ul{
        margin-top: 20px;
        list-style: none;        
    }

    .clientes li{
        display: inline-block; 
    }

    .certificacoes ul{
        margin-top: 20px;
        list-style: none;
    }

    .certificacoes li{
        display: inline-block; 
    }

</style>


<div class="container">
    <div class="conteudo-principal">

        <div class="container-clientes-certificacoes">
            <div class="clientes">
                <h3>Clientes</h3>
                <ul>
                    <li><img src="img/cliente-1.png"</li>
                    <li><img src="img/cliente-2.png"</li>
                    <li><img src="img/cliente-3.png"</li>
                    <li><img src="img/cliente-4.png"</li>
                    <li><img src="img/cliente-5.png"</li>
                </ul>
            </div>

            <hr>

            <div class="certificacoes">
                <h3>Certificações</h3>
                <ul>
                    <li><img src="img/doc.png"</li>
                    <li><img src="img/doc.png"</li>
                    <li><img src="img/doc.png"</li>
                </ul>
            </div>
        </div>

    </div>
</div>


<?php
include_once("rodape.php");
?>