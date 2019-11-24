<?php
    error_reporting(0);

    $app = $_GET['app'];

    // index.php?app=example
    switch ($app)
    {
        case 'news': include('app/news/load_file.php'); break;
        case 'music': include('app/music/load_file.php'); break;
        default: include('app/main_app/load_file.php');
    }
?>
