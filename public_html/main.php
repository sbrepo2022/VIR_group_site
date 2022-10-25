<?php
    $page = "main";
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
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="body-100 d-flex flex-column">
        <?php require('../core/header.php'); ?>

        <div class="flex-grow-1 flex-shrink-0 container-fluid d-flex flex-column">
            <div class="row flex-grow-1">
                <div class="col-lg-6 col-12 d-flex flex-column">
                    <div class="my-auto">
                        <div class="slogan mb-4">
                            Создаем системы опережающие <span class="text-color-active">будущее!</span>
                        </div>
                        <div class="text-description mb-4">
                            VIR Group является интегратором деятельности инжиниринговых компаний. Предоставляем различный спектр услуг.
                        </div>
                        <div class="text-center">
                            <button type="button" class="big-button" data-toggle="modal" data-target="#orderDialog">Оставить заявку</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="lazy h-100 img-contain my-4 mx-5 img-main" data-src="/resources/images/image_259.png"></div>
                </div>
            </div>
        </div>

        <?php require('../core/footer.php'); ?>

        <div class="modal fade" id="orderDialog" tabindex="-1" role="dialog" aria-labelledby="orderDialogTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form class="modal-content" method="post">
                    <div class="modal-header">
                        <div class="modal-tool-placeholder"></div>
                        <h5 class="modal-title" id="orderDialogTitle">Оставить заявку</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img class="d-dark" src="/resources/icons/close.svg">
                            <img class="d-light" src="/resources/icons/close_dark.svg">
                        </button>
                    </div>
                    <div class="modal-body">
                        <label class="text-input mb-4">
                            <input type="text" name="name" value="" placeholder="Имя" required>
                        </label>
                        <label class="text-input mb-4">
                            <input type="email" name="email" value="" placeholder="Email" required>
                        </label>
                        <label class="text-input mb-4">
                            <input type="tel" name="phone" value="" placeholder="Телефон" required>
                        </label>
                        <label class="text-input mb-4">
                            <input type="text" name="address" value="" placeholder="Адрес">
                        </label>
                        <label class="text-input mb-4">
                            <input type="text" name="theme" value="" placeholder="Тема">
                        </label>
                        <div class="text-area">
                            <textarea name="message" rows="3" placeholder="Добавьте сообщение"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="big-button px-5">Отправить заявку</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="/libs/jquery/jquery.min.js"></script>
        <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/libs/lazyload/jquery.lazy.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
