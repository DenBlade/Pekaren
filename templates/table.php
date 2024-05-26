<?php
    include_once("./partials/header.php");
    if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == 0){
        header("Location: 404.php");
    }
    $table_name = $_GET['page'];
    switch($table_name){
        case "User":
            $object = new User();
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
    if(isset($_POST['delete'])) {
        $object->delete($_POST['delete']);
        header("Location: table.php?page=$table_name");
    }  
    if(isset($_POST['edit'])){
        $object->edit();
    }
    
?>
    <div class="container">
            <div class="row">
                <div class="col-100">
                    <h1 class="text-center">Tabuľka <?=$table_name?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-100">
                    <?php
                    $object->content_mapping();
                    ?>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>