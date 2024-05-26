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
        public function getRows(){
            try{
                $sql = "SELECT * FROM qna";
                $query = $this->db->query($sql);
                return $query->rowCount();
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function content_mapping(){
            try{
                $sql = "SELECT * FROM qna";
                $query = $this->db->query($sql);
                $rows = $query->fetchAll();
                echo '<table class="table-horizontal">
                        <tr>
                            <th>question</th>
                            <th>answer</th>
                            <th>delete</th>
                            <th>edit</th>
                        <tr>';
                for($i = 0; $i<count($rows); $i++){
                    echo '<tr>';
                    echo '<td>'.$rows[$i]->question.'</td>';
                    echo '<td>'.$rows[$i]->answer.'</td>';
                    echo '<td>
                            <form action ="" method="POST">
                                <button type="submit" class="btn border-10 no-shadow no-transform no-border" name="delete" value="'.$rows[$i]->qna_id.'"'.'>Vymazať</button>
                         </form>
                        </td>';
                    echo '<td>
                        <form action="update.php?page=Qna" method="POST">
                          <button type="submit" class="btn border-10 no-shadow no-transform no-border" name="edit_qna" value="'.$rows[$i]->qna_id.'"'.'>Editovať</button>
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
                $sql = "DELETE FROM qna WHERE qna_id = ?";
                $query = $this->db->prepare($sql);
                $query->execute([$id]);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function edit_interface($id){
            $sql = "SELECT question, answer FROM qna WHERE qna_id = ?";
            $query = $this->db->prepare($sql);
            $query->execute([$id]);
            $user = $query->fetch();
            echo '<form action="table.php?page=Qna" method="POST" class="standart-form edit-form">
            <label for="question">Question</label><br>
            <textarea name="edit_question" cols="30" rows="10" required>'.$user->question.'</textarea><br>
            <label for="answer">Answer</label><br>
            <textarea name="edit_answer" cols="30" rows="10"required>'.$user->answer.'</textarea><br>
            <button type="submit" name="edit" class="btn no-border" value="'.$id.'">Submit</button>
            </form>';
        }
        public function edit(){
            $sql = "UPDATE qna SET question = :question, answer = :answer WHERE qna_id = :qna_id";
            $query = $this->db->prepare($sql);
            $data = array("question" => $_POST['edit_question'], "answer" => $_POST['edit_answer'], "qna_id" => $_POST['edit']);
            $query->execute($data);
        }
        public function create_interface(){
            echo '<form action="table.php?page=Qna" method="POST" class="standart-form edit-form">
            <label for="question">Question</label><br>
            <textarea name="create_question" cols="30" rows="10" required></textarea><br>
            <label for="answer">Answer</label><br>
            <textarea name="create_answer" cols="30" rows="10"required></textarea><br>
            <button type="submit" name="create" class="btn no-border">Submit</button>
            </form>';
        }
        public function create(){
            try{
            $sql = "INSERT INTO qna (question, answer) VALUES (:question, :answer)";
            $data = array("question" => $_POST['create_question'], "answer" => $_POST['create_answer']);
            $query = $this->db->prepare($sql);
            $query->execute($data);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>