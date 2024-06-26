<?php
    include_once('./partials/header.php')
    
?>
        <!-- banner -->
        <div class="banner">
            <img src="../img/banner.jpg" alt="banner">
            <h1>Menu</h1>
        </div>
        <!-- menu -->
        <section class="margin-top">
            <div class="container">
                <?php
                    $menu_object = new Menu();
                    $menu_array = $menu_object->selectAll();
                    for($i = 0; $i<count($menu_array); $i++){
                        if($i%2==0){
                            echo '<div class="row">';
                        }
                        echo '<div class="col-50">
                        <h6 class="float-right">'.$menu_array[$i]->price.'&euro;</h6>
                        <h6>'.$menu_array[$i]->name.'</h6>
                        <hr>
                        <br>
                        <img src="'.$menu_array[$i]->pic_url.'" alt="'.$menu_array[$i]->name.'" class="menu-example-img expanding-img">
                    </div>';
                    if($i%2==1){
                        echo '</div>';
                    }
                    }
                ?>
            </div>
        </section>
        <!-- pop-up image -->
        <div class="pop-up-image">
            <span class="close-pop-up">&times;</span>
            <img src="../img/bread.jpg" alt="Pop up image">
        </div>
    </main>
    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>