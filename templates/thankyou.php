<?php
    include_once('./partials/header.php');
?>
        <div class="container">
            <div class="row">
                <div class="col-50">
                    <h1>Ďakujeme za vyplnenie formulára</h1>
                    <?php
                        if(isset($_POST['contact_submitted'])){
                            $contact_object = new Contact();
                            $email = $_POST['email'];
                            $name = $_POST['name'];
                            $message = $_POST['message'];
                            $contact_object->insert_message($name, $email, $message);
                        }
                    ?>
                    <a href="./home.php" class="btn" id="thank-back-btn">Naspäť</a>
                </div>
                <div class="col-50">
                    <img src="../img/thank_you.jpg" alt="Thank You!" class="img-for-empty-space">
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>