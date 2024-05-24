<?php
    include_once("./partials/header.php");
    if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == 0){
        header("Location: 404.php");
    }
?>
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <h1>Admin rozhranie</h1>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>
