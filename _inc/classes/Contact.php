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
        public function getRows(){
            try{
                $sql = "SELECT * FROM contacts";
                $query = $this->db->query($sql);
                return $query->rowCount();
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function content_mapping(){
            try{
                $sql = "SELECT * FROM contacts";
                $query = $this->db->query($sql);
                $rows = $query->fetchAll();
                echo '<table class="table-horizontal">
                        <tr>
                            <th>name</th>
                            <th>email</th>
                            <th>message</th>
                            <th>delete</th>
                            <th>edit</th>
                        <tr>';
                for($i = 0; $i<count($rows); $i++){
                    echo '<tr>';
                    echo '<td>'.$rows[$i]->name.'</td>';
                    echo '<td>'.$rows[$i]->email.'</td>';
                    echo '<td>'.$rows[$i]->message.'</td>';
                    echo '<td>
                            <form action ="" method="POST">
                                <button type="submit" class="btn border-10 no-shadow no-transform no-border" name="delete" value="'.$rows[$i]->contact_id.'"'.'>Vymazať</button>
                         </form>
                        </td>';
                    echo '<td>
                        <form action="update.php?page=Contact" method="POST">
                          <button type="submit" class="btn border-10 no-shadow no-transform no-border" name="edit_contact" value="'.$rows[$i]->contact_id.'"'.'>Editovať</button>
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
                $sql = "DELETE FROM contacts WHERE contact_id = ?";
                $query = $this->db->prepare($sql);
                $query->execute([$id]);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function edit_interface($id){
            $sql = "SELECT name, email, message FROM contacts WHERE contact_id = ?";
            $query = $this->db->prepare($sql);
            $query->execute([$id]);
            $user = $query->fetch();
            echo '<form action="table.php?page=Contact" method="POST" class="standart-form edit-form">
            <label for="name">Name</label><br>
            <input type="text" name="edit_name" value="'.$user->name.'" required><br>
            <label for="email">EMAIL</label><br>
              <input type="email" name="edit_email" value="'.$user->email.'" required><br>
              <label for="message">Message</label><br>
              <textarea id="message" cols="30" name="edit_message" rows="10">'.$user->message.'</textarea><br>
              <button type="submit" name="edit" class="btn no-border" value="'.$id.'">Submit</button>
            </form>';
        }
        public function edit(){
            $sql = "UPDATE contacts SET email = :email, name = :name, message = :message WHERE contact_id = :user_id";
            $query = $this->db->prepare($sql);
            $data = array("email" => $_POST['edit_email'], "name" => $_POST['edit_name'], "message" => $_POST['edit_message'], "user_id" => $_POST['edit']);
            $query->execute($data);
        }
    }
?>