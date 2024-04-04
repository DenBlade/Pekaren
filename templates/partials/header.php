<?php
    require_once('../_inc/functions.php');
    $main_pages = array('Domov' => 'home.php', 'Menu' => 'menu.php', 'Otázky' => 'qna.php', 'Kontakt' => 'kontakt.php');
    $current_page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sme neveľky tím ľudi, ktorý rád vypieka chutne veci. Našou úlohou je zabezpečit vsetckých ľudi dobrým pečivom a za skvelú cenu.">
    <meta name="keywords" content="Pečivo, Zákusok, Torta, Naša pekáreň">
    <meta name="author" content="Klinkov Denys">
    <title><?php echo "Naša pekáreň | ".basename($_SERVER['SCRIPT_NAME'], '.php'); ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/banner.css">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
        add_styles($current_page_name);
    ?>
</head>
<body>
    <header>
        <!-- logo -->
        <div>
            <a href="index.html">
                <img src="../img/logo.png" alt="logo" id="logo">
            </a>
        </div>
        <!-- navigacia -->
            <nav class="main-nav">
                <ul class="main-menu" id="main-menu">
                    <?php
                        make_navigation_links($main_pages);
                    ?>
                </ul>
                <span class="hamburger" id="hamburger">
                    <i class="fa fa-bars"></i>
                </span>
            </nav>
    </header>
    <main>