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
        public function getRows(){
            try{
                $sql = "SELECT * FROM users";
                $query = $this->db->query($sql);
                return $query->rowCount();
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function content_mapping(){
            try{
                $sql = "SELECT user_id, email, role FROM users";
                $query = $this->db->query($sql);
                $rows = $query->fetchAll();
                echo '<table class="table-horizontal">
                        <tr>
                            <th>email</th>
                            <th>is_admin</th>
                            <th>delete</th>
                            <th>edit</th>
                        <tr>';
                for($i = 0; $i<count($rows); $i++){
                    echo '<tr>';
                    echo '<td>'.$rows[$i]->email.'</td>';
                    echo '<td>'.$rows[$i]->role.'</td>';
                    echo '<td>
                            <form action ="" method="POST">
                                <button type="submit" class="btn border-10 no-shadow no-transform no-border" name="delete_contact" value="'.$rows[$i]->user_id.'"'.'>Vymazať</button>
                         </form>
                        </td>';
                    echo '<td>
                        <form action="" method="POST">
                          <button type="submit" class="btn border-10 no-shadow no-transform no-border" name="edit_contact" value="'.$rows[$i]->user_id.'"'.'>Editovať</button>
                          </form>
                      </td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }

        }
        public function delete($id){
            try{
                $sql = "DELETE FROM users WHERE user_id = ?";
                $query = $this->db->prepare($sql);
                $query->execute([$id]);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }

    }
?>