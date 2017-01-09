<?php 
include("cabecalho.php");
?> 
<style>
    body{
        background: #324c33;
        color: white;
    }

    .conteudo-principal{
        text-align: center;        
    }
    .iconsdetalhe{
        width: 100px;        
        background: white;
        padding: 20px;
        border-radius: 30px; 
    }

    .institucional{
        background: none;
    }
    .institucional h1{
        font-size: 30pt;
    }

    .institucional div{
        margin-top: 40px;
    }

    .institucional button{
        margin-top: 40px;
    }   


    @media screen and (min-width: 992px) {
        .content-aside{
            width: 60%;
            margin:auto;
        }
    }

</style>



<div class="container conteudo-principal">
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

        <button class="btn btn-success">Entre em Contato
        </button>
    </div>
</div>

<?php 
include("rodape.php");
?>