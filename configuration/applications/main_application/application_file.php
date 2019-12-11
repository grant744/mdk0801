<?php
    $array_background = $initial->scandir('configuration/applications/main_application/media/images/background');
    $selected_background = array_rand($array_background);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Информационный ресурс</title>
        <link rel="stylesheet" href="configuration/applications/main_application/css/style.css">
        <?=$jquery->use(); ?>
    </head>

    <body>
        <div style="background-image: url(configuration/applications/main_application/media/images/background/<?=$array_background[$selected_background]; ?>)" class="default_page_setting media_section">
            <div class="logo"></div>
            <div class="scrolling_button"></div>
        </div>
    </body>
</html>
