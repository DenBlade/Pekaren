<?php
    class Navigation{
        private $pages;
        public function __construct($pages_array)
        {
            $this->pages = $pages_array;
        }
        public function make_navigation_links(){
            foreach($this->pages as $page_name => $page_link){
                echo '<li><a href="'.$page_link.'">'.$page_name.'</a></li>';
            }
        }
        public function login_button(){
            if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true){
                echo '<li><a href="./logout.php" class="btn white-purple">LOGOUT</a></li>';
            }
            else{
                echo '<li><a href="./login.php" class="btn white-purple">LOGIN</a></li>';
            }
        }
        public function admin_link(){
            if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true && $_SESSION['is_admin'] == 1){
                echo '<li><a href="./admin.php" class="btn white-purple">Admin</a></li>';
            }
        }
        public function admin_table($object){
            echo '  <tr>
                        <th>'.get_class($object).'</th>
                        <td>Počet záznamov: '.$object->getRows().'</td>
                        <td><a class="btn border-10 no-shadow no-transform" href="./table.php?page='.get_class($object).'">Upraviť</a></td>
                        <td><a class="btn border-10 no-shadow no-transform" href="./create.php?page='.get_class($object).'">Add new</a></td>
                    </tr>';
        }
    }
?>