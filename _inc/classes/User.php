<?php
    class User extends Database{
        private $db;
        public function __construct()
        {
            $this->db = $this->make_connection();
        }
        public function register($email, $password){
            try{
            $sql = "SELECT * FROM users WHERE email = ?";
            $query = $this->db->prepare($sql);
            $query->execute([$email]);
            if($query->rowCount() == 1){
                return false;
            }
            else{
                $data = array('user_email' => $email, 'user_password' => md5($password), 'user_role' => 0);
                $sql = "INSERT INTO users (email, password, role) VALUES (:user_email, :user_password, :user_role)";
                $query = $this->db->prepare($sql);
                $query->execute($data);
                return true;
                }
            }
            catch(PDOException $e){
                echo "Chyba pri registracii: ".$e->getMessage();
                return false;
            }
        }
        public function login($email, $password){
            try{
                $sql = "SELECT * FROM users WHERE email = ?";
                $query = $this->db->prepare($sql);
                $query->execute([$email]);
                $user = $query->fetch();
                if($user){
                    
                if($user->password === md5($password)){
                    $_SESSION['is_logged_in'] = true;
                    $_SESSION['is_admin'] = $user->role;
                    header('Location: home.php');
                    return true;
                }
                else{
                    echo "<b>Nespravne heslo</b><br><br>";
                    return false;
                }
                }
                else{
                    echo "<b>Taký použivateľ neexistuje</b><br><br>";
                    return false;
                }
            }
                catch(PDOException $e){
                    echo "Chyba pri registracii: ".$e->getMessage();
                    return false;
                }
        }

    }
?>