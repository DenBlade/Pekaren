<?php
    require_once('../_inc/functions.php');
    require_once('../_inc/important_variables.php');
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sme neveľky tím ľudi, ktorý rád vypieka chutne veci. Našou úlohou je zabezpečit vsetckých ľudi dobrým pečivom a za skvelú cenu.">
    <meta name="keywords" content="Pečivo, Zákusok, Torta, Naša pekáreň">
    <meta name="author" content="Klinkov Denys">
    <title><?php echo "Naša pekáreň | ".$page_object->get_page_name(); ?></title> <!--from important_variables.php--> 
    <?php
        $page_object->add_styles(); // from important_variables.php
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
                        $navigation_object->make_navigation_links(); //from important_variables.php
                    ?>
                    <li><a href="./login.php" class="btn white-purple">LOGIN</a></li>
                </ul>
                <span class="hamburger" id="hamburger">
                    <i class="fa fa-bars"></i>
                </span>
            </nav>
    </header>
    <main>