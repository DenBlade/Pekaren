<?php
    include_once("./partials/header.php");
    if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == 0){
        header("Location: 404.php");
    }
    $table_name = $_GET['page'];
    switch($table_name){
        case "User":
            header("Location: register.php");
            break;
        case "Menu":
            $object = new Menu();
            break;
        case "Contact":
            $object = new Contact();
            break;
        case "Qna":
            $object = new Qna();
            break;
    }
?>
    <div class="container">
            <div class="row">
                <div class="col-100">
                    <h1>Create <?=$table_name?> instance</h1>
                </div>
            </div>
            <div class="row">
                    <?php
                        $object->create_interface();
                    ?>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>