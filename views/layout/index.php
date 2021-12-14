<?php
    include_once 'header.php';
    include_once 'menu.php';
    if (!isset($_GET['v']) || $_GET['v']=='home') {
        include_once $s['base']['path'].'views/slider.php';
        include_once $s['base']['path'].'views/index.php';

    }else {
        include_once $s['base']['path'].'views/'.$_GET['v'].'.php';
    }

    include_once 'footer.php';
?>