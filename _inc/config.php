<?php
    $main_pages = array('Domov' => 'home.php', 'Menu' => 'menu.php', 'Otázky' => 'qna.php', 'Kontakt' => 'kontakt.php');
    $current_page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
    require_once('../_inc/classes/Page.php');
    $page_object = new Page($current_page_name);
    require_once('../_inc/classes/Navigation.php');
    $navigation_object = new Navigation($main_pages);
    require_once('../_inc/classes/Database.php');
    require_once('../_inc/classes/User.php');
    session_start();
?>