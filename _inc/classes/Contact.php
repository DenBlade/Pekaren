<?php
    class Contact extends Database{
        private $db;
        public function __construct()
        {
            $this->db = $this->make_connection();
        }
        public function insert_message($name, $email, $message){
            try{
                $sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
                $query = $this->db->prepare($sql);
                $query->execute([$name, $email, $message]);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>