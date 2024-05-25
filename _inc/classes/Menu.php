<?php
    class Menu extends Database{
        private $db;
        public function __construct()
        {
            $this->db = $this->make_connection();
        }
        public function selectAll(){
            try{
                $sql = "SELECT * FROM menu";
                $query = $this->db->query($sql);
                $result = $query->fetchAll();
                return $result;
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function getRows(){
            try{
                $sql = "SELECT * FROM menu";
                $query = $this->db->query($sql);
                return $query->rowCount();
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>