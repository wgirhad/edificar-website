<?php

$obras = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/obras.json'), true);

?>
<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <title>Edificando seus sonhos</title>
        <meta name="description" content="Empresa de construção civil atuando em Itatiba e região em SP, trabalhamos com imóveis e edifícios residenciais e comerciais, pagamentos facilitados.">
        <meta name="keywords" content="engenharia,civil,itatiba,construção,empreita,empreiteira">

        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/resources.php") ?>

    </head>
    <body>

        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/navigation.php") ?>

        <section id="slider-sec" class="slider-reg">
            <div class="main-flex-slider">
                <ul class="slides">
                    <li>
                        <figure>
                            <img src="/assets/img/img-1.jpg" class="img-responsive" alt="slider-img-1">
                            <figcaption class="slider-overlay ">
                                <div class="slider-text animated fadeInDown">
                                    <h1>Edificando sonhos!</h1>
                                    <p>Construção de imóveis e edificios residenciais e comerciais</p>
                                    <p class="slide-btn"><a href="/sobre/" class="btn btn-white btn-lg">Saiba mais</a></p>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="/assets/img/img-2.jpg" class="img-responsive" alt="slider-img-1">
                            <figcaption class="slider-overlay">
                                <div class="slider-text">
                                    <h1>Venda de imóveis na planta</h1>
                                    <p>Pagamento facilitado</p>
                                    <p class="slide-btn"><a href="/sobre/" class="btn btn-white btn-lg">Saiba mais</a></p>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="/assets/img/img-1.jpg" class="img-responsive" alt="slider-img-1">
                            <figcaption class="slider-overlay ">
                                <div class="slider-text animated fadeInDown">
                                    <h1>Edificando sonhos!</h1>
                                    <p>Trabalhamos com piscinas e área de lazer</p>
                                    <p class="slide-btn"><a href="/sobre/" class="btn btn-white btn-lg">Saiba mais</a></p>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
        </section><!--main flex slider end-->

        <div class="space-50"></div><div class="space-30"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading-sec">Obras recentes</h3>
                </div>
            </div><!--row-->
            <div class="row">
                <?php foreach($obras as $obra):?>
                <div class="col-md-4 col-sm-6 margin-btm-40">
                    <div class="portfolio-sec">
                        <div class="portfolio-thumnail">
                            <a href="obras/<?=$obra['ID']?>">
                                <img src="/assets/img/work/<?=$obra['DATA']['imagens'][0]?>" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="portfolio-desc text-center">
                            <h4 class="portfolio-post-title"><?=$obra['DATA']['titulo']?></h4>
                            <span class="portfolio-post-cat"><?=$obra['DATA']['cat']?></span>
                            <h4><a href="obras/<?=$obra['ID']?>" class="btn theme-btn-default btn-lg">Mais Detalhes</a></h4>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div><!--row portfolio item-->
        </div><!--recent work container end-->
        <div class="space-70"></div>

        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php")?>
    </body>
</html>
