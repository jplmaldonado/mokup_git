<?php
include_once("cabecalho.php");
?>

<style>
    .conteudo-principal{
        text-align: center;

    }
    
    .video{        
        width:65%;        
        margin: 0px auto;
    }

    @media screen and (min-width: 768px) {
        .video{        
            width: 75%;        
            margin: 0px auto;
        } 
    }

    @media screen and (min-width: 992px) {
        .video{        
            width: 35%;        
            margin: 0px auto;
        }
    }

    .orcamento{
        display: block;
        float: right;
        margin-right: 10px;        
        margin-bottom: 30px;
    }
    
    .newsletter{
        margin-top: 30px;        
    }
    .newsletter div{
        margin-top: 5px;
    }


</style>

<div class="container conteudo-principal">
    <div class="row">
        <div class="orcamento">
            <button class="btn btn-success">
                SOLICITE UM ORÇAMENTO
            </button>
        </div>
    </div>

    <div class="row">
        <div class="video">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/XVfOe5mFbAE" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="row newsletter">
        
        <div class="col-sm-2 col-md-2" style="text-align: center;">
            <label class="title">ASSINE NOSSA NEWSLETTER</label>
        </div>

        <div class="col-sm-3 col-md-3 ">
            <input class="form-control" type="text" placeholder="Nome">
        </div>

        <div class="col-sm-3 col-md-3  ">
            <input class="form-control" type="email" placeholder="Email">
        </div>

        <div class="col-sm-3 col-md-3  ">
            <input class="form-control" type="text" placeholder="Cidade-UF">
        </div>
        <div class="col-sm-1 col-md-1 ">
            <input class="btn" type="submit" placeholder="Cidade-UF">
        </div>
    </div>
</div>

<?php
include_once("rodape.php");
?>