<?php
    include_once('./partials/header.php')
?>
        <!-- banner -->
        <div class="banner">
            <img src="../img/banner.jpg" alt="banner">
            <h1>Kontakt</h1>
        </div>
        <!-- formular -->
        <section class="margin-top">
            <div class="container">
                <div class="row">
                    <div class="col-50">
                        <h2>Máte otázky?</h2>
                        <p>Ak máte otázky, kuknite <b>Q&A</b> stránku, ak nepomohlo - napíšte nám. S radosťou vám pomožeme a odpovieme na akekoľvek otázky. Tým pomožete nám stáť lepšími podníkateľmi a naďalej rozvíjať našu pekáreň</p>
                        <br>
                        <p>Taktiež možete napísať nám mejl na <a href="mailto:nasapekaren@gmail.com">nasapekaren@gmail.com</a></p>
                    </div>
                    <div class="col-50 text-right" id="formular">
                        <h2>Napíšte nám</h2>
                        <form action="thankyou.php" id="contact" method="POST">
                          <input type="text" placeholder="Vaše meno" id="meno" name="name" required> <br>
                          <input type="email" placeholder="Vaš email" id="email" name="email" required><br>
                          <textarea placeholder="Vaša sprava" id="sprava" cols="30" name="message" rows="10"></textarea><br>
                          <input type="checkbox" id="suhlas" required>
                          <label for="suhlas"><i>Súhlasim so spracovaním osobných údajov.</i></label><br>
                          <input type="submit" name="contact_submitted" value="Odoslať" class="btn" id="btn-submit">
                        </form>
                    </div>
                </div>
            </div>
            
        </section>
    </main>  
    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>