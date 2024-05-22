<?php
    include_once('./partials/header.php');
?>
        <!-- banner -->
        <div class="banner">
            <img src="../img/banner.jpg" alt="banner">
            <h1>Q&A</h1>
        </div>
        <section class="margin-top">
            <div class="container">
                <div class="row">
                    <h2>Kde vás nájsť? Aké sú ceny? A mnohé iné</h2>
                </div>
                <div class="row">
                    <h3>sa dozviete na tejto stránke</h3>
                </div>
                <div class="row">
                    <!-- accordion -->
                    <div class="accordion-container margin-top">
                        <?php
                            $qna_object = new Qna();
                            $accordion_array = $qna_object->selectAll();
                            foreach($accordion_array as $accordion_object){
                                echo '<div class="accordion">';
                                echo '<div class="question">'.$accordion_object->question.'</div>';
                                echo '<div class="answer">'.$accordion_object->answer.'</div>';
                                echo '</div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>