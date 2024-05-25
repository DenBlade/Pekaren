<?php
    include_once("./partials/header.php");
    if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == 0){
        header("Location: 404.php");
    }
    $table_name = $_GET['page'];
    switch($table_name){
        case "User":
            $object = new User();
            $id = $_POST['edit_user'];
            break;
        case "Menu":
            $object = new Menu();
            $id = $_POST['edit_menu'];
            break;
    }
?>
    <div class="container">
            <div class="row">
                <div class="col-100">
                    <h1>Edit <?=$table_name?> instance</h1>
                </div>
            </div>
            <div class="row">
                    <?php
                        $object->edit_interface($id);
                    ?>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>