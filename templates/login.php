<?php
    include_once('./partials/header.php');
?>
        <div class="container">
            <div class="row">
                <div class="col-50">
                <h1>Sign in your account</h1>
                <h4>or <a href="./register.php" style="text-decoration: none;">register</a> if you don't have one</h4> <br>
                <form action="" id="register" method="POST" class="standart-form">
                        <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i> EMAIL</label><br>
                          <input type="email" placeholder="Vaš email" name="email" required><br>
                          <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> PASSWORD</label><br>
                          <input type="password" placeholder="Heslo" name="password" required><br>
                          <button type="submit" class="btn">Login</button>
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