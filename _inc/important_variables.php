<?php
    $main_pages = array('Domov' => 'home.php', 'Menu' => 'menu.php', 'Otázky' => 'qna.php', 'Kontakt' => 'kontakt.php');
    $current_page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
    require_once('../_inc/classes/Page.php');
    $page_object = new Page($current_page_name);
    require_once('../_inc/classes/Menu.php');
    $menu_object = new Menu($main_pages);
?>