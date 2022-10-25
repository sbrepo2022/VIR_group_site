<?php
    require_once(__DIR__ . '/../core/scripts/template.php');

    $projects = [
        'stock_logistic_trade' => [
            'title' => 'ООО "СТОК ЛОДЖИСТИК ТРЕЙД"<br>СКЛАДСКОЕ ЗДАНИЕ С АБК',
            'images' => [
                '/resources/images/image_300.png'
            ],
            'works' => [
                'Системы отопления',
                'Системы теплоснабжения',
                'Системы общеобменной вентиляции',
                'Индивидуальный тепловой пункт с узлом учета тепловой энергии',
                'Системы автоматики ИТП и вентиляции'
            ]
        ],
        'spa_rezidence' => [
            'title' => 'СПА-КЛУБ<br>"РЕЗИДЕНЦИЯ" Г. ТРОИЦК',
            'images' => [
                '/resources/images/image_301.png',
                '/resources/images/image_272.png',
                '/resources/images/image_271.png',
                '/resources/images/image_269.png',
                '/resources/images/image_268.png',
                '/resources/images/image_266.png',
                '/resources/images/image_267.png',
            ],
            'works' => [
                'Системы общеобменной вентиляции',
                'Система вентиляции бассейна',
                'Системы противодымной вентиляции',
                'Система кондиционирования (VRF-система)',
                'Система автоматизации ИТП',
                'Система автоматизации вентиляции и отопления',
                'Система диспетчеризации'
            ]
        ],
        'artek' => [
            'title' => 'МДЦ<br>"АРТЕК" РЕСПУБЛИКА КРЫМ',
            'images' => [
                '/resources/images/image_273.png',
                '/resources/images/image_274.png',
            ],
            'works' => [
                'Системы общеобменной вентиляции',
                'Системы противодымной вентиляции',
                'Система кондиционирования (VRF-система)'
            ]
        ],
        'climat_st' => [
            'title' => 'ООО "КЛИМАТ-СТ"<br>СКЛАДСКОЕ ЗДАНИЕ С АБК Г. ХИМКИ',
            'images' => [
                '/resources/images/image_310.png',
                '/resources/images/image_284.png',
                '/resources/images/image_283.png',
                '/resources/images/image_282.png',
                '/resources/images/image_281.png',
                '/resources/images/image_286.png',
            ],
            'works' => [
                'Системы общеобменной вентиляции',
                'Системы отопления АБК',
                'Система отопления склада (тепловентиляторы)',
                'Система кондиционирования (мультисплит-системы)'
            ]
        ],
        'globus_tula' => [
            'title' => 'ГИПЕРМАРКЕТ<br>"ГЛОБУС" Г. ТУЛА',
            'images' => [
                '/resources/images/image_311.png',
                '/resources/images/image_312.png',
                '/resources/images/image_279.png',
                '/resources/images/image_277.png',
                '/resources/images/image_278.png',
            ],
            'works' => [
                'Системы общеобменной вентиляции',
                'Системы специальной вентиляции производственных цехов',
            ]
        ],
        'innocenter_skolkovo' => [
            'title' => 'ИННОЦЕНТР<br>"СКОЛКОВО"МОСКОВСКАЯ ОБЛАСТЬ',
            'images' => [
                '/resources/images/image_313.png',
            ],
            'works' => [
                'Системы общеобменной вентиляции',
            ]
        ],
        'psma_rus' => [
            'title' => 'ИННОЦЕНТР<br>"СКОЛКОВО"МОСКОВСКАЯ ОБЛАСТЬ',
            'images' => [
                '/resources/images/image_294.png',
                '/resources/images/image_295.png',
                '/resources/images/image_296.png',
                '/resources/images/image_314.png',
            ],
            'works' => [
                'Системы специальной вытяжной вентиляции',
            ]
        ],
        'gidrolika' => [
            'title' => 'ООО "ГИДРОЛИКА"<br>ПРОИЗВОДСТВЕННЫЙ КОРПУС С АБК',
            'images' => [
                '/resources/images/image_287.png',
                '/resources/images/image_291.png',
                '/resources/images/image_288.png',
                '/resources/images/image_289.png',
                '/resources/images/image_292.png',
                '/resources/images/image_290.png',
            ],
            'works' => [
                'Системы общеобменной вентиляции',
                'Системы отопления'
            ]
        ]
    ];

    $project_description = template(__DIR__ . '/../core/project_description.php', $projects[$_GET['project']]);
    print($project_description);
?>
