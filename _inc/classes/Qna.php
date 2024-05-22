<?php
    class Qna extends Database{
        private $db;
        public function __construct()
        {
            $this->db = $this->make_connection();
        }
        public function selectAll(){
            try{
                $sql = "SELECT * FROM qna";
                $query = $this->db->query($sql);
                $result = $query->fetchAll();
                return $result;
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>