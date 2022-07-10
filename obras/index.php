<?php

$obras = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/obras.json'), true);

if (preg_match_all('#/obras/(\d)#', $_SERVER['REQUEST_URI'], $matches)) {
    $id_obra = $matches[1][0];
    include __DIR__ . '/view.php';
    die();
}

?>
<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <title>Edificando seus sonhos</title>
        <meta name="description" content="Empresa de construção civil atuando em Itatiba e região em SP, trabalhamos com imóveis e edifícios residenciais e comerciais, pagamentos facilitados.">
        <meta name="keywords" content="engenharia,civil,itatiba,construção,empreita">

        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/resources.php") ?>

    </head>
    <body>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/navigation.php") ?>


        <section id="content-region-3" class="padding-40 page-tree-bg">
            <div class="container">
                <h3 class="page-tree-text">
                    Obras
                </h3>
            </div>
        </section><!--page-tree end here-->
        <div class="space-70"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="portfolio-filters">
                        <li class="filter active" data-filter="all">Todas</li>
                        <li class="filter" data-filter="residencial">Residenciais</li>
                        <li class="filter" data-filter="comercial">Comerciais</li>
                        <li class="filter" data-filter="edificio">Edifícios</li>
                    </ul>
                    <div id="grid" class="row">
                        <?php foreach($obras as $obra):?>
                        <div class=" mix <?=$obra['DATA']['cat']?> col-md-4 col-sm-6 margin-btm-40">
                            <div class="portfolio-sec">
                                <div class="portfolio-thumnail">
                                    <a href="<?=$obra['ID']?>">
                                        <img src="/assets/img/work/<?=$obra['DATA']['imagens'][0]?>" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <div class="portfolio-desc text-center">
                                    <h4 class="portfolio-post-title"><?=$obra['DATA']['titulo']?></h4>
                                    <span class="portfolio-post-cat"><?=$obra['DATA']['cat']?></span>
                                    <h4><a href="<?=$obra['ID']?>" class="btn theme-btn-default btn-lg">Mais Detalhes</a></h4>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-70"></div>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php")?>
    </body>
</html>
