<?php
    include_once('./partials/header.php');
?>
        <div class="container">
            <div class="row">
                <div class="col-50">
                <h1>Registration form</h1><br>
                <form action="" id="register" method="POST" class="standart-form">
                        <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i> EMAIL</label><br>
                          <input type="email" placeholder="Vaš email" name="email" required><br>
                          <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> PASSWORD</label><br>
                          <input type="password" placeholder="Heslo" name="password" required><br>
                          <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> CONFIRM PASSWORD</label><br>
                          <input type="password" placeholder="Zopakujte heslo" name="confirm_password" required><br>
                          <button type="submit" class="btn">Register</button>
                        </form>
                </div>
                <div class="col-50">
                    <img src="../img/login_img.png" alt="Login" class="img-for-empty-space">
                </div>
            </div>
        </div>
    </main>

<?php
    include_once('./partials/footer.php');
?>