<?php
    $main_pages = array('Domov' => 'home.php', 'Menu' => 'menu.php', 'Otázky' => 'qna.php', 'Kontakt' => 'kontakt.php');
    $current_page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
    $page_object = new Page($current_page_name);
?>