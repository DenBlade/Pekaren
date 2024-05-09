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
    }
?>