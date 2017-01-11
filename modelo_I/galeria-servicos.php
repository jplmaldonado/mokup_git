<?php include_once("cabecalho.php"); ?> 
<style>

    .hide-bullets {
        list-style:none;
        margin-left: -40px;        
    }

    .thumbnail {
        padding: 0;
    }
    
    .carousel-inner{
        background: darkgray;
    }
    
    
    .carousel-inner>.item>img, .carousel-inner>.item>a>img {        
        margin: 0px auto;
        width: 100%;
    }
    
    

</style>

<div class="container">
    <h2>Galeria de Serviços - modelo 2</h2>

        <div id="main_area">
            <!-- Slider -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-12" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">                                        

                                        <div class="active item" data-slide-number="0">
                                            <img src="http://placehold.it/600x350&text=1"></div>

                                        <div class="item" data-slide-number="1">
                                            <img src="http://placehold.it/600x350&text=2"></div>

                                        <div class="item" data-slide-number="2">
                                            <img src="http://placehold.it/600x350&text=3"></div>

                                        <div class="item" data-slide-number="3">
                                            <img src="http://placehold.it/600x350&text=4"></div>

                                        <div class="item" data-slide-number="4">
                                            <img src="http://placehold.it/600x350&text=5"></div>

                                        <div class="item" data-slide-number="5">
                                            <img src="http://placehold.it/600x350&text=6"></div>

                                        
                                    </div>
                                    <!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Slider-->
                
                
                <div class="col-sm-4" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets">                       

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/150x150&text=1"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=2"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=3"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=4"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=5"></a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=6"></a>
                        </li>
                      
                    </ul>
                </div>
                
            </div>

        </div>
</div>
<?php include_once('rodape.php'); ?> 