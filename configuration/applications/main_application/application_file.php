<?php
    $array_background = $initial->scandir('configuration/applications/main_application/media/images/background');
    $selected_background = array_rand($array_background);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Тематический веб сайт на тему UX&UI</title>
        <link rel="stylesheet" href="configuration/applications/main_application/css/style.css">
        <link rel="shortcut icon" href="configuration/applications/main_application/media/images/favicon.ico" type="image/x-icon">
        <?=$jquery->use(); ?>

        <script type="text/javascript" src="configuration/applications/main_application/js/logic.js" async></script>
    </head>

    <body>
        <div class="page_setting_1">
            <div  style="background-image: url(configuration/applications/main_application/media/images/background/<?=$array_background[$selected_background]; ?>)" class="media_section">
                <div class="page_centering">
                    <div class="logo"></div>
                </div>

                <div class="title jsid_3">Тематический веб сайт <div class="light">на тему UX&UI</div></div>
                <div class="scrolling_button jsid_5"></div>
            </div>
        </div>

        <div class="page_setting_2">
            <div class="page_title jsid_4">Что такое <div class="blue">UX&UI</div></div>

            <div class="page_centering">
                <div class="left_column jsid_1">
                    <div class="image uiandui"></div>
                </div>

                <div class="right_column jsid_2">
                    <div class="text">
                          UX&UI дизайн — это проектирование любых пользовательских интерфейсов в которых удобство использования так же важно как и внешний вид.
                    </div>
                </div>
            </div>
        </div>

        <div class="page_setting_2">
            <div class="page_title jsid_4">Цель <div class="blue">UI&UX</div> дизайнера</div>

            <div class="page_centering">
                <div class="left_column jsid_1">
                    <div class="image target"></div>
                </div>

                <div class="right_column jsid_2">
                    <div class="text">
                          Довести пользователя до какой-то логической точки в интерфейсе. Сделать так, чтобы пользователь достиг своей цели.
                    </div>
                </div>
            </div>
        </div>

        <div class="page_setting_2">
            <div class="page_centering">
                <div class="footer jsid_4">Веб сайт разработан специально для Челябинского радиотехнического техникума</div>
            </div>
        </div>

        <div class="fixed_menu jsid_7">
            <div class="page_centering">
                <div class="logo"></div>
                <div class="menu_item js_mi_1">Что такое UX&UI</div>
                <div class="menu_item js_mi_2">Цель UI&UX дизайнера</div>
            </div>
        </div>

        <?=$page_up->use(); ?>
    </body>
</html>
