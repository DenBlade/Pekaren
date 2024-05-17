<?php
    class Navigation{
        private $pages;
        public function __construct($pages_array)
        {
            $this->pages = $pages_array;
        }
        function make_navigation_links(){
            foreach($this->pages as $page_name => $page_link){
                echo '<li><a href="'.$page_link.'">'.$page_name.'</a></li>';
            }
        }
        function login_button(){
            if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true){
                echo '<li><a href="./logout.php" class="btn white-purple">LOGOUT</a></li>';
            }
            else{
                echo '<li><a href="./login.php" class="btn white-purple">LOGIN</a></li>';
            }
        }
    }
?>