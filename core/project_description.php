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
        <link rel="stylesheet" href="/libs/fancybox/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/base.css">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/projects.css">
    </head>
    <body>
        <?php require('../core/header.php'); ?>

        <div class="container-fluid">
            <div class="text-path mb-4">
                <a href="/projects.php" class="link">Проекты</a>
                <span class="mr-2"> </span>><span class="mr-2"> </span>Карточка проекта
            </div>
            <h5 class="text-center mb-5"><?= $title ?></h5>
            <div class="row">
                <div class="col-xl-7 col-12 mb-4">
                    <div class="project-card-wrapper">
                        <div class="row">
                            <?php if (count($images) > 0) { ?>
                                <div class="col-12 mb-4">
                                    <a data-fancybox="gallery" href="<?= $images[0] ?>">
                                        <div class="lazy project-image-big img-cover" data-src="<?= $images[0] ?>"></div>
                                    </a>
                                </div>
                            <?php }  array_shift($images); ?>
                            <?php foreach ($images as $image) { ?>
                                <div class="col-lg-4 col-6 mb-4">
                                    <a data-fancybox="gallery" href="<?= $image ?>">
                                        <div class="lazy project-image-small img-cover" data-src="<?= $image ?>"></div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-12 mb-4">
                    <div class="works-title mb-4">Выполненные работы:</div>
                    <ul class="works-list">
                        <?php foreach ($works as $work) { ?>
                            <li class="text-works-elem mb-3">
                                <img src="/resources/icons/settings.svg" class="mr-2 mt-1">
                                <div><?= $work ?></div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <?php require('../core/footer.php'); ?>

        <script src="/libs/jquery/jquery.min.js"></script>
        <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/libs/lazyload/jquery.lazy.min.js"></script>
        <script src="/libs/fancybox/js/jquery.fancybox.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
