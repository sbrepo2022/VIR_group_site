<?php
    $page = "projects";
    $theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>

<!DOCTYPE html>
<html theme="<?= $theme ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>

        <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/base.css">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/projects.css">
    </head>
    <body>
        <?php require('../core/header.php'); ?>

        <div class="container-fluid">
            <h5 class="text-center mb-5">Наши проекты:</h5>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <a href="/project_description.php?project=stock_logistic_trade">
                        <div class="lazy project-card img-cover" data-src="/resources/images/image_265.png">
                            <div class="d-flex">
                                <span class="m-auto">
                                    ООО "СТОК ЛОДЖИСТИК ТРЕЙД"<br>СКЛАДСКОЕ ЗДАНИЕ С АБК
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <a href="/project_description.php?project=spa_rezidence">
                        <div class="lazy project-card img-cover" data-src="/resources/images/image_270.png">
                            <div class="d-flex">
                                <span class="m-auto">
                                    СПА-КЛУБ<br>"РЕЗИДЕНЦИЯ" Г. ТРОИЦК
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <a href="/project_description.php?project=artek">
                        <div class="lazy project-card img-cover" data-src="/resources/images/image_275.png">
                            <div class="d-flex">
                                <span class="m-auto">
                                    МДЦ<br>"АРТЕК" РЕСПУБЛИКА КРЫМ
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <a href="/project_description.php?project=climat_st">
                        <div class="lazy project-card img-cover" data-src="/resources/images/image_285.png">
                            <div class="d-flex">
                                <span class="m-auto">
                                    ООО "КЛИМАТ-СТ"<br>СКЛАДСКОЕ ЗДАНИЕ С АБК Г. ХИМКИ
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <a href="/project_description.php?project=globus_tula">
                        <div class="lazy project-card img-cover" data-src="/resources/images/image_276.png">
                            <div class="d-flex">
                                <span class="m-auto">
                                    ГИПЕРМАРКЕТ<br>"ГЛОБУС" Г. ТУЛА
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <a href="/project_description.php?project=innocenter_skolkovo">
                        <div class="lazy project-card img-cover" data-src="/resources/images/image_280.png">
                            <div class="d-flex">
                                <span class="m-auto">
                                    ИННОЦЕНТР<br>"СКОЛКОВО" МОСКОВСКАЯ ОБЛАСТЬ
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <a href="/project_description.php?project=psma_rus">
                        <div class="lazy project-card img-cover" data-src="/resources/images/image_297.png">
                            <div class="d-flex">
                                <span class="m-auto">
                                    КОМПАНИЯ "ПСМА РУС"
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <a href="/project_description.php?project=gidrolika">
                        <div class="lazy project-card img-cover" data-src="/resources/images/image_293.png">
                            <div class="d-flex">
                                <span class="m-auto">
                                    ООО "ГИДРОЛИКА"<br>ПРОИЗВОДСТВЕННЫЙ КОРПУС С АБК
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <?php require('../core/footer.php'); ?>

        <script src="/libs/jquery/jquery.min.js"></script>
        <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/libs/lazyload/jquery.lazy.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
