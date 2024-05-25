<?php
    include_once("./partials/header.php");
    if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == 0){
        header("Location: 404.php");
    }
    $user_object = new User();
    $contact_object = new Contact();
    $qna_object = new Qna();
    $menu_object = new Menu();
?>
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <h1 class="text-center">Admin rozhranie</h1> <br>
                </div>
            </div>
            <div class="row">
                <div class="col-100">
                    <h3>Tabuľky</h3>
                </div>
            </div>
                <div class="row">
                    <div class="col-100">
                    <table class="table-horizontal">
                        <?php
                            $navigation_object->admin_table($menu_object);
                            $navigation_object->admin_table($contact_object);
                            $navigation_object->admin_table($qna_object);
                            $navigation_object->admin_table($user_object);
                        ?>
                    </table>
                    </div>
                </div>
        </div>
    </main>
    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>
