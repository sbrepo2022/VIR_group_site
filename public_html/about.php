<?php
    $page = "about";
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
        <link rel="stylesheet" href="/css/about.css">
    </head>
    <body>
        <?php require('../core/header.php'); ?>

        <div class="container">
            <section class="section-margin">
                <div class="text-center about-title">Инженерно - строительная интеграция “VIR-Group”</div>
                <div class="about-description text-center mx-xl-4 mx-0">
                    Осуществляем полный комплекс проектных, строительно-монтажных работ под ключ (от эскиза до готового
                    полнокомплектного здания). Основная задача нашей компании – разработка комплексных решений для оптимального
                    распределения времени и ресурсов. Вам не нужно отвлекаться от бизнес-процессов, чтобы изучить рынок и выбрать
                    надежных подрядчиков – мы возьмем это на себя.
                </div>
            </section>
            <section class="section-margin">
                <h5 class="mb-5 text-center">Наши преимущества</h5>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 mb-4">
                        <div class="about-advantages">
                            <img class="lazy" data-src="/resources/icons/01.svg">
                            <div class="advantage-title text-center">Сотрудничество</div>
                            <div class="advantage-description text-center">
                                Мы сотрудничаем c крупнейшими производителями оборудования для систем отопления и теплоснабжения, вентиляции, кондиционирования и водоснабжения и канализации.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 mb-4">
                        <div class="about-advantages">
                            <img class="lazy" data-src="/resources/icons/02.svg">
                            <div class="advantage-title text-center">Поставки</div>
                            <div class="advantage-description text-center">
                                Мы осуществляем комплексные поставки инженерного оборудования и услуг, проектирование, монтаж инженерных систем на российском рынке.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 mb-4">
                        <div class="about-advantages">
                            <img class="lazy" data-src="/resources/icons/03.svg">
                            <div class="advantage-title text-center">Опыт</div>
                            <div class="advantage-description text-center">
                                Мы ведем свою историю с 2012 года. Опыт долгосрочной работы с поставщиками, развитые компетенции реализации проектов позволяют нам выполнять качественно свои обязательства перед заказчиками.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-margin">
                <h5 class="mb-5 text-center">Что мы предлагаем?</h5>
                <div class="offer-wrapper">
                    <div class="offer-card mb-4">
                        <div class="circle-border offer-inner">
                            <img class="lazy" data-src="/resources/icons/offer1.svg">
                        </div>
                        <div class="offer-description">
                            Воздушные Коммуникации
                        </div>
                    </div>
                    <div class="offer-card mb-4">
                        <div class="circle-border offer-inner">
                            <img class="lazy" data-src="/resources/icons/offer2.svg">
                        </div>
                        <div class="offer-description">
                            Проектирование Инженерных Систем
                        </div>
                    </div>
                    <div class="offer-card mb-4">
                        <div class="circle-border offer-inner">
                            <img class="lazy" data-src="/resources/icons/offer3.svg">
                        </div>
                        <div class="offer-description">
                            Водные Коммуникации
                        </div>
                    </div>
                    <div class="offer-card mb-4">
                        <div class="circle-border offer-inner">
                            <img class="lazy" data-src="/resources/icons/offer4.svg">
                        </div>
                        <div class="offer-description">
                            Системы Кондиционирования
                        </div>
                    </div>
                    <div class="offer-card mb-4">
                        <div class="circle-border offer-inner">
                            <img class="lazy" data-src="/resources/icons/offer5.svg">
                        </div>
                        <div class="offer-description">
                            Проектный консалтинг
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-margin">
                <h5 class="mb-5 text-center">Мы сотрудничаем</h5>
                <div class="partners-card">
                    <div class="partners-inner mb-4">
                        <img class="lazy" data-src="/resources/images/company1.png">
                        <img class="lazy" data-src="/resources/images/company2.png">
                        <img class="lazy" data-src="/resources/images/company3.png">
                        <img class="lazy" data-src="/resources/images/company4.png">
                        <img class="lazy" data-src="/resources/images/company5.png">
                    </div>
                    <div class="partners-footer">
                        <button class="circle-border partners-button" data-toggle="modal" data-target="#partnersDialog">
                            Все партнеры
                        </button>
                    </div>
                </div>
            </section>
            <section class="section-margin">
                <h5 class="mb-5 text-center">Наши контакты</h5>
                <div class="row">
                    <div class="col-xl-6 col-12">
                        <div class="contacts-title mb-2">Телефон</div>
                        <div class="mb-4">
                            <span class="lazy icon-md img-contain d-inline-block align-middle mr-2" data-src="/resources/icons/phone.svg"></span>
                            <span class="align-middle">8 800 555 9338</span>
                        </div>
                        <div class="contacts-title mb-2">E-mail</div>
                        <div class="mb-4">
                            <span class="lazy icon-md img-contain d-inline-block align-middle mr-2" data-src="/resources/icons/mail.svg"></span>
                            <span class="align-middle">info@eci-group.ru</span>
                        </div>
                        <div class="contacts-title mb-2">Адрес</div>
                        <div class="mb-4">
                            <span class="lazy icon-md img-contain d-inline-block align-middle mr-2" data-src="/resources/icons/geo.svg"></span>
                            <span class="align-middle">г. Москва, ул. Затонная, д. 5, к.3</span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="contact-map">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6eeae990d15a3d9a1cd54eee71af639e9a3dba4db8a1ad89ff5a8791b40ae04f&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php require('../core/footer.php'); ?>

        <div class="modal fade" id="partnersDialog" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 1200px;" role="document">
                <form class="modal-content" method="post">
                    <div class="partners-card">
                        <div class="d-flex mb-4">
                            <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                                <img class="d-dark" src="/resources/icons/close.svg">
                                <img class="d-light" src="/resources/icons/close_dark.svg">
                            </button>
                        </div>
                        <div class="partners-inner-d mb-4">
                            <span>ballu</span>
                            <span>веза</span>
                            <span>korf</span>
                            <span>prado</span>
                            <span>ogint</span>
                            <span>samsung</span>
                            <span>remak</span>
                            <span>vts</span>
                            <span>heaton</span>
                            <span>roda</span>
                            <span>lg</span>
                            <span>kentatsu</span>
                            <span>тепломаш</span>
                            <span>греерс</span>
                        </div>
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
