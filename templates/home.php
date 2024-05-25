<?php
    include_once('./partials/header.php');
?>
        <!-- slider -->
        <div class="visible-slide">
            <div class="slides-all"> 
                <div class="slide first-slide">
                    <img src="../img/slider1.jpg" alt="banner">
                    <h1 class="text-center">Ponúkame najčerstvejšie pečivo na Slovensku</h1>
                </div>
                <div class="slide">
                    <img src="../img/slider2.jpg" alt="banner">
                    <h1 class="text-center">Novoročné zľavy až 70%</h1>
                </div>
                <div class="slide">
                    <img src="../img/slider3.jpg" alt="banner">
                    <h1 class="text-center">Vychutnaj si aj ty</h1>
                </div>
            </div>
            <span class="prev" id="prev">&lt;</span>
            <span class="next" id="next">&gt;</span>
        </div>
        <br>
        <!-- menu -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-100 text-center">
                        <h2>Našé menu</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <img src="../img/menu_img/bread.jpg" class="menu-example-img expanding-img" alt="chlieb">
                        <h6 class="popis-produkta">Chlieb</h6>
                    </div>
                    <div class="col-25">
                        <img src="../img/menu_img/croissant.jpg" class="menu-example-img expanding-img" alt="croissant">
                        <h6 class="popis-produkta">Croissant</h6>
                    </div>
                    <div class="col-25">
                        <img src="../img/menu_img/cookie.jpg" class="menu-example-img expanding-img" alt="sušienka">
                        <h6 class="popis-produkta">Sušienka</h6>
                    </div>
                    <div class="col-25">
                        <img src="../img/menu_img/cake.jpg" class="menu-example-img expanding-img" alt="torta">
                        <h6 class="popis-produkta">Torta</h6>
                    </div>
                </div>
                <div class="row">
                    <a href="../templates/menu.php" class="btn">Celé menu</a>
                </div>
            </div>
        </section>
        <!-- pop-up image -->
        <div class="pop-up-image">
            <span class="close-pop-up">&times;</span>
            <img src="../img/menu_img/bread.jpg" alt="Pop up image">
        </div>
        <!-- zoznam -->
        <section class="margin-top">
            <div class="container">
                <div class="row">
                    <div class="col-100 text-center">
                        <h2>O našich tovaroch</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-100">
                        <h3>Našé tovary sú:</h3>
                        <ul>
                            <li><p>Lacné</p></li>
                            <li><p>Chutné</p></li>
                            <li><p>Čersvé</p></li>
                            <li><p>Nepôsobia škodu pre zdravie</p></li>
                            <li><p>Vhodné pre diabetikov</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- tabulka -->
        <section class="margin-top">
            <div class="container">
                <div class="row">
                    <div class="col-100 text-center">
                        <h2>Tabuľka nutričných hodnôt</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-100">
                        <!-- Tabuľka -->
                        <table class="table-classic">
                            <tr>
                                <th>Bielkoviny</th>
                                <th>Sacharidy</th>
                                <th>Tuky</th>
                            </tr>
                            <tr>
                                <td>8,01 g</td>
                                <td>41,5 g</td>
                                <td>1,2 g</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>Cukry</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>0,8 g</td>
                                <td>-</td>
                            </tr>
                        </table>
                    </div>
                        
                </div>
            </div>
        </section>
    </main>
    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>