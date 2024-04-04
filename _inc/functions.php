<?php
function make_navigation_links($link_array){
    foreach($link_array as $page_name => $page_link){
        echo '<li><a href="'.$page_link.'">'.$page_name.'</a></li>';
    }
}
function add_styles($page_name){
    switch($page_name){
        case 'home':
            echo '<link rel="stylesheet" href="../css/pop-up-image.css">';
            break;
        case 'kontakt':
            echo '<link rel="stylesheet" href="../css/form.css">';
            break;
        case 'menu':
            echo '<link rel="stylesheet" href="../css/pop-up-image.css">';
            break;
        case 'qna':
            echo '<link rel="stylesheet" href="../css/accordion.css">';
            break;
        case 'thankyou':
            break;
    }
}
function add_scripts($page_name){
    switch($page_name){
        case 'home':
            echo '<script src="../js/pop-up-img.js"></script>';
            echo '<script src="../js/slider.js"></script>';
            break;
        case 'kontakt':
            echo '<script src="../js/formular.js"></script>';
            break;
        case 'menu':
            echo '<script src="../js/pop-up-img.js"></script>';
            break;
        case 'qna':
            echo '<script src="../js/accordion.js"></script>';
            break;
        case 'thankyou':
            break;
        }
}
?>