<?php
    $page = "job";
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
        <link rel="stylesheet" href="/css/job.css">
    </head>
    <body>
        <?php require('../core/header.php'); ?>

        <div class="container-fluid">
            <h5 class="text-center mb-5">Присоединяйтесь к нашей команде</h5>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-12 mb-4">
                    <div class="job-card">
                        <div class="job-title">Начальник строительного участка</div>
                        <div class="job-subtitle">Обязанности:</div>
                        <ul>
                            <li>Организация работ бригад по монтажу</li>
                            <li>Организация выполнения требований руководства</li>
                            <li>Организация взаимодействия со смежными подрядными организациями</li>
                            <li>Ведение документации</li>
                            <li>Организация снабжения участка расходными материалами для производства работ</li>
                        </ul>
                        <div class="job-subtitle">Требования:</div>
                        <ul>
                            <li>Образование профильное строительное или инженерное</li>
                            <li>Умение работать с рабочей документацией проекта</li>
                            <li>Умение работать с технической документацией поставляемого оборудования</li>
                            <li>Знание руководящих документов ГОСТ, СП, СНиП</li>
                            <li>Опыт работы от 1 года</li>
                        </ul>
                        <div class="job-subtitle">Условия:</div>
                        <ul>
                            <li>График работы: 5/5, 6/1</li>
                            <li>Оплата мобильной связи</li>
                            <li>Частичная компенсация затрат на топливо для автомобиля</li>
                            <li>Локация объектов: Москва, Московская область (до 70 км), ближайшие регионы (до 250 км)</li>
                        </ul>
                        <div class="text-center">
                            <button type="button" data-toggle="modal" data-target="#jobDialog">Откликнуться</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php require('../core/footer.php'); ?>

        <div class="modal fade" id="jobDialog" tabindex="-1" role="dialog" aria-labelledby="jobDialogTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form class="modal-content" method="post">
                    <div class="modal-header">
                        <div class="modal-tool-placeholder"></div>
                        <h5 class="modal-title" id="jobDialogTitle">Присоединяйтесь к нам</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img class="d-dark" src="/resources/icons/close.svg">
                            <img class="d-light" src="/resources/icons/close_dark.svg">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="job-small-text text-center mb-3">
                            Перед отправкой ознакомьтесь с <a class="job-small-link" href="#persData" data-toggle="modal">соглашением на обработку персональных данных</a>
                        </div>
                        <label class="text-input mb-4">
                            <input type="text" name="name" value="" placeholder="Имя" required>
                        </label>
                        <label class="text-input mb-4">
                            <input type="email" name="email" value="" placeholder="Email" required>
                        </label>
                        <label class="text-input mb-4">
                            <input type="tel" name="phone" value="" placeholder="Телефон" required>
                        </label>
                        <div class="select-input mb-4">
                            <select name="job" required>
                                <option value="0">Начальник строительного участка</option>
                            </select>
                        </div>
                        <label class="text-input mb-4">
                            <input type="text" name="start_date" value="" placeholder="Когда вы готовы начать?" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
                        </label>
                        <label class="text-input mb-2">
                            <input type="file" name="resume" value="" placeholder="Тема">
                            <div><span>Прикрепить резюме +</span></div>
                        </label>
                        <div class="job-small-text mb-4">
                            Максимум 15 МБ
                        </div>
                        <label class="checkbox-input mb-4">
                            <input type="checkbox" name="accept" required>
                            <div class="mr-3"></div>
                            <span>Я даю согласие на обработку моих персональных данных</span>
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="big-button px-5">Отправить заявку</button>
                    </div>
                </form>
            </div>
        </div>

        <?php require('../core/pers_data.php'); ?>

        <script src="/libs/jquery/jquery.min.js"></script>
        <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/libs/lazyload/jquery.lazy.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
