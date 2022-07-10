<?php

$obra = array_values(array_filter($obras, fn($obra) => $obra['ID'] == $id_obra));

if (count($obra) < 1) {
    header("Location: /");
    die();
}

$obra = $obra[0];

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
                <div class="col-md-8 col-md-offset-2 portfolio-single-slide">
                    <div class="flexslider">
                        <ul class="slides">
                            <?php foreach($obra['DATA']['imagens'] as $img):?>
                            <li>
                                <img src="/assets/img/work/<?=$img?>" class="img-responsive" alt="">
                            </li>
                            <?php endforeach?>
                        </ul>
                    </div><!--flex slider-->
                    <div class="portfolio-single-desc">
                        <h3><?=$obra['DATA']['titulo']?></h3>
                        <p><?=$obra['DATA']['texto']?></p>
                        <hr>
                    </div><!--portfolio detail-->
                </div>
            </div>
        </div><!--portfolio single container end-->
        <div class="space-70"></div>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php")?>
    </body>
</html>
