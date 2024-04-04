<footer>
        <div class="container">
            <div class="row justify-center test">
                <div class="col-33 text-left">
                    <h4>Kto sme</h4>
                    <p>Sme neveľky tím ľudi, ktorý rád vypieka chutne veci. Našou úlohou je zabezpečit vsetckých ľudi dobrým pečivom a za skvelú cenu.</p>
                </div>
                <div class="col-33 text-center">
                    <h4>Kontaktujte nás</h4>
                    <p><i class="fa fa-envelope"></i><a href="mailto:nasapekaren@gmail.com">nasapekaren@gmail.com</a></p>
                    <p><i class="fa fa-phone"></i><a href="phoneto:88005553535">88005553535</a></p>
                </div>
                <div class="col-33 text-right">
                    <h4>Ryclé odkazy</h4>
                    <ul>
                        <?php
                            make_navigation_links($main_pages);
                        ?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-100 text-center">Copyright&copy;2023</div>
            </div>
        </div>
    </footer>
    <script src="../js/burger_menu.js"></script>
    <?php
        add_scripts($current_page_name);
    ?>
</body>
</html>